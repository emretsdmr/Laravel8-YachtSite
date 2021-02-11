@extends('layouts.home')

@section('title', $setting->title)
@section('description','BodrumOguzMarin')


@section('keywords','BodrumOguzMarin')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <img src="{{asset('assets')}}/img/specialfonts/sliderfont.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Bodrum<br>
                                Oğuz Marin</h3>
                        </div>
                        <p>{!! $setting->aboutus !!}</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
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





    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Our Yachts</span>
                        <h3>Choose a Better Yacht</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            @foreach($picked as $rs)
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{Storage::url($rs->image)}}" style="width:900px;height:590px;" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span></span>
                            <h3>{{$rs->title}}</h3>
                        </div>
                        <a href="#" class="line-button">details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- features_room_end -->
@endsection

