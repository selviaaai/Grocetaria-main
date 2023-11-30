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
            <form action="" method="POST" enctype="multipart/form-data" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="d-flex flex-row justify-content-between">
                                    <h5>Total Pembayaran: Rp. 38.500</h5>
                                    <h5 class="text-danger">Waktu tersisa 59.55</h5>
                                </div>
                                <hr>
                                <div class="d-flex flex-row">
                                    <img src="/assets/img/Mandiri.png" style="width: 100px">
                                    <h5>Virtual Account : 7789 001 1234 1234 3</h5>
                                </div>
                                <hr>
                                <label class="h5">Unggah Bukti Pembayaran</label>
                                <div class="dropzone-wrapper">
                                    <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>Choose an image file or drag it here.</p>
                                    </div>
                                <input type="file" name="img_logo" class="dropzone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button onclick="javascript:setTimeout(function () {window.location.href='/pelacakan';}, 3000)" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-gro my-3">Lanjut</button>
                    </div>
                </div>
               </form>
        </div>
    </div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body text-center">
        <img style="height: 150px" src="/assets/img/icon-success.png">
        <h2>Selamat Pembayaran Anda Berhasil</h2>
        <p>Anda akan diarahkan ke halaman status pengiriman </p>
      </div>
    </div>

  </div>
</div>
</section>
@endsection