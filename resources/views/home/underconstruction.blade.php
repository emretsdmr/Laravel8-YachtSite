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
        <img src="{{asset('assets')}}/img/specialfonts/underconstruction.png">
    </div>
    <!-- bradcam_area_end -->

    <!-- offers_area_start -->
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Underconstruction</span>
                        <h3>Underconstruction</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features_room">
        <div class="rooms_here">
            @foreach($datalist as $rs)
                <div class="single_rooms">
                    <div class="room_thumb">
                        <img src="{{Storage::url($rs->image)}}" style="width:900px;height:600px;">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <h3>{{$rs->title}}</h3>
                            </div>
                            <a href="{{route('undercons_images',['id'=>$rs->id])}}" target="_blank" class="line-button">Underconstruction Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- features_room_end -->
    <!-- offers_area_end -->
@endsection
