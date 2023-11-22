@extends('layouts.main')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
    <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Tambah Pengajuan</h4>
                                                            <div>
                                                                <a href="/pengajuan"><button class="btn btn-primary btn-outline-primary btn-round">Batal</button></a>
                                                            </div>
                                                            <br>
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Username</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control form-control-round text-center" placeholder="Username">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Judul pengajuan</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control form-control-round text-center" placeholder="Judul pengajuan">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Jenis pengajuan</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-select form-control form-control-round text-center">
                                                                            <option selected>Jenis pengaduan</option>
                                                                            <option value="1">Sarana prasarana</option>
                                                                            <option value="2">Kegiatan</option>
                                                                            <option value="3">Program lainnya</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date" class="form-control form-control-round text-center" placeholder="Tanggal Pengajuan">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">File pengajuan</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" class="form-control form-control-round">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Status Pengajuan</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control form-control-round text-center" placeholder="status Pengajuan">
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <!-- kalo udah dikasi back-end, masukin div dibawah ini kedalam form -->
                                                            <div class="form-group row">
                                                                <div class="col-sm-10">
                                                                    <a href="/pengajuan"><button class="btn btn-primary btn-outline-primary btn-round">Simpan</button></a>
                                                                </div>
                                                            </div>
                                                                        <!-- Page body end -->
    </div>
</div>
@endsection