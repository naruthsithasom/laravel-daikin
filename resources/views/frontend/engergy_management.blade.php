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
            <div class="title-banner">Engergy Management</div>
            <img src="/frontend/images/banner-energy.webp" alt="">
        </figure>
    </div>
</section>

<section class="row">
    <div class="col-12 bg-energy">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInDown">
                    <div class="box-vision">
                        <div class="title-manufac">Sustaintability</div>
                        <div class="topic-about">Engergy <div>management</div></div>
                        <div class="txt-vision">Daikin Compressor Industries Co., Ltd.</div>
                        <p>
                        Received the Prime Minister's Industry Award 2018 for the outstanding energy management industry. Emphasizes leadership in the production of integrated air conditioner parts sustainably. Raise the standard of energy management in the production process in a concrete way. By applying technology and digital systems to reduce the rate of greenhouse gas emissions. Aiming for the goal of reducing greenhouse gas emissions to be zero by the year 2050. And reduce the global warming crisis According to the Sustainable Development Goals: SDGs. In addition, it also developed innovative air conditioner compressors to be smaller in size. use less resources save energy And environmentally friendly with swing compressor innovation Inverter R32. Mr. Takashi Oi, President of Daikin Compressor Industries Co., Ltd. received the award from  Mr.Prayut Chan-o-cha, Prime Minister at Santi Maitri Building government house On 20 December 2018
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3 photo-energy">
                    <a href="/frontend/images/energy01.webp" data-fancybox="gallery">
                        <figure><img src="/frontend/images/energy01.webp" alt=""></figure>
                    </a>
                </div>
                <div class="col-6 col-lg-3 photo-energy">
                    <a href="/frontend/images/energy02.webp" data-fancybox="gallery">
                        <figure><img src="/frontend/images/energy02.webp" alt=""></figure>
                    </a>
                </div>
                <div class="col-6 col-lg-3 photo-energy">
                    <a href="/frontend/images/energy03.webp" data-fancybox="gallery">
                        <figure><img src="/frontend/images/energy03.webp" alt=""></figure>
                    </a>
                </div>
                <div class="col-6 col-lg-3 photo-energy">
                    <a href="/frontend/images/energy04.webp" data-fancybox="gallery">
                        <figure><img src="/frontend/images/energy04.webp" alt=""></figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


@include('frontend.inc_footer')

<script>
	$( ".menubar > li:nth-child(6) > a" ).addClass( "here" );
</script>


		
</div>

</body>

</html>
