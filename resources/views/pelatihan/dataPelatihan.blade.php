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
                            <a href="{{url('admin/index')}}">Home</a>
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
                                <i class="fa fa-cogs"></i>DAFTAR PELATIHAN</div>
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
                                        <!-- <th class="table-checkbox">
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
                                    <tr class="odd gradeX">
                                        <!-- <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td> -->
                                        <td> 1 </td>
                                        <td> Belajar Maintenence</td>
                                        <td> IT Support </td>
                                        <td> PT.GUW </td>
                                        <td> 7 </td>
                                        <td> Banda Aceh </td>
                                        <td> 7.0000.000 </td>
                                        <td> 7 menit </td>
                                        <td> 07-07-2018 </td>
                                        <td> 
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                <i class="fa fa-search"></i> Edit</button>
                                                
                                                <button class="btn btn-sm red btn-outline filter-submit margin-bottom">
                                                <i class="fa fa-edit"></i> Delete</button>

                                            </div>
                                            </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="odd gradeX">
                                       <!--  <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td> -->
                                        <td> 2 </td>
                                        <td> Belajar Jaringan </td>
                                        <td> Network Enginering </td>
                                        <td> PT.GUW </td>
                                        <td> 7 </td>
                                        <td> Banda Aceh </td>
                                        <td> 7.0000.000 </td>
                                        <td> 7 menit </td>
                                        <td> 07-07-2018 </td>
                                        <td> 
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                <i class="fa fa-search"></i> Edit</button>
                                                
                                                <button class="btn btn-sm red btn-outline filter-submit margin-bottom">
                                                <i class="fa fa-edit"></i> Delete</button>

                                            </div>
                                            </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="odd gradeX">
                                       <!--  <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td> -->
                                        <td> 3 </td>
                                        <td> Belajar Program </td>
                                        <td> Programmer </td>
                                        <td> PT.GUW </td>
                                        <td> 7 </td>
                                        <td> Banda Aceh </td>
                                        <td> 7.0000.000 </td>
                                        <td> 7 menit </td>
                                        <td> 07-07-2018 </td>
                                        <td> 
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                <i class="fa fa-search"></i> Edit</button>
                                                
                                                <button class="btn btn-sm red btn-outline filter-submit margin-bottom">
                                                <i class="fa fa-edit"></i> Delete</button>

                                            </div>
                                            </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="odd gradeX">
                                       <!--  <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td> -->
                                        <td> 4 </td>
                                        <td> Belajar Marketing </td>
                                        <td> Marketing </td>
                                        <td> PT.GUW </td>
                                        <td> 7 </td>
                                        <td> Banda Aceh </td>
                                        <td> 7.0000.000 </td>
                                        <td> 7 menit </td>
                                        <td> 07-07-2018 </td>
                                        <td> 
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                <i class="fa fa-search"></i> Edit</button>
                                                
                                                <button class="btn btn-sm red btn-outline filter-submit margin-bottom">
                                                <i class="fa fa-edit"></i> Delete</button>

                                            </div>
                                            </div>

                                            </div>
                                        </td>
                                    </tr>
                                   
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
     