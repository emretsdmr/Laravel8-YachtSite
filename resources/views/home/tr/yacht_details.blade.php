@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.hometr')

@section('title', $setting->title. ' - Yatlar')
@section('description','BodrumOguzMarin')


@section('keywords','BodrumOguzMarin')



@section('content')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <h3>Yachts</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- offers_area_start -->
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>{{$data->title}}</span>
                        <h3>{{$data->title}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <div class="about_info">
                        <div class="about_thumb">
                            <img src="{{Storage::url($data->image)}}" style="width:700px;height:500px;" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        @foreach($datalist as $rs)
                            <h3>{{$rs->title}}</h3>
                            <ul>
                                <li>Tip: {{$rs->type}}</li>
                                <li>Toplam Boyut: {{$rs->lengthoverall}}</li>
                                <li>Motor(lar): {{$rs->engine}}</li>
                                <li>Yapılış Tarihi: {{$rs->yearbuilt}}</li>
                                <li>Sürat: {{$rs->speed}}</li>
                                <li>Gövde: {{$rs->hull}}</li>
                                <li>Beam: {{$rs->beam}}</li>
                                <li>Yelkenler: {{$rs->sails}}</li>
                                <li>Kabinler: {{$rs->cabins}}</li>
                                <li>Yakıt Kapasitesi: {{$rs->fuelcapacity}}</li>
                                <li>Draft: {{$rs->draft}}</li>
                                <li>Jeneratör: {{$rs->generator}}</li>
                                <li>Mürettebat: {{$rs->crew}}</li>
                                <br>
                                <a href="{{route('yachtimagestr',['id'=>$rs->id])}}" target="_blank" class="line-button"></i>Galeri</a>
                            </ul>
                            <br><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
