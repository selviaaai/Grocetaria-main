@extends('utama.partials.main')
@section('content')
    <section class="py-4 py-xl-5 breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h1>Kontak <span style="color: #60D05E">Kami</span></h1>
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
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-7"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.7130616822061!2d112.79959758634205!3d-7.27442771882886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb2dfb565207%3A0x85f00854e63a4596!2sSAYURLELI!5e0!3m2!1sid!2sid!4v1668655412116!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="col-md-5">
                <section class="position-relative py-4 py-xl-5">
                    <div class="container position-relative">
                        <div class="row mb-5">
                            <div class="col-md-8 col-lg-12 mx-auto">
                                <h2>Alamat <span style="color: #60D05E">Grocetaria</span></h2>
                                <p class="w-lg-50">Alamat: Jalan Kejawanan Putih 4, Surabaya</p>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-8 col-lg-12 mx-auto">
                                <p class="w-lg-50">Instagram&nbsp;&nbsp;&nbsp; @grocetariashop</p>
                                <p class="w-lg-50">Whatsapp&nbsp;&nbsp;&nbsp;  082243227694</p>
                                <p class="w-lg-50">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; grocetaria98@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="card mb-5">
                        <div class="card-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-4 mb-3"><input class="form-control" type="text" id="name-2" name="name" placeholder="Nama"></div>
                                    <div class="col-lg-4 mb-3"><input class="form-control" type="email" id="email-2" name="email" placeholder="Email"></div>
                                    <div class="col-lg-4 mb-3"><input class="form-control" type="telp" id="telp-2" name="telp" placeholder="Telpon"></div>
                                </div>
                                <div class="mb-3"><textarea class="form-control" id="message-2" name="message" rows="6" placeholder="Pesan"></textarea></div>
                                <div class="col-4 m-auto"><button class="btn btn-gro text-center d-block w-100" type="submit">Kirim Email </button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection