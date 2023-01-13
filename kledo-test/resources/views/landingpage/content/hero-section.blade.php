@push('style')
    <style>
        .bg-theme-1
        {
            background-color: #e53e6a;
        }
        .text-white
        {
            color: #fff!important;
        }
        @media (min-width: 992px)
        {
            .pb-lg-5, .py-lg-5
            {
                padding-bottom: 3rem!important;
            }
            .pt-lg-3, .py-lg-3
            {
                padding-top: 1rem!important;
            }
        }

        @media (min-width: 768px)
        {
            .pb-md-4, .py-md-4 {
                padding-bottom: 1.5rem!important;
            }
        }

        .container, .container-fluid
        {
            padding-right: 1.5rem;
            padding-left: 1.5rem;
        }

        .py-5
        {
            padding-top: 9rem!important;
        }
        .opacity-7 {
            opacity: .7;
        }
    </style>

@endpush
<article id="header" class="bg-theme-1 text-white pb-mb-4 pb-lg-5 pt-lg-3">
    <div class="container py-5">
        <div class="row no-gutters align-items-lg-center">
            <div class="col-lg-6 order-lg-2 text-center">
                <img class="img-fluid px-5 mb-4 mb-lg-0" height="100" src="{{ url('img/gajihub-hero.gif') }}" alt="GajiHub Software Payroll">
            </div>
            <div class="col-lg-6 order-lg-1 text-center text-lg-left">
                <h1 class="fs-1 text-break mb-3">Pengelolaan Payroll dan HR di Bisnis Anda Kini Menjadi Lebih Mudah</h1>
                <p class="fs-6 text-break my-3 opacity-7">GajiHub hadir untuk memudahkan anda mengelola proses penggajian, HR dan absensi dalam satu software terintegrasi. Hitung gaji, pajak, pengajuan cuti, absensi dan pengelolaan data karyawan jadi lebih praktis.</p>
                <div class="d-inline-block my-2 ml-lg-n2">
                    <a class="btn btn-warning rounded-pill py-2 pl-4 fs-7 text-uppercase ws-nowrap mx-2" href="#">
                        <div class="d-flex align-items-center">
                            <span class="ml-1 mr-2"> Daftar <b>Gratis Selamanya</b></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                                <path fill="#292D32" opacity=".25" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"></path>
                                <path fill="#fff" d="M16.03 11.4699L13.03 8.46994C12.74 8.17994 12.26 8.17994 11.97 8.46994C11.68 8.75994 11.68 9.23994 11.97 9.52994L13.69 11.2499H8.5C8.09 11.2499 7.75 11.5899 7.75 11.9999C7.75 12.4099 8.09 12.7499 8.5 12.7499H13.69L11.97 14.4699C11.68 14.7599 11.68 15.2399 11.97 15.5299C12.12 15.6799 12.31 15.7499 12.5 15.7499C12.69 15.7499 12.88 15.6799 13.03 15.5299L16.03 12.5299C16.32 12.2399 16.32 11.7599 16.03 11.4699Z"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</article>
