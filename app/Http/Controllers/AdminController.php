<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Register;
use Auth;
use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{

//==========================LOGIN=======================================

    public function masuk(Request $request, Admin $admin)
    {
        $validator = Validator::make($request->all(),

            array(

                'username' => 'required|min:5',
                'password' => 'required|min:5',
            ),

            array(

                'username.required' => 'Username tidak boleh kosong',
                'username.min' => 'Maaf, Username harus 5 karakter!',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Maaf, Password minimal 5 karakter!',
            )
        );

        //Kondisi validasi (Pesan Error yang akan terjadi)
        if ($validator->fails()) {

            $eror = $validator->messages()->all();

            return redirect('/')->withErrors($validator);

        } else {

            $username = $request->username;
            $password = $request->password;

            $admin = Admin::where('username', $username)->first();

            if ($admin) {
                $db_encrypted_password = $admin->password;
                $salt = $admin->salt;

                //Pengecekan Password
                $hasil_pass = $this->verifyHash($password . $salt, $db_encrypted_password);

                if ($hasil_pass) {

                    $take = Admin::where('username', $username)->first();

                    // auth()->guard('admin')->attempt();
                    session(['username' => $take->username]);

                    return redirect('/index');
                } else {
                    return redirect('/')->with('gagal', 'Password Anda Salah');
                }
            } else {
                return redirect('/')->with('gagal', 'Maaf, Username atau Password Anda Salah!');
            }
        }
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function index(Request $request)
    {
        return view("index");
    }

//============================LOGOUT=================================//

    public function logout(Request $request)
    {

        $request->session()->regenerate();
        $request->session()->flush();

        return redirect('/');
    }

//============================REGISTER=================================//

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),

            array(
                'username' => 'required|min:5|unique:tb_register,username',
                'password' => 'required|min:5',
            ),

            array(
                'username.required' => 'username tidak boleh kosong',
                'username.min' => 'username harus 5 karakter',
                'username.unique' => 'username sudah digunakan',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'password minimal 5 karakter',
            )
        );

        //Kondisi validasi (Pesan Error yang akan terjadi)
        if ($validator->fails()) {

            $eror = $validator->messages()->all();

            $response = fractal()
                ->item($eror)
                ->transformWith(new ErrorValidasiTransformer)
                ->toArray();

            return response()->json($response, 401);

        } else {

            $username = $request->username;

            //=====================================================================
            $hash = $this->getHash($request->password);
            $encrypted_password = $hash['encrypted'];
            $salt = $hash['salt'];
            //=====================================================================

            // $admin = new Admin();
            // $admin->username=$username;
            // $admin->salt=$salt;

            // $admin->password=$encrypted_password;

            // $admin->token=bcrypt($encrypted_password);
            // $admin->save();

            // $response = fractal()
            //     ->item($admin)
            //     ->transformWith(new AdminTransformer)
            //     ->toArray();

            // return response()->json($response, 200);

            $register = Register::create([
                'username' => $request->username,
                'password' => $request->password,
                'nik' => $request->nik,
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
            ]);
        }

    }

    //Berfungsi untuk mengembalikan yang sudah di enkripsi
    public function verifyHash($password, $hash)
    {
        return password_verify($password, $hash);
    }

    //Berfungsi Ambil Enkripsi Password
    public function getHash($password)
    {
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = password_hash($password . $salt, PASSWORD_DEFAULT);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);

        return $hash;
    }

}
