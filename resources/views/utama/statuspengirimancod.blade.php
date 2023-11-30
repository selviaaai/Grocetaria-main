@extends('utama.partials.main')
@section('content')
<section class="py-4 py-xl-5">
    <div class="col-lg-11">
        <h1 class="grotitle"> Status Pengiriman</h1>
    </div>
</section>
<div class="container">
    <section class="pb-4 pb-5">
        <div class="h-100">
            <div class="border rounded border p-4 py-5">
                <div class="row h-100">
                    <div class="col-md-10 col-xl-8">
                        <div class="ms-1">
                            <h2 class="mb-2">Estimasi Diterima<br></h2>
                            <p class="mb-2">Kamis, 09 November 2022<br></p>
                            <p class="mb-2">Dikirim dengan Grab<br></p>
                            <p class="mb-2">Perlu Membayar Ke Kurir : Rp38.500<br></p>
                            <p class="mb-2 text-grocetaria">PSN0012389</p>
                            <div class="bg-danger text-white col-3 text-center border">Belum Bayar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="d-flex justify-content-start">
		<div class="timeline-centered">

            <article class="timeline-entry">
                <div class="timeline-entry-inner">
                    <time class="timeline-time"><span>09 Nov 2022</span> <span>09.20</span></time>
                    <div class="timeline-icon">
                        <i class="entypo-feather"></i>
                    </div>
                    <div class="timeline-label">
                        <p>Paket dalam proses pengiriman menuju alamatmu</p>
                    </div>
                </div>
            </article>

            <article class="timeline-entry">
                <div class="timeline-entry-inner">
                    <time class="timeline-time"><span>09 Nov 2022</span> <span>09.15</span></time>
                    <div class="timeline-icon">
                        <i class="entypo-feather"></i>
                    </div>
                    <div class="timeline-label">
                        <p>Paket telah diserahkan kepada kurir</p>
                    </div>
                </div>
            </article>

            <article class="timeline-entry">
                <div class="timeline-entry-inner">
                    <time class="timeline-time"><span>09 Nov 2022</span> <span>08.45</span></time>
                    <div class="timeline-icon">
                        <i class="entypo-feather"></i>
                    </div>
                    <div class="timeline-label">
                        <p>Pengirim telah mengatur pengiriman. Menunggu diserahkan ke pihak jasa kirim</p>
                    </div>
                </div>
            </article>

            <article class="timeline-entry begin">
                <div class="timeline-entry-inner">
                    <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                        <i class="entypo-flight"></i>
                    </div>
                </div>
            </article>

        </div>
        </div>
	</div>
</div>

@endsection