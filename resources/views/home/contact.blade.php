@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title', $setting->title . ' - Contact')
@section('description','BodrumOguzMarin')


@section('keywords','OguzMarin')

@section('content')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <img src="{{asset('assets')}}/img/specialfonts/contact.png">
    </div>
    <!-- bradcam_area_end -->
    <section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Contact</h2>
                @include('home.message')
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('sendmessage')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Address:</h3>
                        <p>{{$setting->address}}</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>Phones:</h3>
                        <p>{{$setting->mobilephone}}<br>
                            {{$setting->officephone}}</p>
                        <h3>Fax:</h3>
                        <p>{{$setting->fax}}</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>E-Mail</h3>
                        <p>{{$setting->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- ================ contact section end ================= -->
@endsection
