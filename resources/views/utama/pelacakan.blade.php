@extends('utama.partials.main')
@section('content')
<section class="py-4 py-xl-5">
    <div class="col-lg-11">
        <h1 class="grotitle"> Pelacakan</h1>
    </div>
</section>
<div class="container" style="margin-bottom: 150px">
    <div class="col-8 col-lg-4 m-auto">
        <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="Kode Pengiriman" aria-label="Username" aria-describedby="basic-addon1">
            <a href="/status-pengiriman" class="input-group-text bg-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
        </div>
    </div>
</div>
@endsection