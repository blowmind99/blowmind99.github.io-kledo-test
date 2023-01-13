@push('style')
    <style>
        .fitur-gajihub
        {
            margin-top: -84px;
            margin-bottom: 98px;
        }

        .card-fitur-gajihub
        {
            border-radius: 50px;
            border: 0px;
            box-shadow: -2px 10px 16px -4px rgba(0,0,0,0.31);
            -webkit-box-shadow: -2px 10px 16px -4px rgba(0,0,0,0.31);
            -moz-box-shadow: -2px 10px 16px -4px rgba(0,0,0,0.31);
        }
        .fs-4
        {
            font-size: 18px!important;
        }

        .text-break {
            word-break: break-word!important;
            word-wrap: break-word!important;
        }
        @media (max-width: 767px){
            .fitur-gajihub{
                margin-top: -24px;
            }
        }
    </style>
@endpush
<section class="fitur-gajihub">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-fitur-gajihub">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-4 mt-4 text-center text-center">
                                <img class="mb-3 mt-4" loading="lazy" src="{{ url('img/icon-7.png') }}" width="50">
                                <p class="fs-4 text-break">Perhitungan Pajak karyawan dan BPJS</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-4 text-center">
                                <img class="mb-3 mt-4" loading="lazy" src="{{ url('img/icon-6.png') }}" width="50">
                                <p class="fs-4 text-break">Menghitung Gaji, THR, dan benefit Lainnya</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-4 text-center">
                                <img class="mb-3 mt-4" loading="lazy" src="{{ url('img/icon-5.png') }}" width="50">
                                <p class="fs-4 text-break">Analisis kinerja karyawan</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-4 text-center">
                                <img class="mb-3 mt-4" loading="lazy" src="{{ url('img/icon-4.png') }}" width="50">
                                <p class="fs-4 text-break">Pengelolaan dan izin cuti karyawan</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-4 text-center">
                                <img class="mb-3 mt-4" loading="lazy" src="{{ url('img/icon-3.png') }}" width="50">
                                <p class="fs-4 text-break">Mengelola pola kerja</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-4 text-center">
                                <img class="mb-3 mt-4" loading="lazy" src="{{ url('img/icon-2.png') }}" width="50">
                                <p class="fs-4 text-break">Mencatat absensi karyawan</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-4 text-center">
                                <img class="mb-3 mt-4" loading="lazy" src="{{ url('img/icon-1.png') }}" width="50">
                                <p class="fs-4 text-break">Kelola data karyawan lebih muda</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-4 text-center">
                                <img class="mb-3 mt-4" loading="lazy" src="{{ url('img/test.png') }}" width="50">
                                <p class="fs-4 text-break">Broadcast pesan dan pengumuman lebih mudah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
