@extends('utama.partials.main')
@section('content')
<section class="py-4 py-xl-5">
    <div class="col-lg-12">
        <h1 class="grotitle"> Pilih Metode Pembayaran</h1>
    </div>
    <div class="col-lg-12">
        <a class="grotitle" href="pembayaran" style="color: #60D05E; text-decoration: none;"> Transfer</a>
        <a class="grotitle mx-4" href="pembayaran-cod" style="color: #000000; text-decoration: none;"> Cash On Delivery</a>

    </div>
</section>
<section class="pb-4 mx-auto col-lg-10 col-10 pb-5">
    <div class="h-100">
        <div class="border rounded border p-4 py-5">
            <div class="row h-100">
                <div class="col-md-12 col-xl-12">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="form-check my-auto">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              ATM
                            </label>
                          </div>
                          <div>
                            <img src="/assets/img/BNI.png" style="width: 100px">
                            <img src="/assets/img/Mandiri.png" style="width: 100px">
                            <img src="/assets/img/Danamon.png" style="width: 100px">
                            <img src="/assets/img/Permata.png" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border rounded border p-4 py-5 my-3">
            <div class="row h-100">
                <div class="col-md-12 col-xl-12">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="form-check my-auto">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault2">
                              E-Wallet
                            </label>
                        </div>
                        <div>
                            <img src="/assets/img/GoPay.png" style="width: 100px">
                            <img src="/assets/img/ShopeePay.png" style="width: 100px">
                            <img src="/assets/img/LinkAja.png" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row-reverse">
            <a href="/upload-bukti-pembayaran" class="btn btn-gro btn-block btn-lg">
                Berikutnya
            </a>
        </div>
    </div>
</section>

@endsection