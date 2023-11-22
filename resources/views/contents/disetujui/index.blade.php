@extends('layouts.main')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="card">
            <div class="card-header">
                <h2>File Disetujui</h2>
                <!-- <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div> -->
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Judul pengajuan</th>
                                <th class="text-center">Jenis pengajuan</th>
                                <th class="text-center">Tanggal pengajuan</th>
                                <th class="text-center">File pengajuan</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Tanggal disetujui</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><a href=""><button class="btn btn-warning btn-outline-warning"><i class="icofont icofont-download"></i></button></a> <a href=""><button class="btn btn-danger btn-outline-danger"><i class="icofont icofont-trash"></i></button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>

@endsection