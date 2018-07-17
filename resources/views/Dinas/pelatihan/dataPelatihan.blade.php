@extends('Dinas.homeDinas') @section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="{{url('/dinas')}}">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Daftar Pelatihan</a>
                    <i class="fa fa-circle"></i>
                </li>

            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">Pelatihan
            <small>Daftar Pelatihan</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->

        @if(Session::has('SUCCESS')) {{Session::get('SUCCESS')}} @endif

        <div class="note note-info">
            <p> Berikut adalah tabel dari data pelatihan </p>
        </div>

        <!-- TABEL -->
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>DAFTAR PELATIHAN</div>
                <div class="actions">
                    <a href="{{ route('dinas.pelatihan.create') }}" class="btn btn-default btn-sm">
                        <i class="fa fa-plus"></i> Add </a>
                    <a href="javascript:;" class="btn btn-default btn-sm">
                        <i class="fa fa-print"></i> Print </a>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                    <thead>
                        <tr>
                            <th class="table-checkbox">
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th style="text-align: center;"> No </th>
                            <th style="text-align: center;"> Nama Pelatihan </th>
                            <th style="text-align: center;"> Jenis Pelatihan </th>
                            <th style="text-align: center;"> Nama Penyelenggara </th>
                            <th style="text-align: center;"> Jumlah Formasi </th>
                            <th style="text-align: center;"> Lokasi </th>
                            <th style="text-align: center;"> Biaya </th>
                            <th style="text-align: center;"> Durasi </th>
                            <th style="text-align: center;"> Tanggal </th>
                            <th style="text-align: center;"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($pelatihans as $pelatihan)
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            @if(count($pelatihans)>0)
                            <td> {{ $i }} </td>
                            @else
                            <td></td>
                            @endif
                            <td> {{ $pelatihan['nama_pelatihan'] }} </td>
                            <td> {{ $pelatihan['jenis_pelatihan'] }} </td>
                            <td> {{ $pelatihan['nama_penyelenggara'] }} </td>
                            <td> {{ $pelatihan['jumlah_formasi'] }} </td>
                            <td> {{ $pelatihan['lokasi'] }} </td>
                            <td> {{ $pelatihan['biaya'] }} </td>
                            <td> {{ $pelatihan['durasi'] }} </td>
                            <td> {{ $pelatihan['tanggal'] }} </td>
                            <td>
                                <div class="margin-bottom-5">
                                    <a href="{{ route('dinas.pelatihan.edit',$pelatihan['id_pelatihan']) }}" class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                        <i class="fa fa-search"></i> Edit</a>
                                    <form action="{{ route("dinas.pelatihan.destroy",$pelatihan["id_pelatihan"]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm red btn-outline filter-submit margin-bottom">
                                            <i class="fa fa-edit"></i> Delete</button>
                                    </form>

                                </div>
            </div>

        </div>
        </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
        </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
<!-- ENDTABEL -->

</div>

</div>
<!-- END CONTENT BODY -->

</div>
<!-- END CONTENT -->


@endsection