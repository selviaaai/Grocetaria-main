@extends('utama.partials.main')
@section('content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <div class="row">
        <div class="col-lg-6 text-center"><img src="/assets/img/wortel.png" width="100%"></div>
        <div class="col-lg-6 my-auto">
            <h1>Wortel 500g</h1>
            <h3>Rp 7000</h3>
            <p>Wortel sayur segar grocetaria<br></p>
            <div class="d-flex flex-row">
                <button class="btn border rounded px-3"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm" style="width: 50px;" />

                <button class="btn  border rounded px-3"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
                <a class="btn mx-5" style="background-color: #4C8228; color: #fff" href="keranjang-belanja">
                    Tambahkan ke Keranjang
                </a>
            </div>
        </div>
    </div>
</div>
@endsection