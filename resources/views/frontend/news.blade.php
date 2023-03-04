<!doctype html>
<html>

<head>
	@include('frontend.inc_head') 
</head>

<body>

<div class="container-fluid">
	
@include('frontend.inc_menu') 

<section class="row">
    <div class="col-12 banner-inside wow fadeInDown">
        <figure>
            <div class="title-banner">news & Activities</div>
            <img src="/frontend/images/banner-news.webp" alt="">
        </figure>
    </div>
</section>

<section class="row">
    <div class="col-12 wrap-latestnews">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInDown">
                    <div class="topic-latestnews">latest <span>updates</span></div>
                    <div>
                        <div class="owl-news owl-carousel owl-theme">
                            <div class="items">
                                <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-latestnews">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <figure><img src="/frontend/images/Daikin.png" alt=""></figure>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="box-latestnews">
                                                <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                                                <div class="title-listnews">Revolutionary "Swing Compressor" and "Scroll Compressor" Design </div>
                                                <div class="desc-latestnews">
                                                Daikin Compressor Industries Ltd. produces modern-design swing compressors for use in residential air conditioners and scroll compressor for use in commercial air conditioners. 
                                                </div>
                                                <div class="btn-default btn-blue">read more <i class="bi bi-arrow-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-latestnews">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <figure><img src="/frontend/images/Img-0175.jpeg" alt=""></figure>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="box-latestnews">
                                                <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                                                <div class="title-listnews">Revolutionary "Swing Compressor" and "Scroll Compressor" Design </div>
                                                <div class="desc-latestnews">
                                                Daikin Compressor Industries Ltd. produces modern-design swing compressors for use in residential air conditioners and scroll compressor for use in commercial air conditioners. 
                                                </div>
                                                <div class="btn-default btn-blue">read more <i class="bi bi-arrow-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-latestnews">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <figure><img src="/frontend/images/air-purifier_0.jpeg" alt=""></figure>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="box-latestnews">
                                                <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                                                <div class="title-listnews">Revolutionary "Swing Compressor" and "Scroll Compressor" Design </div>
                                                <div class="desc-latestnews">
                                                Daikin Compressor Industries Ltd. produces modern-design swing compressors for use in residential air conditioners and scroll compressor for use in commercial air conditioners. 
                                                </div>
                                                <div class="btn-default btn-blue">read more <i class="bi bi-arrow-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-latestnews">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <figure><img src="/frontend/images/DAIKIN_0064-1024x683.jpeg" alt=""></figure>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="box-latestnews">
                                                <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                                                <div class="title-listnews">Revolutionary "Swing Compressor" and "Scroll Compressor" Design </div>
                                                <div class="desc-latestnews">
                                                Daikin Compressor Industries Ltd. produces modern-design swing compressors for use in residential air conditioners and scroll compressor for use in commercial air conditioners. 
                                                </div>
                                                <div class="btn-default btn-blue">read more <i class="bi bi-arrow-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-latestnews">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <figure><img src="/frontend/images/DAIKIN_0005-1024x683.jpeg" alt=""></figure>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="box-latestnews">
                                                <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                                                <div class="title-listnews">Revolutionary "Swing Compressor" and "Scroll Compressor" Design </div>
                                                <div class="desc-latestnews">
                                                Daikin Compressor Industries Ltd. produces modern-design swing compressors for use in residential air conditioners and scroll compressor for use in commercial air conditioners. 
                                                </div>
                                                <div class="btn-default btn-blue">read more <i class="bi bi-arrow-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row wrap-allnews wow fadeInDown">
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/20931_220531145253.jpeg" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/501965.jpeg" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/air-purifier_0.jpeg" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/DAIKIN_0005-1024x683.jpeg" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/DAIKIN_0064-1024x683.jpeg" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/Daikin.png" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/Img-0175.jpeg" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/photo-contact_04.webp" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/R3_07906-1024x683.jpeg" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/photo-contact_02.webp" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/photohome_02.webp" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-listnews">
            <a href="{{ url('/'.Session::get('Lang').'/news_detail') }}" class="item-listnews">
                <figure><img src="/frontend/images/photohome_04.webp" alt=""></figure>
                <div class="news-cpad">
                    <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                    <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                </div>
            </a>
        </div>
        <div class="col-12 text-center">
            <div class="news-pagenav">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li><a href="#" class="page-link" aria-label="Previous"><span aria-hidden="true"><i class="bi bi-chevron-double-left"></i></span></a>
                        </li>
                        <li class="active"><a href="#" class="page-link">1</a></li>
                        <li><a href="#" class="page-link">2</a></li>
                        <li><a href="#" class="page-link">3</a></li>
                        <li><a href="#" class="page-link">4</a></li>
                        <li><a href="#" class="page-link">5</a></li>
                        <li><a href="#" class="page-link" aria-label="Next"><span aria-hidden="true"><i class="bi bi-chevron-double-right"></i></span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

	
@include('frontend.inc_footer')

<script>
	$( ".menubar > li:nth-child(5) > a" ).addClass( "here" );
</script>

		
</div>

</body>

</html>
