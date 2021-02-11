<!-- footer -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Adres
                        </h3>
                        <p class="footer_text"> {{$setting->address}}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            İletişim
                        </h3>
                        <p class="footer_text">E-mail: <br>
                            {{$setting->email}}</p>
                        <p class="footer_text">Cep Telefonu: <br>
                            {{$setting->mobilephone}}</p>
                        <p class="footer_text">Ofis Telefonu: <br>
                            {{$setting->officephone}}</p>
                        <p class="footer_text">Fax:  <br>
                            {{$setting->fax}}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Navigasyon
                        </h3>
                        <ul>
                            <li><a href="{{route('hometr')}}">Anasayfa</a></li>
                            <li><a href="{{route('yachtstr',['status'=>'true'])}}">Yatlar</a></li>
                            <li><a href="#">Hakkımızda</a></li>
                            <li><a href="#">İletişim</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-8 col-md-7 col-lg-9">
                    <p class="copy_right">
                        Bodrum Oğuz Marin | All Rights Reserved @ 2021 | This site is designed by Emre Taşdemir</a>
                </div>
                <div class="col-xl-4 col-md-5 col-lg-3">
                    <div class="socail_links">
                        <ul>
                            <li>
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets')}}/img/language/en.png" alt="">
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
        </div>
    </div>
</footer>

<!-- JS here -->
<script src="{{asset('assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/js/ajax-form.js"></script>
<script src="{{asset('assets')}}/js/waypoints.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('assets')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('assets')}}/js/scrollIt.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('assets')}}/js/wow.min.js"></script>
<script src="{{asset('assets')}}/js/nice-select.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/plugins.js"></script>
<script src="{{asset('assets')}}/js/gijgo.min.js"></script>

<!--contact js-->
<script src="{{asset('assets')}}/js/contact.js"></script>
<script src="{{asset('assets')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.form.js"></script>
<script src="{{asset('assets')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('assets')}}/js/mail-script.js"></script>

<script src="{{asset('assets')}}/js/main.js"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
</script>
