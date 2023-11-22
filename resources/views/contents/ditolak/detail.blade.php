@extends('layouts.main')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <a href="/pengajuan/ditolak"><button class="btn btn-primary btn-outline-primary    btn-round mb-4">Kembali</button></a>
        <div class="card-deck">
            <div class="card">
                <img src=" {{ asset('img') }}/gambar1.jpg" class="card-img-top" alt="..." style="height: 350px; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Revisian:</h5>
                    <p class="card-text"> ini misalnya isi revisian, Lorem ipsum, dolor sit amet consectetur adipisicing elit. At quis ea, quisquam corporis, repellat unde repellendus distinctio vel hic aliquid perspiciatis odio ab laboriosam aliquam, laudantium quae doloribus numquam facere inventore alias. Alias eveniet consectetur quam, sapiente corrupti consequatur molestias maxime assumenda aspernatur quidem expedita cupiditate officiis! Ducimus, tenetur deserunt?</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection