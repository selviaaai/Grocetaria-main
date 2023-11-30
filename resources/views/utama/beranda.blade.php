@extends('utama.partials.main')
@section('content')
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 720px;">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
                    src="/assets/img/beranda.png" alt="Slide Image" style="z-index: -1;">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 42px">Welcome To</h1>
                            <h1 class="text-uppercase text-white fw-bold"
                                style="font-size: 48px; font-family: Georgia, serif;">Grocetaria</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
                    src="/assets/img/beranda-2.png" alt="Slide Image" style="z-index: -1;">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 42px">Welcome To</h1>
                            <h1 class="text-uppercase text-white fw-bold"
                                style="font-size: 48px; font-family: Georgia, serif;">Grocetaria</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
                    src="/assets/img/beranda-3.png" alt="Slide Image" style="z-index: -1;">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <h1 class="text-uppercase text-white fw-bold" style="font-size: 42px">Welcome To</h1>
                            <h1 class="text-uppercase text-white fw-bold"
                                style="font-size: 48px; font-family: Georgia, serif;">Grocetaria</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span
                    class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1"
                role="button" data-bs-slide="next"><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div>

    <div class="container py-4 py-xl-5">
        <div class="row mt-5 mb-3">
            <div class="col">
                <h2>Produk <span style="color: #60D05E">Terpopuler</span></h2>
            </div>
        </div>
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
    {{-- <div class="container py-4 py-xl-5">
        <div class="row mt-5 mb-3">
            <div class="col">
                <h2>Produk <span style="color: #60D05E">Terlaris</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block"
                            style="height: 200px; width: 200px; padding: 25px" src="/assets/img/sayur-kol.png">
                        <div class="card-body">
                            <h4 class="card-title">Sayur Kol 500g</h4>
                            <p class="card-text">Rp 7.000,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block"
                            style="height: 200px; width: 200px; padding: 25px" src="/assets/img/tomat.png">
                        <div class="card-body">
                            <h4 class="card-title">Tomat 250g</h4>
                            <p class="card-text">Rp 8.500,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block"
                            style="height: 200px; width: 200px; padding: 25px" src="/assets/img/wortel.png">
                        <div class="card-body">
                            <h4 class="card-title">Wortel 500g</h4>
                            <p class="card-text">Rp 7.500,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card-body">
                    <div class="card"><img class="card-img-top w-100 d-block"
                            style="height: 200px; width: 200px; padding: 25px" src="/assets/img/kentang.png">
                        <div class="card-body">
                            <h4 class="card-title">Kentang 1000g</h4>
                            <p class="card-text">Rp 9.000,-</p>
                            <p class="card-text">Terjual 250+</p><button class="btn" type="button"><i
                                    class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Modal Login-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masuk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/login" method="post">
                        @csrf
                        <div class="col-auto">
                            <input type="text" name="email" class="form-control mb-2" id="email"
                                placeholder="Email">
                        </div>
                        <div class="col-auto">
                            <input type="password" name="password" class="form-control mb-2" id="password"
                                placeholder="Password">
                        </div>
                        <div class="col-auto d-flex mt-4">
                            <button type="submit" class="btn btn-success" style="width: 100%">Masuk</button>
                        </div>
                        <p class="mt-4" style="font-size: 13px; text-align: center;">Belum punya akun? <a
                                href="/regis" class="text-success" style="font-size: 13px; font-weight: 600;">Daftar
                                >></a></p>
                    </form>
                </div>
                {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info">Save changes</button>
        </div> --}}
            </div>
        </div>
    </div>

    <!-- Modal Daftar-->
    <div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/regis" method="post">
                        @csrf
                        <div class="col-auto">
                            <input type="text" name="notelp" class="form-control mb-2" id="notelp"
                                placeholder="No. Telepon">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="email" class="form-control mb-2" id="email"
                                placeholder="Email">
                        </div>
                        <div class="col-auto">
                            <input type="password" name="password" class="form-control mb-2" id="password"
                                placeholder="Password">
                        </div>
                        <div class="col-auto">
                            <input type="password" name="password_confirmation" class="form-control mb-2" id="password2"
                                placeholder="Konfirmasi Password">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-success" style="width: 100%;">Daftar</button>
                        </div>
                        <p class="mt-4 text-dark" style="font-size: 13px; text-align: center;">Sudah mempunyai akun? <a
                                href="/login" class="text-success" style="font-size: 13px; font-weight: 600;">Masuk
                                >></a></p>
                    </form>
                </div>
                {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
            </div>
        </div>
    </div>

    <script>
        let msg = '{{Session::get('alert')}}';

        let exist = '{{Session::has('alert')}}';

        if(exist){
            alert(msg);
        }
    </script>
@endsection
