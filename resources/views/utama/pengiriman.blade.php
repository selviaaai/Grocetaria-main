@extends('utama.partials.main')
@section('content')
<section class="py-4 py-xl-5">
    <div class="col-lg-12">
        <h1 class="grotitle"> Pilih Metode Pengiriman</h1>
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
                              Grab
                            </label>
                          </div>
                          <img src="/assets/img/grab.png" style="width: 100px">
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
                              Gojek
                            </label>
                        </div>
                        <img src="/assets/img/gojek.png" style="width: 100px">
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
                              JNE
                            </label>
                        </div>
                        <img src="/assets/img/jne.png" style="width: 100px">
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
                              J&T
                            </label>
                        </div>
                        <img src="/assets/img/jnt.png" style="width: 100px">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <a href="/pembayaran" class="btn btn-gro btn-block btn-lg">
                Berikutnya
            </a>
        </div>
    </div>
</section>

@endsection