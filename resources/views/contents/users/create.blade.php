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
                                                            <h4 class="sub-title">Tambah Pengguna</h4>
                                                            <div>
                                                                <a href="/admin/user"><button class="btn btn-primary btn-outline-primary btn-round">Batal</button></a>
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
                                                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-select form-control form-control-round text-center">
                                                                            <option selected disabled>Jenis Kelamin</option>
                                                                            <option value="1">Laki-laki</option>
                                                                            <option value="2">Perempuan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Jabatan</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control form-control-round text-center" placeholder="Jabatan">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" class="form-control form-control-round text-center" placeholder="password">
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <!-- kalo udah dikasi back-end, masukin div dibawah ini kedalam form -->
                                                            <div class="form-group row">
                                                                <div class="col-sm-10">
                                                                    <a href="/admin/user"><button class="btn btn-primary btn-outline-primary btn-round">Simpan</button></a>
                                                                </div>
                                                            </div>
                                                                        <!-- Page body end -->
    </div>
</div>
@endsection