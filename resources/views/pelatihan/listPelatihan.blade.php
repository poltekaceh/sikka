@extends('home')

@section('content')

    <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">List Pelatihan</a>
                            <i class="fa fa-circle"></i>
                        </li>
                       
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title">Pelatihan
                    <small>List Pelatihan</small>
                </h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->

                @if(Session::has('SUCCESS'))
                        {{Session::get('SUCCESS')}}
                @endif
                
                <div class="note note-info">
                    <p> Berikut adalah tabel dari Daftar Pelatihan </p>
                </div>

        <!-- TABEL -->
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box green-jungle">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>LIST PELATIHAN</div>
                            <div class="actions">
<!--                                 <a href="javascript:;" class="btn btn-default btn-sm">
                                    <i class="fa fa-plus"></i> Add </a>
 -->                                <a href="javascript:;" class="btn btn-default btn-sm">
                                    <i class="fa fa-print"></i> Print </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                                <thead>
                                    <tr>
                                      <!--   <th class="table-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th> -->
                                        <th style="text-align: center;"> NO. </th>
                                        <th style="text-align: center;"> NAMA PELATIHAN </th>
                                        <th style="text-align: center;"> JENIS PELATIHAN </th>
                                        <th style="text-align: center;"> NAMA PENYELENGGARA </th>
                                        <th style="text-align: center;"> JUMLAH FORMASI </th>
                                        <th style="text-align: center;"> LOKASI </th>
                                        <th style="text-align: center;"> BIAYA </th>
                                        <th style="text-align: center;"> DURASI </th>
                                        <th style="text-align: center;"> TANGGAL </th>
                                        <th style="text-align: center;"> AKSI </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach($pelatihans as $pelatihan)
                                    <form action="{{ route('pelatihan.store') }}" method="post">
                                            @csrf
                                    <tr class="odd gradeX">
                                       <!--  <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td> -->
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
                                        <input type="hidden" name="id_pelatihan" class="form-control" value="{{ $pelatihan['id_pelatihan'] }}">
                                        <input type="hidden" name="nomor" class="form-control" value="PEL-{{ $i }}">
                                        <input type="hidden" name="nama_pelatihan" class="form-control" value="{{ $pelatihan['nama_pelatihan'] }}">
                                        <input type="hidden" name="nama_penyelenggara" class="form-control" value="{{ $pelatihan['nama_penyelenggara'] }}">
                                        <input type="hidden" name="status" class="form-control" value="0">
                                        <td align="center">                                            
                                            <div class="margin-bottom-5">
                                                @foreach($daftarpelatihans as $daftarpelatihan)
                                                @if($daftarpelatihans['id_pelatihan'] == $pelatihan['id_pelatihan'])
                                                <button type="button" class="btn btn-md green-jungle  filter-submit margin-bottom" disabled>
                                                     TERDAFTAR  
                                                </button>
                                                @elseif($daftarpelatihan['id_pelatihan'] == null)
                                                <button class="btn btn-md green  filter-submit margin-bottom" disabled>
                                                        DAFTAR <i class="fa fa-plus"></i>
                                                   </button>
                                                @endif
                                                @endforeach
                                            </div>
                                            </div>

                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                    $i++;
                                    @endphp
                                </form>
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
     