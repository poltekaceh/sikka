@extends('Dinas.homeDinas')

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
                            <a href="{{url('/dinas')}}">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">Pendaftar Pelatihan</a>
                            <i class="fa fa-circle"></i>
                        </li>
                       
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title">Pelatihan
                    <small>Pendaftar Pelatihan</small>
                </h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->

                @if(Session::has('SUCCESS'))
                        {{Session::get('SUCCESS')}}
                @endif
                
                <div class="note note-info">
                    <p> Berikut adalah tabel dari data pelatihan </p>
                </div>

        <!-- TABEL -->
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>PENDAFTAR PELATIHAN</div>
                            <div class="actions">
                                <a href="javascript:;" class="btn btn-default btn-sm">
                                    <i class="fa fa-plus"></i> Add </a>
                                <a href="javascript:;" class="btn btn-default btn-sm">
                                    <i class="fa fa-print"></i> Print </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                                <thead>
                                    <tr>
<!--                                         <th class="table-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th> -->
                                        <th style="text-align: center;"> NO. </th>
                                        <th style="text-align: center;"> NOMOR PENDAFTARAN </th>
                                        <th style="text-align: center;"> NAMA LENGKAP </th>
                                        <th style="text-align: center;"> NAMA PELATIHAN </th>
                                        <th style="text-align: center;"> NAMA PENYELENGGARA </th>
                                        <th style="text-align: center;"> STATUS DAFTAR </th>
                                        <th style="text-align: center;"> STATUS SELESAI </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach($pendaftars as $pendaftar)
                                    <tr class="odd gradeX">
                                       <!--  <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td> -->
                                        @if(count($pendaftars)>0)
                                         <td> {{ $i }} </td>
                                         @else
                                         <td></td>
                                         @endif
                                         <td> {{ $pendaftar['nomor'] }} </td>
                                        <td> {{ $pendaftar['username'] }}</td>
                                        <td> {{ $pendaftar['nama_pelatihan'] }} </td>
                                        <td> {{ $pendaftar['nama_penyelenggara'] }} </td>
                                        <td align="center"> 
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-md green-jungle  filter-submit margin-bottom">
                                                     TERDAFTAR <i class="fa fa-check"></i>
                                                </button>

                                            </div>
                                            </div>

                                            </div>
                                        </td>
                                        <td align="center"> 
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-md red  filter-submit margin-bottom">
                                                     BELUM &nbsp;&nbsp;<i class="fa fa-close"></i>
                                                </button>

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
     