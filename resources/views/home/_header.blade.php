<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('yachts',['status'=>'true'])}}">Yachts <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{route('yachts',['status'=>'true'])}}">Yachts</a></li>
                                            <li><a href="{{route('underconstruction')}}">Underconstruction</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets')}}/img/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="book_room">
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="{{route('hometr')}}">
                                            <img src="{{asset('assets')}}/img/language/tr.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$setting->twitter}}" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$setting->instagram}}" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
