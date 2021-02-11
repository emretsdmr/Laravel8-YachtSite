@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.hometr')

@section('title', $setting->title.' - Hakkımızda')
@section('description','BodrumOguzMarin')


@section('keywords','BodrumOguzMarin')

@section('content')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <img src="{{asset('assets')}}/img/specialfonts/hakkimizda.png">
    </div>
    <!-- bradcam_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Bodrum <br>
                                Oğuz Marin</h3>
                        </div>
                        <p>{!! $setting->aboutustr !!}</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="{{asset('assets')}}/img/about/about_1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="{{asset('assets')}}/img/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- about_info_area_start -->
    <div class="about_info_area">
        <div class="about_active owl-carousel">
            <div class="single_slider about_bg_1"></div>
            <div class="single_slider about_bg_1"></div>
            <div class="single_slider about_bg_1"></div>
            <div class="single_slider about_bg_1"></div>
        </div>
    </div>
    <!-- about_info_area_start -->

    <!-- about_main_info_start -->
    <div class="about_main_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info">
                        <h3>We Serve Fresh and <br>
                            Delicious Food</h3>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit <br> phasellus consectetuer dolor ornare dapibus enim ut tincidunt <br> rhoncus tellus sollicitudin pede nam maecenas, dolor sem. <br> Neque sollicitudin enim. Dapibus lorem feugiat facilisi <br> faucibus et. Rhoncus.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info">
                        <h3>We Serve Fresh and <br>
                            Delicious Food</h3>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit <br> phasellus consectetuer dolor ornare dapibus enim ut tincidunt <br> rhoncus tellus sollicitudin pede nam maecenas, dolor sem. <br> Neque sollicitudin enim. Dapibus lorem feugiat facilisi <br> faucibus et. Rhoncus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_main_info_end -->
@endsection
