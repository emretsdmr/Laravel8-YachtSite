@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title', $setting->title. ' - Yachts')
@section('description','BodrumOguzMarin')


@section('keywords','BodrumOguzMarin')



@section('content')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <img src="{{asset('assets')}}/img/specialfonts/yachts.png">
    </div>
    <!-- bradcam_area_end -->

    <br><br><br><br>
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title text-center mb-100">
                <span>{{$data->title}}</span>
                <h3>{{$data->title}}</h3>
            </div>
        </div>
    </div>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center" style="background-image:url({{Storage::url($data->image)}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($images as $rs)
                <div class="single_slider d-flex align-items-center justify-content-center" style="background-image:url({{Storage::url($rs->image)}})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- slider_area_end -->


    <!-- offers_area_start -->
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="section_title text-center mb-100">
                        @foreach($datalist as $rs)
                            <h2>Type: {{$rs->type}}</h2>
                            <h5>Length Over All (LOA): {{$rs->lengthoverall}}</h5>
                            <h2>Engine(s): {{$rs->engine}}</h2>
                            <h5>Year Built: {{$rs->yearbuilt}}</h5>
                            <h2>Speed: {{$rs->speed}}</h2>
                            <h5>Hull: {{$rs->hull}}</h5>
                            <h2>Beam: {{$rs->beam}}</h2>
                            <h5>Sails: {{$rs->sails}}</h5>
                            <h2>Cabins: {{$rs->cabins}}</h2>
                            <h5>Fuel Capacity: {{$rs->fuelcapacity}}</h5>
                            <h2>Draft: {{$rs->draft}}</h2>
                            <h5>Generator: {{$rs->generator}}</h5>
                            <h2>Crew: {{$rs->crew}}</h2>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($data->video)
        <!-- video_area_start -->
        <div class="video_area overlay" style="background-image:url({{Storage::url($data->image)}})">
            <div class="video_area_inner text-center">
                @foreach($datalist as $rs)
                    <span>Bodrum Oğuz Marin</span>
                    <h3>{{$rs->title}} <br>
                        Video </h3>
                    <a href="{{Storage::url($rs->video)}}" class="video_btn popup-video">
                        <i class="fa fa-play"></i>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- video_area_end -->
    @endif
@endsection
