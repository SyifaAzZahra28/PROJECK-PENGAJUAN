@extends('layouts.main')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <a href="/user/rejected"><button class="btn btn-primary btn-outline-primary    btn-round mb-4">Kembali</button></a>
        <div class="card-deck">
            <div class="card">
                <img src=" {{ asset('img') }}/gambar1.jpg" class="card-img-top" alt="..." style="height: 350px; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Revisian:</h5>
                    <p class="card-text">
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection