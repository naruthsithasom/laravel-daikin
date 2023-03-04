
<?php
$segment2 = Request::segment(2);
$segment3 = Request::segment(3);
$segment4 = Request::segment(4);
$segment5 = Request::segment(5);
$path = '';
if ($segment2) {
    $path .= "/$segment2";
}
if ($segment3) {
    $path .= "/$segment3";
}
if ($segment4) {
    $path .= "/$segment4";
}
if ($segment5) {
    $path .= "/$segment5";
}
?>
<div class="row">
    <div class="col-12 wrap_menu">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="social-top">
                        <a href="" target="_blank"><img src="/frontend/images/icon-fb.svg" alt=""></a>
                        <a href="" target="_blank"><img src="/frontend/images/icon-line.svg" alt=""></a>
                    </div>
                    <div class="topbar-phone">
                        <i class="bi bi-telephone"></i> 66(0) 3865 0060
                    </div>
                </div>
                <div class="col-5 col-md-4">
                    <a href="index.php" class="logo">
                        <img src="/frontend/images/logo.svg" alt="">
                    </a>
                </div>
                <div class="col-7 col-md-4">
                    <div class="topbar-right">
                        <div class="toplang">

                            <a href="{{ url('setlang') }}?lang=en&path={{$path}}"  @if(Session::get("Lang")=='th')  class="active" @endif><img src="/frontend/images/en_flag.svg" alt=""></a>
                            <a href="{{ url('setlang') }}?lang=th&path={{$path}}"  @if(Session::get("Lang")=='en')  class="active" @endif><img src="/frontend/images/th_flag.svg" alt=""></a>
                        </div>
                        <div class="btn_menutop">
                            <a class="menu-popup-btn" href="#">
                                <div class="btn_menu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="txt-btnmenu">menu</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-popup">
            <button class="menu-popup-close"><i class="bi bi-x-lg"></i></button>
            <button class="menu-popup-back"><i class="bi bi-arrow-left"></i> back</button>
            <div class="box-scrollmenu">
                <ul class="menu-popup-main">
                    <li><a href="#">Home</a></li>
                    <li class="menu-popup-hassub">
                        <a href="#">@lang('phrase.ci')</a>
                        <ul class="menu-popup-submenu">
                            <li><a href="{{ url('/'.Session::get('Lang').'/vision-mission') }}">@lang('phrase.vi')</a></li>
                            <li><a href="{{ url('/'.Session::get('Lang').'/history') }}">@lang('phrase.hy')</a></li>
                            <li><a href="{{ url('/'.Session::get('Lang').'/certification') }}">Certification</a></li>
                            <li><a href="{{ url('/'.Session::get('Lang').'/policyDCI') }}">Policy DCI</a></li>
                        </ul>
                    </li>
                    <li class="menu-popup-hassub">
                        <a href="#">Manufacturing</a>
                        <ul class="menu-popup-submenu">
                          <li><a href="{{ url('/'.Session::get('Lang').'/production') }}">Production Process</a></li>
                          <li><a href="{{ url('/'.Session::get('Lang').'/quality_control') }}">Quality Control</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/'.Session::get('Lang').'/products') }}">Product & Technology</a></li>
                    <li><a href="{{ url('/'.Session::get('Lang').'/news') }}">News & Activities</a></li>
                    <li class="menu-popup-hassub">
                        <a href="#">Sustainbility</a>
                        <ul class="menu-popup-submenu">
                          <li><a href="{{ url('/'.Session::get('Lang').'/environment_management') }}">Environment Management</a></li>
                          <li><a href="{{ url('/'.Session::get('Lang').'/engergy_management') }}">Engergy Management</a></li>
                          <li><a href="{{ url('/'.Session::get('Lang').'/safety') }}">Safety</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/'.Session::get('Lang').'/careers') }}">Careers</a></li>
                    <li><a href="{{ url('/'.Session::get('Lang').'/planttour') }}">Plant Tour</a></li>
                    <li><a href="{{ url('/'.Session::get('Lang').'/contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="menu-popup-info">
                <div class="box-popupinfo">
                    <div>address</div>
                    <address>7/202 Moo.6 T.Mabyangporn A.Pluakdaeng, Rayong 21140</address>
                </div>
                <div class="box-popupinfo">
                    <div>contact</div>
                    <p>Tel. 66(0)-3865-0060</p>
                    <p>Fax. 66(0)-3865-0061</p>
                    <p>E-mail: contact@dci.co.th</p>
                </div>
                <div class="box-popupinfo">
                    <div>follow us</div>
                    <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="#" target="_blank"><i class="bi bi-line"></i></a>
                    <a href="#" target="_blank"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="mainmenu">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="menubar">
                                <li class="logo_menuopen">
                                    <div class="close_menu"><i class="bi bi-x-circle-fill"></i></div>
                                </li>
                                <li class="hassub"><a>@lang('phrase.ci')</a>
                                    <ul class="submenu">
                                    <li><a href="{{ url('/'.Session::get('Lang').'/vision-mission') }}">@lang('phrase.vi')</a></li>
                                        <li><a href="{{ url('/'.Session::get('Lang').'/history') }}">@lang('phrase.hy')</a></li>
                                        <li><a href="{{ url('/'.Session::get('Lang').'/certification') }}">Certification</a></li>
                                        <li><a href="{{ url('/'.Session::get('Lang').'/policyDCI') }}">Policy DCI</a></li>
                                    </ul>
                                </li>
                                <li class="hassub"><a>Manufacturing</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/'.Session::get('Lang').'/production') }}">Production Process</a></li>
                                        <li><a href="{{ url('/'.Session::get('Lang').'/quality_control') }}">Quality Control</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/'.Session::get('Lang').'/products') }}">Product & Technology</a></li>
                                <li><a href="{{ url('/'.Session::get('Lang').'/news') }}">News & Activities</a></li>
                                <li class="hassub"><a>Sustainbility</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/'.Session::get('Lang').'/environment_management') }}">Environment Management</a></li>
                                        <li><a href="{{ url('/'.Session::get('Lang').'/engergy_management') }}">Engergy Management</a></li>
                                        <li><a href="{{ url('/'.Session::get('Lang').'/safety') }}">Safety</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/'.Session::get('Lang').'/careers') }}">Careers</a></li>
                                <li><a href="{{ url('/'.Session::get('Lang').'/planttour') }}">Plant Tour</a></li>
                                <li><a href="{{ url('/'.Session::get('Lang').'/contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //first





</script>
