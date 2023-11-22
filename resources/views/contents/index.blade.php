@extends('layouts.main')
@section('content')

<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <a href="/pengajuan"><i class="icofont icofont-list bg-c-blue card1-icon"></i></a>
                                                        <span class="text-c-blue f-w-600">Dalam antrian</span>
                                                        <h4>49/50GB</h4>
                                                        <div>
                                                            <!-- <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get more space
                                                            </span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <a href="/pengajuan/disetujui"><i class="icofont icofont-check bg-c-pink card1-icon"></i></a>
                                                        <span class="text-c-pink f-w-600">File disetujui</span>
                                                        <h4>$23,589</h4>
                                                        <div>
                                                            <!-- <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                                                            </span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <a href="/pengajuan/ditolak"><i class="icofont icofont-warning-alt bg-c-green card1-icon"></i></a>
                                                        <span class="text-c-green f-w-600">File ditolak</span>
                                                        <h4>45</h4>
                                                        <div>
                                                            <!-- <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked via microsoft
                                                            </span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <a href="/tambahPengguna"><i class="icofont icofont-plus bg-c-yellow card1-icon"></i></a>
                                                        <span class="text-c-green f-w-600">Kelola pengguna</span>
                                                        <h4>45</h4>
                                                        <div>
                                                            <!-- <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked via microsoft
                                                            </span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endsection