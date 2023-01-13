@push('style')
    <style>
        .mobile-review
        {
            background-color: #e53e6a;
        }
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

        .text-mobile-preview
        {
            margin-top: 200px;
        }
        .mdlns-banner--scroll
        {
            position: relative;
            display: inline-flex;
            align-items: baseline;

        }
        section.mdlns-banner:before {
                content: '';
                display: block;
                background-image: url('/assets/v2/images/landing_page/banner-background.svg');
                background-size: cover;
                width: 100%;
                height: 100%;
                position: absolute;
                background-color:#e53e6a;
            }

            @media (max-width: 1024px) {
                section.mdlns-banner:before {
                    width: 107.5%;
                    height: 107.5%;
                }
            }

            @media (max-width: 767px) {
                section.mdlns-banner:before {
                    height: 740px;
                    bottom: -30px;
                }
            }

            section.mdlns-banner {
                /* background-image: url('/assets/v2/images/landing_page/banner-background.svg'); */
                background-size: cover;
                background-repeat: no-repeat;
                height: 100%;
                transform: rotate(180deg);
                padding-top: 0;
                padding-bottom: 0;
            }

            @media (max-width: 991px) {
                section.mdlns-banner {
                    margin-top: -40px;
                }
            }

            @media (max-width: 767px) {
                section.mdlns-banner {
                    padding-top: 100px;
                    padding-bottom: 100px;
                    margin-top: 0;
                }
            }

            section.mdlns-banner .container {
                transform: rotate(180deg);
            }

            section.mdlns-banner .container .row {
                height: 625px;
            }

            @media (max-width: 1199px) {
                section.mdlns-banner .container .row {
                    height: 550px;
                }
            }

            @media (max-width: 767px) {
                section.mdlns-banner .container .row {
                    height: auto;
                }

                .frame-mobile
                {
                    display: none;
                }

                .text-mobile-preview
                {
                    margin-top: -28px;
                }
            }

            section.mdlns-banner .headline-banner {
                font-size: 56px;
                font-weight: 700;
                line-height: 1;
                margin-bottom: 20px;
            }

            @media (max-width: 991px) {
                section.mdlns-banner .headline-banner {
                    font-size: 36px;
                }
            }

            section.mdlns-banner .subheadline-banner {
                display: block;
                font-size: 24px;
            }

            @media (max-width: 991px) {
                section.mdlns-banner .subheadline-banner {
                    font-size: 16px;
                }
            }

            section.mdlns-banner .mdlns-banner--scroll {
                position: relative;
                display: inline-flex;
                align-items: baseline;
            }

            @media (max-width: 767px) {
                section.mdlns-banner .mdlns-banner--scroll {
                    display: none;
                }
            }

            section.mdlns-banner .mdlns-banner--scroll .mdlns-banner--scroll-frame {
                width: 100%;
            }

            section.mdlns-banner .mdlns-banner--scroll .mdlns-banner--scroll-image {
                position: absolute;
                width: auto;
                height: 248px;
                overflow-y: hidden;
                padding-left: 80px;
                padding-right: 80px;
                top: 23px;
                scroll-behavior: smooth;
            }

            @media (max-width: 1920px) {
                section.mdlns-banner .mdlns-banner--scroll .mdlns-banner--scroll-image {
                    /* position: absolute;  */
                    height: 480px;
                    padding-left: 0px;
                    padding-right: 134px;
                    top: 104px;
                    margin-left: 129px;
                }
            }

            @media (min-width: 1367px) and (max-width: 1400px) {
                section.mdlns-banner .mdlns-banner--scroll .mdlns-banner--scroll-image {
                    /* position: absolute;  */
                    height: 480px;
                    padding-left: 0px;
                    padding-right: 134px;
                    top: 104px;
                    margin-left: 129px;
                    /* margin-right: 188px; */
                }
            }

            @media (min-width: 1200px) and (max-width: 1366px) {
                section.mdlns-banner .mdlns-banner--scroll .mdlns-banner--scroll-image {
                    /* position: absolute;  */
                    height: 248px;
                    padding-left: 80px;
                    padding-right: 80px;
                    top: 23px;
                }
            }

            @media (min-width: 992px) and (max-width: 1199px) {
                section.mdlns-banner .mdlns-banner--scroll .mdlns-banner--scroll-image {
                    /* position: absolute;  */
                    height: 208px;
                    padding-left: 66px;
                    padding-right: 66px;
                    top: 20px;
                }
            }

            @media (min-width: 768px) and (max-width: 991px) {
                section.mdlns-banner .mdlns-banner--scroll .mdlns-banner--scroll-image {
                    /* position: absolute;  */
                    height: 160px;
                    padding-left: 50px;
                    padding-right: 50px;
                    top: 15px;
                }
            }

            section.mdlns-banner .mdlns-banner--scroll .mdlns-banner--scroll-image::-webkit-scrollbar {
                width: 0px;
            }
    </style>
@endpush

<section class="mdlns-banner">
    <div class="container">
        <div class="row text-align-center">

            <div class="col-lg-6 order-lg-2 text-align-center frame-mobile">
                <div class="mdlns-banner--scroll">
                    <img class="img-fluid px-5 mb-4 mb-lg-0" width="480"  src="{{ url('img/mockup-mobile.png') }}" alt="GajiHub Software Payroll">
                    <div id="bannerLoad" class="mdlns-banner--scroll-image">
                        <img src="{{ url('img/Frame-1.png') }}" alt="gajihub.com" style="width: 100%;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 order-lg-1 text-center text-lg-left text-mobile-preview">
                <h1 class="fs-1 text-break mb-3 text-white">Bagaimana Mobile Apps GajiHub Mentranformasi Perusahaan Anda?</h1>
                <p class="fs-6 text-break my-3 opacity-7 text-white">GajiHub hadir untuk memudahkan anda mengelola proses penggajian, HR dan absensi dalam satu software terintegrasi. Hitung gaji, pajak, pengajuan cuti, absensi dan pengelolaan data karyawan jadi lebih praktis.</p>
                <div class="d-inline-block my-2 ml-lg-n2">
                    <a class="btn btn-warning rounded-pill py-2 pl-4 fs-7 text-uppercase ws-nowrap mx-2" href="#">
                        <div class="d-flex align-items-center">
                            <span class="ml-1 mr-2"> Mulai <b>Gratis</b></span>
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
</section>
<script>
    var my_time;
    setTimeout('pageScroll()', 1000);
    function pageScroll() {
        var objDiv = document.getElementById("bannerLoad");
        objDiv.scrollTop = objDiv.scrollTop + 580;
        if (objDiv.scrollTop == (objDiv.scrollHeight - objDiv.offsetHeight)) {
            setTimeout(function() {
                objDiv.scrollTop = 0;
            }, 0);
        }
        my_time = setTimeout('pageScroll()', 2000);
    }
</script>
