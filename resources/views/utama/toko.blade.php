@extends('utama.partials.main')
@section('style')
<style>
  .filterDiv {
    display: none;
  }

  .show {
    display: block;
  }
  </style>
@endsection
@section('content')
    <section class="py-4 py-xl-5 breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h1><span style="color: #60D05E">Grocetaria</span> Shop</h1>
            </div>
        </div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 col-xl-8 text-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div></div>
                </div>
            </div>
        </div>
    </section>
    <div class="col-11 col-lg-8 m-auto">
        <div class="input-group my-5">
            <span class="input-group-text bg-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-lg-3">
                <div class="mb-3">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="border rounded p-2 kategori">Kategori</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" id="sayur" onclick="filterSelection('sayur')">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Sayuran
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" id="buah" onclick="filterSelection('buah')">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Buah-buahan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" id="bumbu" onclick="filterSelection('bumbu')">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Bumbu Masak
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="border rounded p-2">Urutkan Harga</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                  Min - Max
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                <label class="form-check-label" for="flexRadioDefault5">
                                  Max - Min
                                </label>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($produks as $produk)
                        <div class="col-md-3 my-2">
                            <div class="card-body">
                                <div class="card"><img class="card-img-top w-100 d-block"
                                        style="height: 200px; width: 200px; padding: 25px" src="{{ asset("storage/$produk->image") }}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $produk->nama_produk }}</h4>
                                        <p class="card-text">Rp{{ $produk->hargas->nominal_harga }}</p>
                                        @if (Auth::user())
                                            <button class="btn" type="button">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @section('script')
    <script>
        filterSelection("all")
        function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
        }

        function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
        }

        function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
        }

        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }
    </script>
    @endsection
@endsection
