@extends('master')

@section('cssinline')
    <link href="{{ asset('tocify/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('tocify/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('tocify/jquery.tocify.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <section class="pricing__hero faq">
        <div class="container text-left">
            <h1>Petunjuk penggunaan gudangin</h1>

            <p style="color: white">
                Beberapa hal ini yang harus kamu pahami sebelum menggunakan gudangin
            </p>

            <div class="mt-3">
                <a href="" class="btn__white">
                    DOWNLOAD EBOOK <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1636602785">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="custom-shape-divider-bottom-1636602786">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="custom-shape-divider-bottom-1636602787">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section id="faq" class="container">

        <div class="row-fluid position-relative" style="margin-top: 1rem">
            <div class="span3">
                <div id="toc" class="fontw-6 position-absolute">
                </div>
            </div>
            <div class="span9">
                <h2>Pendahuluan</h2>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Selamat Datang di Gudangin</h3>
                </div>
                <div class="pad__left">
                    <h5>Pusing karna bisnis online kamu bermasalah ?</h5>
                    <div class="mt-3">
                        <div class="number_list">
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    1
                                </div>
                                <p class="mb-0">
                                    Orderan
                                    <span class="fc-primary fontw-6">
                                        sering batal
                                    </span>
                                    karena terlambat diproses
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    2
                                </div>
                                <p class="mb-0">
                                    Butuh
                                    <span class="fc-primary fontw-6">
                                        waktu lama
                                    </span>
                                    untuk packing orderan
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    3
                                </div>
                                <p class="mb-0">
                                    <span class="fc-primary fontw-6">
                                        Susah menghandle
                                    </span>
                                    banyak toko
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    4
                                </div>
                                <p class="mb-0">
                                    Input manual malah jadi
                                    <span class="fc-primary fontw-6">
                                        selisih saat stock opname
                                    </span>
                                </p>
                            </div>

                            <div class="why__left">
                                <ul class="list__why m-0" style="list-style: none;">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <span>
                                                <svg width="108" height="108" viewBox="0 0 108 108" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g filter="url(#filter0_d_480_2383)">
                                                        <circle cx="54" cy="44" r="24" fill="white" />
                                                    </g>
                                                    <g clip-path="url(#clip0_480_2383)">
                                                        <path
                                                            d="M42 56.5081C42 50.5409 42 44.5737 42 38.6064C42.115 38.6064 42.3451 38.6064 42.4601 38.6064C47.5211 38.6064 52.6972 38.6064 57.7582 38.6064C60.5188 38.6064 63.2793 38.6064 66.0399 38.6064C66.5 38.6064 66.5 38.6064 66.5 39.0655C66.5 44.6884 66.5 50.4261 66.5 56.0491C66.5 56.2786 66.5 56.3933 66.5 56.6228C66.27 57.4261 65.8099 57.8851 65.0047 58.1146C57.8732 58.1146 50.7418 58.1146 43.6103 58.1146C42.6901 57.7704 42.23 57.3114 42 56.5081ZM58.2183 45.4917C58.2183 45.0327 58.1033 44.8032 57.7582 44.6884C57.5282 44.5737 57.1831 44.5737 56.9531 44.6884C56.838 44.8032 56.723 44.8032 56.723 44.9179C55.5728 46.0655 54.5376 47.0982 53.3873 48.2458C53.2723 48.3605 53.1573 48.4753 52.9272 48.2458C52.5822 47.9015 52.1221 47.4425 51.777 47.0982C51.4319 46.754 50.9718 46.754 50.6268 46.9835C50.2817 47.3278 50.2817 47.7868 50.6268 48.131C51.2019 48.9343 51.892 49.5081 52.5822 50.1966C52.9272 50.5409 53.3873 50.5409 53.7324 50.1966C55.1127 48.8196 56.493 47.4425 57.9883 45.9507C58.1033 45.836 58.2183 45.6064 58.2183 45.4917Z"
                                                            fill="#E38B30" />
                                                        <path
                                                            d="M47.9812 37C46.2558 37 44.6455 37 42.9202 37C42.5751 37 42.4601 37 42.6901 36.6557C43.8404 34.7049 44.8756 32.8689 46.0258 30.918C46.3709 30.3443 46.946 30 47.6361 30C49.4765 30 51.3169 30 53.0422 30C53.5023 30 53.5023 30 53.5023 30.3443C53.5023 32.4098 53.5023 34.4754 53.5023 36.541C53.5023 36.8852 53.5023 36.8852 53.1573 36.8852C51.4319 37 49.7065 37 47.9812 37Z"
                                                            fill="#E38B30" />
                                                        <path
                                                            d="M60.5188 37C58.7935 37 57.1831 37 55.4578 37C54.9977 37 54.9977 37 54.9977 36.541C54.9977 34.4754 54.9977 32.4098 54.9977 30.3443C54.9977 29.8853 54.9977 29.8853 55.4578 29.8853C57.2982 29.8853 59.0235 29.8853 60.8639 29.8853C61.554 29.8853 62.0141 30.2295 62.3592 30.8033C63.5094 32.7541 64.6597 34.7049 65.6949 36.6557C65.8099 36.8853 65.8099 37 65.4648 37C63.8545 37 62.1291 37 60.5188 37Z"
                                                            fill="#E38B30" />
                                                    </g>
                                                    <defs>
                                                        <filter id="filter0_d_480_2383" x="0" y="0" width="108" height="108"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="10" />
                                                            <feGaussianBlur stdDeviation="15" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_480_2383" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_480_2383" result="shape" />
                                                        </filter>
                                                        <clipPath id="clip0_480_2383">
                                                            <rect width="24.5" height="28" fill="white"
                                                                transform="translate(42 30)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <div class="content">
                                                <h6 style="color:black">
                                                    <b>Menyatukan <span class="why_primary">semua orderan</span></b>
                                                </h6>
                                                <p class="opac-70">
                                                    GUDANGIN menyatukan semua orderan, stok <br> barang hingga chat dari
                                                    semua toko online.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <span>
                                                <svg width="108" height="108" viewBox="0 0 108 108" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g filter="url(#filter0_d_480_2377)">
                                                        <circle cx="54" cy="44" r="24" fill="white" />
                                                    </g>
                                                    <path
                                                        d="M40 39.291C40.1273 39.291 40.2545 39.291 40.3818 39.291C49.4182 39.291 58.3273 39.291 67.3636 39.291C68 39.291 67.8727 39.291 67.8727 39.8001C67.8727 40.3092 67.8727 40.8183 67.7455 41.3274C67.3636 42.2183 66.6 42.7274 65.5818 42.8547C64.4364 42.8547 63.1636 42.8547 62.0182 42.8547C61 42.8547 60.1091 42.091 59.7273 40.9456C59.6 41.0728 59.6 41.0728 59.6 41.2001C59.3455 42.2183 58.4545 42.8547 57.4364 42.8547C55.1455 42.8547 52.7273 42.8547 50.4364 42.8547C49.4182 42.8547 48.5273 42.091 48.2727 41.2001C48.2727 41.2001 48.2727 41.0728 48.1455 40.9456C48.0182 41.5819 47.7636 42.091 47.2545 42.4728C46.8727 42.7274 46.3636 42.8547 45.8545 42.8547C44.7091 42.8547 43.5636 42.8547 42.5455 42.8547C41.4 42.8547 40.5091 42.2183 40.1273 41.2001C40.1273 41.2001 40.1273 41.0728 40 41.0728C40 40.4365 40 39.9274 40 39.291Z"
                                                        fill="#E38B30" />
                                                    <path
                                                        d="M56.8 30C57.0545 31.0182 57.1818 32.0364 57.4364 32.9273C57.8182 34.4545 58.0727 36.1091 58.4545 37.7636C58.5818 38.1455 58.5818 38.1455 58.0727 38.1455C55.4 38.1455 52.7273 38.1455 50.0545 38.1455C49.6727 38.1455 49.6727 38.1455 49.6727 37.7636C50.1818 35.2182 50.6909 32.8 51.2 30.2545C51.2 30.1273 51.2 30.1273 51.3273 30C53.1091 30 54.8909 30 56.8 30Z"
                                                        fill="#E38B30" />
                                                    <path
                                                        d="M64.8182 30C65.3273 30.1273 65.5818 30.5091 65.7091 31.0182C66.3455 33.3091 66.9818 35.4727 67.6182 37.7636C67.7455 38.1455 67.7455 38.1455 67.3637 38.1455C65.3273 38.1455 63.2909 38.1455 61.2546 38.1455C60.8727 38.1455 60.8727 38.1455 60.7455 37.7636C60.2364 35.2182 59.7273 32.6727 59.2182 30.1273V30C61 30 62.9091 30 64.8182 30Z"
                                                        fill="#E38B30" />
                                                    <path
                                                        d="M48.9091 30C48.6546 31.2727 48.4 32.4182 48.1455 33.6909C47.8909 35.0909 47.6364 36.4909 47.3818 37.8909C47.3818 38.1455 47.2546 38.1455 47 38.1455C44.9636 38.1455 42.8 38.1455 40.7636 38.1455C40.3818 38.1455 40.3818 38.1455 40.5091 37.7636C41.1455 35.4727 41.7818 33.1818 42.4182 31.0182C42.4182 30.6364 42.6727 30.2545 43.1818 30C45.0909 30 47 30 48.9091 30Z"
                                                        fill="#E38B30" />
                                                    <path
                                                        d="M66.8546 50.4911C66.8546 52.5275 66.8546 54.6911 66.8546 56.7275C66.8546 57.3638 66.4727 57.7457 65.9636 58.0002C65.8364 58.0002 65.7091 58.0002 65.5818 58.0002C61.3818 58.0002 57.3091 58.0002 53.1091 58.0002C52.7273 58.0002 52.7273 58.0002 52.7273 57.6184C52.7273 54.3093 52.7273 51.0002 52.7273 47.5638C52.7273 46.9275 52.4727 46.5457 51.8364 46.4184C51.7091 46.4184 51.5818 46.4184 51.4546 46.4184C49.5455 46.4184 47.6364 46.4184 45.7273 46.4184C44.9636 46.4184 44.5818 46.9275 44.5818 47.5638C44.5818 50.8729 44.5818 54.182 44.5818 57.4911C44.5818 58.0002 44.5818 58.0002 44.0727 58.0002C43.4364 58.0002 42.8 58.0002 42.2909 58.0002C41.5273 58.0002 41.0182 57.4911 41.0182 56.7275C41.0182 52.9093 41.0182 49.0911 41.0182 45.2729C41.0182 44.8911 41.0182 44.5093 41.0182 44.0002C41.0182 43.8729 41.0182 43.7457 41.2727 43.8729C41.9091 44.0002 42.4182 44.0002 43.0546 44.0002C44.0727 44.0002 45.2182 44.0002 46.2364 44.0002C46.8727 44.0002 47.5091 43.7457 48.0182 43.3638C48.2727 43.2366 48.2727 43.2366 48.5273 43.3638C49.0364 43.7457 49.8 44.0002 50.6909 44.0002C52.9818 44.0002 55.1455 44.0002 57.4364 44.0002C58.3273 44.0002 59.0909 43.7457 59.7273 43.2366C59.8546 43.1093 59.9818 43.1093 59.9818 43.2366C60.7455 43.8729 61.5091 44.0002 62.5273 44.0002C63.4182 44.0002 64.4364 44.0002 65.3273 44.0002C65.7091 44.0002 66.0909 44.0002 66.4727 43.8729C66.7273 43.7457 66.7273 43.7457 66.7273 44.1275C66.8546 46.1638 66.8546 48.3275 66.8546 50.4911ZM59.2182 52.1457C60.1091 52.1457 61.1273 52.1457 62.0182 52.1457C62.7818 52.1457 63.1636 51.6366 63.1636 51.0002C63.1636 49.8547 63.1636 48.7093 63.1636 47.5638C63.1636 46.8002 62.6546 46.4184 62.0182 46.4184C60.1091 46.4184 58.2 46.4184 56.2909 46.4184C55.5273 46.4184 55.1455 46.9275 55.1455 47.5638C55.1455 48.7093 55.1455 49.8547 55.1455 50.8729C55.1455 51.6366 55.6546 52.0184 56.2909 52.0184C57.3091 52.1457 58.3273 52.1457 59.2182 52.1457Z"
                                                        fill="#E38B30" />
                                                    <defs>
                                                        <filter id="filter0_d_480_2377" x="0" y="0" width="108" height="108"
                                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="10" />
                                                            <feGaussianBlur stdDeviation="15" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_480_2377" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_480_2377" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <div class="content">
                                                <h6 style="color:black">
                                                    <b>Menggabungkan toko <span class="why_primary">di
                                                            marketplace</span></b>
                                                </h6>
                                                <p class="opac-70">
                                                    GUDANGIN dapat menggabungkan semua toko di <br> marketplace di
                                                    Indonesia (Tokopedia, Shopee, <br> BliBli, dll) ke dalam satu
                                                    software.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Fungsi GUDANGIN</h3>
                </div>
                <div class="pad__left">
                    <div class="mt-3">
                        <p class="fontw-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue pharetra donec convallis id
                            quisque diam accumsan nisl felis. Laoreet a quam morbi volutpat.
                        </p>
                        <p class="fontw-6">
                            Magna nulla lobortis in risus vitae egestas ut tortor. Hendrerit donec eu ut sit faucibus
                            quis cursus. Risus praesent aenean phasellus dignissim faucibus ante dictumst semper
                            phasellus. Purus sit nunc, mi, ullamcorper. Suspendisse pellentesque aliquam nibh lectus
                            egestas vitae aliquam ultrices aliquam.
                        </p>
                    </div>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Layanan GUDANGIN</h3>
                </div>
                <div class="pad__left position-relative">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="card transparent">
                                <div class="card-body">
                                    <img src="{{ asset('images/landing-page/layanan1.png') }}" alt="">
                                    <h6>
                                        <span class="primary">
                                            Agregasi SKU Produk, data orderan/transaksi, jumlah pembeli dan data pembeli
                                        </span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card transparent">
                                <div class="card-body">
                                    <img src="{{ asset('images/landing-page/layanan2.png') }}" alt="">
                                    <h6>
                                        <span class="primary">
                                            Integrasi toko online dari beberapa marketplace sekaligus
                                        </span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card transparent">
                                <div class="card-body">
                                    <img src="{{ asset('images/landing-page/layanan3.png') }}" alt="">
                                    <h6>
                                        <span class="primary">
                                            Agregasi chat dari beberapa marketplace sehingga admin tidak perlu lagi
                                            login-logout banyak akun
                                        </span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="position-absolute" src="{{ asset('images/landing-page/boxxx.png') }}" alt="gudangin">
                    <div class="position-absolute inside__box">
                        <div class="text-center">
                            <p class="small mb-1">Kamu stay at home kembangin bisnisnya</p>
                            <p class="big">
                                <b>
                                    Biar Kami yang <span class="primary">kelola dan kembangkan</span> usaha online
                                    Anda!
                                </b>
                            </p>
                            <div>
                                <a href="#" class="btn__primary">
                                    COBA GRATIS <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="after__box">Menghubungkan Toko ecommerce ke GUDANGIN</h2>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Tokopedia</h3>
                </div>
                <div class="pad__left">
                    <div class="mt-3">
                        <div class="number_list">
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    1
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Masukkan data</span>
                                    untuk register toko ke dalam GUDANGIN
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    2
                                </div>
                                <p class="mb-0">
                                    Status akan menunjukan
                                    <span class="primary">“waiting for approval”</span>
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    3
                                </div>
                                <p class="mb-0">
                                    Ketika status berganti menjadi
                                    <span class="primary">“cek email”, </span>
                                    mohon cek email yang digunakan pada toko tersebut dan
                                    <span class="primary">klik tombol konfirmasi di email tersebut,</span>
                                    dan toko Anda telah terhubung dengan GUDANGIN
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Shopee</h3>
                </div>
                <div class="pad__left">
                    <div class="mt-3">
                        <div class="number_list">
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    1
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Masukkan data</span>
                                    untuk register toko ke dalam GUDANGIN
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    2
                                </div>
                                <p class="mb-0">
                                    Klik tombol
                                    <span class="primary">“Create Auth”</span>
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    3
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Login ke dalam toko di Shopee</span>
                                    menggunakan email dan password, dan klik
                                    <span class="primary">“Confirm Authentication”. </span>
                                    Setelah itu toko Anda telah terhubung dengan GUDANGIN
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Blibli</h3>
                </div>
                <div class="pad__left">
                    <div class="mt-3">
                        <div class="number_list">
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    1
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Masukkan data</span>
                                    untuk register toko ke dalam GUDANGIN
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    2
                                </div>
                                <p class="mb-0">
                                    Sambil memasukkan data,
                                    <span class="primary">Login ke toko yang ada di Blibli/span>
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    3
                                </div>
                                <p class="mb-0">
                                    Buka menu setting
                                    <span class="primary">“Seller API Manager”</span>
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    4
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Klik tombol Generate dan copy paste</span>
                                    text tersebut ke dalam kolom
                                    <span class="primary">“API Seller Key”</span>
                                    di GUDANGIN
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    5
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Copy paste API Client ID </span>
                                    yang ada di GUDANGIN ke dalam dashboard Blibli dan
                                    <span class="primary">klik Bind</span>
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    6
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Save data yang ada di dashboard GUDANGIN maupun yang
                                        ada di Blibli,</span>
                                    setelah itu toko Anda telah terhubung dengan GUDANGIN
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 style="margin-top: 2rem">Perbaharui Produk</h2>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Cara Perbaharui Produk</h3>
                </div>
                <div class="pad__left">
                    <p>
                        Untuk update produk akan dilakukan otomatis pada jam 12.00 malam yang dilakukan pada semua toko.
                        <br>
                        Tetapi terdapat opsi manual untuk mengupdate produk per toko:
                    </p>
                    <div class="mt-3">
                        <div class="number_list">
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    1
                                </div>
                                <p class="mb-0">
                                    Klik menu
                                    <span class="primary">Products</span>
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    2
                                </div>
                                <p class="mb-0">
                                    Klik tombol
                                    <span class="primary">Update Product</span>
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    3
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Pilih toko yang mau diupdate</span>
                                    (maksimal update per toko adalah 3 kali dalam sehari)
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    4
                                </div>
                                <p class="mb-0">
                                    <span class="primary">Sistem akan menarik data produk</span>
                                    yang terdapat pada toko tersebut
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    5
                                </div>
                                <p class="mb-0">
                                    Setelah produk masuk, diharapkan untuk menginput
                                    <span class="primary">Inisial, Stock Name, dan Stock Conversion.</span>
                                </p>
                            </div>
                        </div>
                        <p>
                            Terdapat beberapa pengaturan yang harus dilakukan di ecommerce agar produk yang telah
                            ditarik ke dalam GUDANGIN dapat terhubung dengan optimal yaitu:
                        </p>
                        <p class="box">
                            Memasukkan Kode SKU di produk yang sama pada setiap toko yang berbeda
                        </p>
                    </div>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Tujuan</h3>
                </div>
                <div class="pad__left">
                    <p>
                        Agar agregasi stok dapat berjalan secara optimal di tiap toko yang berbeda dan memiliki produk
                        yang sama
                    </p>
                </div>

                <h2 style="margin-top: 2rem">Agregasi Stok</h2>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Tujuan Agregasi Stok</h3>
                </div>
                <div class="pad__left">
                    <p>
                        Agregasi stok digunakan untuk menghubungkan stok dari produk yang sama dengan toko dan ecommerce
                        yang berbeda.
                        <br>
                        Tujuannya adalah agar ketika terdapat perubahan stok pada ecommerce (contoh: penjualan) atau
                        pada dashboard admin (contoh: stock in, stock opname) maka stok tersebut akan di update ke semua
                        toko yang memiliki produk serupa tersebut.
                    </p>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Cara Kerja</h3>
                </div>
                <div class="pad__left">
                    <p>
                        Cara untuk menghubungkan stok sebagai berikut :
                    </p>
                    <ul>
                        <li>
                            <p>
                                Produk yang ingin dimasukkan ke dalam GUDANGIN harus memiliki kode SKU yang sama pada
                                setiap toko atau platform yang berbeda
                            </p>
                        </li>
                    </ul>
                </div>

                <h2 style="margin-top: 2rem">One Stop Packing Management System</h2>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Peralatan GUDANGIN</h3>
                </div>
                <div class="pad__left">
                    <p>
                        Produk anda harus “ecommerce ready” sehingga pengemasan dan pengiriman dapat dilakukan secara
                        optimal.
                        <br>
                        Terdapat beberapa peraturan yang harus diikuti berdasarkan tipe produk yang dapat dilihat
                        disini.
                        GUDANGIN Cloud Warehouse menyediakan peralatan yang lengkap untuk mengemas dan mengirim pesanan
                        sebagai berikut:
                    </p>

                    <div class="my-5">
                        <div class="number_list">
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    &#8226;
                                </div>
                                <p class="mb-0">
                                    Workstation
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-start">
                                <div class="numb__item">
                                    &#8226;
                                </div>
                                <div>
                                    <p class="mb-0">
                                        Thermal laser printer
                                    </p>
                                    <ul>
                                        <li>
                                            <p>Label pemesanan dari ecommerce</p>
                                        </li>
                                        <li>
                                            <p>QR Code untuk pemesanan kurir otomatis</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    &#8226;
                                </div>
                                <p class="mb-0">
                                    Tape berdasarkan tipe pesanan
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    &#8226;
                                </div>
                                <p class="mb-0">
                                    Bubble Wrap
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    &#8226;
                                </div>
                                <p class="mb-0">
                                    Packing kayu
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    &#8226;
                                </div>
                                <p class="mb-0">
                                    Stiker “Unboxing”
                                </p>
                            </div>
                            <div class="py-2 d-flex align-items-center">
                                <div class="numb__item">
                                    &#8226;
                                </div>
                                <p class="mb-0">
                                    Dan lain lain berdasarkan kebutuhan pengemasan dan pengiriman
                                </p>
                            </div>
                        </div>
                    </div>
                    <p>
                        Waktu default yang kami miliki untuk mengemas pesanan adalah 3 menit,
                        tetapi waktu tersebut fleksibel berdasarkan tingkat kesulitan dalam mengemas produk tersebut.

                    </p>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Lihat dan Pantau Pesanan</h3>
                </div>
                <div class="pad__left">
                    <p>
                        Anda sebagai pengguna GUDANGIN Cloud Warehouse juga dapat melihat dan memantau pesanan yang
                        sedang berlangsung pada hari tersebut dengan cara:
                    </p>

                    <p>
                        <b>
                            Klik menu Order
                        </b>
                    </p>
                </div>

                <h2 style="margin-top: 2rem">Chat Management System</h2>
                <div class="pad__left">
                    <p>
                        Fitur chat ini hanya dapat dilakukan pada ecommerce yaitu Tokopedia dan Shopee sedangkan belum
                        tersedia di Blibli.
                    </p>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Tokopedia</h3>
                </div>
                <div class="pad__left">
                    <p>
                        Untuk dapat menggunakan fitur ini, Anda dapat mengikuti Langkah berikut:
                        Auto Connect
                    </p>
                </div>
                <div class="my-4 d-flex align-items-center">
                    <div class="border-side-primary"></div>
                    <h3 class="mb-0">Shopee</h3>
                </div>
                <div class="pad__left">
                    <p>
                        Untuk dapat menggunakan fitur ini, Anda dapat mengikuti Langkah berikut:
                        Auto Connect
                    </p>

                    <ul>
                        <li>
                            <p>
                                Klik tombol Create Chat Auth dan login menggunakan email dan password toko.
                            </p>
                        </li>
                        <li>
                            <p>
                                Setelah itu, klik Confirm Authentication dan chat akan terhubung.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pageJS')
    <script src="{{ asset('tocify/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('tocify/jquery-ui-1.9.1.custom.min.js') }}"></script>
    <script src="{{ asset('tocify/jquery.tocify.js') }}"></script>
    <script>
        var total = 700
        //Executes your code when the DOM is ready.  Acts the same as $(document).ready().
        $(function() {
            var toc = $("#toc").tocify({
                selectors: "h2,h3"
            }).data("toc-tocify");
        });

        if (screen.width > 500) {
            $(window).scroll(function(event) {

                var scroll = $(window).scrollTop();
                console.log(scroll)
                // Do something
                if (scroll > 470) {
                    $("#toc").addClass("position-fixed")
                    $("#toc").removeClass("position-absolute")
                    $("#toc").css("top", "100px")
                } else {
                    $("#toc").removeClass("position-fixed")
                    $("#toc").addClass("position-absolute")
                    $("#toc").css("top", "0")
                }
            });
img__layanan60%
    </script>
@endsection
