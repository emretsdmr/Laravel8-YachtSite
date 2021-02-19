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
                            <span>Hakkımızda</span>
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
    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="{{asset('assets')}}/img/about/about_3.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="{{asset('assets')}}/img/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <h3>Politikamız</h3>
                        </div>
                        <p>{!! $setting->policiestr !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->


    <!-- about_main_info_start -->
    <div class="about_main_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-6">
                    <div class="single_about_info">
                        <h3>Ekibimiz</h3>
                        <p>{!! $setting->ourteamtr !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_main_info_end -->
@endsection
