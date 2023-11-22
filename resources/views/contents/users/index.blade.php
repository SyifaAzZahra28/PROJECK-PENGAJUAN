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
                                                            <h4 class="sub-title text-center">Tambah Pengguna</h4>
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control form-control-round text-center" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Username</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control form-control-round text-center" placeholder="Username">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Level</label>
                                                                    <div class="col-sm-10">
                                                                    <select class="form-select form-control form-control-round text-center">
                                                                        <option selected disabled>Role</option>
                                                                        <option value="1">User</option>
                                                                        <option value="2">Admin</option>
                                                                        <option value="3">Super admin</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" class="form-control form-control-round text-center"
                                                                        placeholder="Password">
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <!-- kalo udah dikasi back-end, masukin div dibawah ini kedalam form -->
                                                            <div class="form-group row">
                                                                <div class="col-sm-10">
                                                                    <a href="/pengajuan"><button class="btn btn-primary btn-outline-primary btn-round">Kirim</button></a>
                                                                </div>
                                                            </div>
                                                                        <!-- Page body end -->
    </div>
</div>
@endsection