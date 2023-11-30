@extends('utama.partials.main')
@section('content')
<section class="py-4 py-xl-5">
    <div class="col-lg-11">
        <h1 class="grotitle"> Konfirmasi Pesanan</h1>
    </div>
</section>
<div class="container" style="margin-bottom: 150px">
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Produk</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle">
                        <div class="d-flex flex-row">
                        <img src="/assets/img/wortel.png" class="rounded-3"
                            style="width: 120px;" alt="Book">
                        <p class="my-auto" style="font-weight: 500;">Wortel 500g</p>
                        </div>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">Rp 7.500</p>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">1</p>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">Rp 7.500</p>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="border my-5"></div>
              <div class="mb-5">
                <h5>Validasi Pesanan</h5>
              </div>
              <div class="card shadow-2-strong mb-5 mb-lg-0">
                <div class="p-4">
                    <div class="mb-5">
                        <h6>Tanggal pemesanan: 08-11-2022</h6>
                      </div>
                    <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Produk</th>
                              <th scope="col">Ketersediaan</th>
                              <th scope="col">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="align-middle">
                                <div class="d-flex flex-row">
                                <img src="/assets/img/wortel.png" class="rounded-3"
                                    style="width: 120px;" alt="Book">
                                <p class="my-auto" style="font-weight: 500;">Wortel 500g</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <p class="mb-0" style="font-weight: 500;">Menunggu</p>
                              </td>
                              <td class="align-middle">
                                <p class="mb-0" style="font-weight: 500;">Menunggu Konfirmasi <i class="fa-regular fa-clock"></i></p>
                              </td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                      <div class="mt-3 text-end">
                        <h6>Total: Rp 15.000</h6>
                      </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
</div>
@endsection