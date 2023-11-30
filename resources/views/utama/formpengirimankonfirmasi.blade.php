@extends('utama.partials.main')
@section('content')
<section class="py-4 py-xl-5">
    <div class="col-lg-11">
        <h1 class="grotitle"> Form Pengiriman</h1>
    </div>
    <div class="col-lg-12 mt-5 d-flex justify-content-center">
        <h4 class="p-3 ps-5 pe-5 rounded" style="background-color: #66D654">Silahkan isi form untuk melanjutkan checkout</h4>
    </div>
</section>
<section class="breadcrumb">
    <div class="col-lg-8 p-5 mx-auto">
        <div class="card mb-5" style="background-color: rgb(255,255,255,0.7)">
            <div class="card-body">
                <div class="col-lg-11">
                    <p> Isi form dibawah ini untuk pengiriman produk anda</p>
                </div>
                <div class="col-lg-12">Nama</div>
                <div class="mb-3">Reynaldi Arya</div>
                <div class="col-lg-12">No Telpon</div>
                <div class="mb-3">123456789101</div>
                <div class="col-lg-12">Email</div>
                <div class="mb-3">reynaldiarya123@gmail.com</div>
                <div class="col-lg-12">Alamat Pengiriman</div>
                <div class="mb-3">Jl. Jojoran No.18 RT/RW 002/007, Surabaya, Jawa Timur</div>
                <div class="d-flex justify-content-center">
                    <div class="col-2 mx-2"><a class="btn btn-gro text-center d-block w-100" href="pengiriman">Lanjut </a></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection