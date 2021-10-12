@extends('master')

@section('landing-content')
    <div class="page-content">
        <img src="{{ asset('images/waveElement.png') }}" class="background-image-1">
        <img src="{{asset('images/waveElement-2.png')}}" alt="" class="background-image-2">

        <div class="container">
            <div class="container-child">

                <div class="page-title-division">
                    <h1 class="page-title">Pricing</h1>
                    <div class="page-box">
                        <p class="page-exp">Sama <span>gudangin</span> , kamu hanya perlu membayar sesuai dengan
                            kebutuhan
                            dan besarnya usaha kamu saat ini.</p>
                    </div>
                </div>


                <div class="page-division">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pricing-box starter">

                                <h4>Starter</h4>

                                <h3>Rp 239,200
                                </h3>

                                <p class="monthly">Biaya bulanan</p>
                                <button>Coba Sekarang</button>

                                <p class="withlink">atau
                                    <a href="">Beli Sekarang</a>
                                </p>

                                <div class="row mb-15">
                                    <div class=" col-lg-2 col-md-3 col-2">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Handling, QC & packing fee
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-15">
                                    <div class="col-lg-2 col-md-3 col-2">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Terhubung ke berbagai toko hingga 5 toko
                                        </p>
                                    </div>
                                </div>


                                <div class="row mb-15">
                                    <div class="col-lg-2 col-md-3 col-2">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Marketplace integration
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="pricing-box premium">

                                <h4>Premium</h4>

                                <h3>Rp 559,200</h3>

                                <p class="monthly">Biaya bulanan</p>

                                <button>Coba Sekarang</button>

                                <p class="withlink">atau
                                    <a href="">Beli Sekarang</a>
                                </p>
                                <div class="row mb-15">
                                    <div class=" col-lg-2 col-md-3 col-2">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Handling, QC & packing fee
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-15">
                                    <div class="col-lg-2 col-md-3 col-2">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Terhubung ke berbagai toko hingga 5 toko
                                        </p>
                                    </div>
                                </div>


                                <div class="row mb-15">
                                    <div class="col-lg-2 col-md-3 col-2">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Marketplace integration
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="pricing-box business">

                                <h4>Business</h4>

                                <h3>Rp 1,119,200</h3>

                                <p class="monthly">Biaya bulanan</p>

                                <button>Coba Sekarang</button>

                                <p class="withlink">atau
                                    <a href="">Beli Sekarang</a>
                                </p>
                                <div class="row mb-15">
                                    <div class=" col-lg-2 col-md-3 col-2 ">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Handling, QC & packing fee
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-15">
                                    <div class="col-lg-2 col-md-3 col-2">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Terhubung ke berbagai toko hingga 5 toko
                                        </p>
                                    </div>
                                </div>


                                <div class="row mb-15">
                                    <div class="col-lg-2 col-md-3 col-2">
                                        <img src="{{ asset('images/icons/check-icon.svg') }}" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-10">
                                        <p class="feature">
                                            Marketplace integration
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-division">
                    <h3 class="division-title">Packaging Cost per order</h3>
                    <div class="div-table">
                        <div class="white-table">
                            <table class="table-pricing">
                                <tbody>
                                    <tr class="size">
                                        <td > </td>
                                        <td>Max. 17 x 9 x 6 cm</td>
                                        <td>Max. 20,8 x 13,8 x 12,3 cm</td>
                                        <td>Max. 30 x 25 x 20 cm</td>
                                        <td>Max. 45 x 35 x 30 cm</td>
                                        <td>Max. 50 x 50 x 50 cm</td>
                                    </tr>
                                    <tr class="title">
                                        <td>PACKAGING TYPE</td>
                                        <td>Super Kecil</td>
                                        <td>Kecil</td>
                                        <td>Sedang</td>
                                        <td>Besar</td>
                                        <td>Extra Besar</td>
                                    </tr>
                                    <tr class="package">
                                        <td>Bubble Wrap</td>
                                        <td>Rp1.300</td>
                                        <td>Rp1.500</td>
                                        <td>Rp2.000</td>
                                        <td>Rp3.000</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class="package">
                                        <td>Karton</td>
                                        <td>Rp3.000</td>
                                        <td>Rp3.500</td>
                                        <td>Rp7.000</td>
                                        <td>Rp13.000</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class="package">
                                        <td>Kayu</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>Rp260.000</td>
                                        <td>Rp512.000</td>
                                        <td>Rp774.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endsection

@section('pageJS')

@endsection
