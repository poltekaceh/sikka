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
                    <a href="#">Edit Data Pelatihan</a>
                    <i class="fa fa-circle"></i>
                </li>

            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">Pelatihan
            <small>Input Data Pelatihan</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->

        @if(Session::has('SUCCESS')) {{Session::get('SUCCESS')}} @endif

        <div class="note note-info">
            <p> Berikut adalah halaman untuk menginput data pelatihan </p>
        </div>

        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>FORM PELATIHAN </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form method="post" action="{{ route('dinas.pelatihan.update', $pelatihan['id_pelatihan']) }}" class="horizontal-form">
                    @method('patch')
                    @csrf
                    <div class="form-body">
                        <h3 class="form-section">Person Info</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nama Pelatihan</label>
                                    <input type="text" name="nama_pelatihan" class="form-control" value="{{ $pelatihan['nama_pelatihan'] }}">
                                    <!-- <span class="help-block"> This is inline help </span> -->
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control" value="{{ $pelatihan['lokasi'] }}">
                                    <!-- <span class="help-block"> This field has error. </span> -->
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Jenis Pelatihan</label>
                                    <input type="text" name="jenis_pelatihan" class="form-control" value="{{ $pelatihan['jenis_pelatihan'] }}">
                                    <!-- <span class="help-block"> This field has error. </span> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Biaya</label>
                                    <input type="text" name="biaya" class="form-control" value="{{ $pelatihan['biaya'] }}">
                                    <!-- <span class="help-block"> This field has error. </span> -->
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nama Penyelenggara</label>
                                    <input type="text" name="nama_penyelenggara" class="form-control" value="{{ $pelatihan['nama_penyelenggara'] }}">
                                    <!-- <span class="help-block"> This field has error. </span> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Durasi</label>
                                    <input type="text" name="durasi" class="form-control" value="{{ $pelatihan['durasi'] }}">
                                    <!-- <span class="help-block"> This field has error. </span> -->
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Jumlah Formasi</label>
                                    <input type="text" name="jumlah_formasi" class="form-control" value="{{ $pelatihan['jumlah_formasi'] }}">
                                    <!-- <span class="help-block"> This field has error. </span> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" value="{{ $pelatihan['tanggal'] }}">
                                    <!-- <span class="help-block"> This field has error. </span> -->
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->

                    </div>
                    <div class="form-actions right">
                        <button type="button" class="btn default">Cancel</button>
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> Save</button>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>

    </div>

</div>
<!-- END CONTENT BODY -->

</div>
<!-- END CONTENT -->


@endsection