@extends('front.layouts.master')

@section('content')
    <!-- home section start -->
    <section class="cab-section p-0" style="background-image: url('{{asset('front/assets/images/cab-bg.jpg')}}')">
        <div class="container main_cont" style="">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="cab-content">
                        <div>
                            <h2>Weltweit Group LLC</h2>
                            <h2>Touriseme qnd travel company in Geneva</h2>
                            <h2>Taxi and limousine services</h2>
                            <h2>Our fleet makes your transportation easy smooth and safe</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 100px;padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 m-auto">
                    <img src="{{asset('front/assets/images/sec-2.png')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row mb-3" style="margin-top: 70px">
                <div class="col-lg-6 m-auto text-center">
                    <a href="tel:+41778159801" class="contact_land d-block">
                        <i class="fa fa-phone mr-3"></i>
                        +41778159801
                    </a>
                </div>
            </div>
            <div class="row mb-3" style="">
                <div class="col-lg-6 m-auto text-center">
                    <a href="https://wa.me/message/HS3VGWFMMJEBN1" target="_blank" class="contact_land d-block">
                        <i class="fa-brands fa-whatsapp mr-3"></i>
                        Quote By Whatsapp
                    </a>
                </div>
            </div>
            <div class="row mb-3" style="">
                <div class="col-lg-6 m-auto text-center">
                    <a href="mailto:Taxi@weltweithg.com" class="contact_land d-block">
                        <i class="fa-regular fa-envelope mr-3"></i>
                        Book VIA Mail
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

