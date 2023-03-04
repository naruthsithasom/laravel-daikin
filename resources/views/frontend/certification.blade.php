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
            <div class="title-banner">Certificate</div>
            <img src="/frontend/images/banner-certificate.webp" alt="">
        </figure>
    </div>
</section>

<section class="row">
    <div class="col-12 wrap-certificate">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInDown">
                    <div class="box-vision">
                        <div class="topic-about">Certificate</div>
                        <div class="txt-vision">ISO Certificate of Daikin Compressor Industries Ltd.</div>
                        <div class="row">
                            <div class="col-4 item-cer">
                                <a href="pdf/CertificateISO9001-2015.pdf" target="_blank">
                                    <img src="/frontend/images/iso_9001.webp" alt="">
                                    ISO 9001:2015
                                </a>
                            </div>
                            <div class="col-4 item-cer">
                                <a href="pdf/ISO14001.pdf" target="_blank">
                                    <img src="/frontend/images/iso_14001.webp" alt="">
                                    ISO 14001:2015
                                </a>
                            </div>
                            <div class="col-4 item-cer">
                                <a href="pdf/CertificateISO45001-2018.pdf" target="_blank">
                                    <img src="/frontend/images/iso_45001.webp" alt="">
                                    ISO 45001:2018
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row wrap-strategy wow fadeInDown">
    <div class="col-12">
        <div class="img-strategy">
            <figure><img src="/frontend/images/photo-yearcer.webp" alt=""></figure>
        </div>
        <div class="desc-yearcer desc-strategy">
            <div class="list-strategy">
                <div class="topic-cer">Management standard system for quality, environment and safety, occupational health that has been certified.</div>
                <ul class="year-certificate">
                    <li><span>Year 2003</span> was certified ISO 9001 : 2000</li>
                    <li><span>Year 2004</span> received ISO 14001 : 2004 certification.</li>
                    <li><span>Year 2008</span> was certified for TIS 812-2548 standard.</li>
                    <li><span>Year 2009</span> was certified ISO 9001:2008</li>
                    <li><span>Year 2012</span> was certified by OSHAS 18001 : 2007</li>
                    <li><span>Year 2017</span> received ISO 9001:2015 certification.</li>
                    <li><span>Year 2018</span> was certified for ISO 14001:2015 standard.</li>
                    <li><span>Year 2019</span> was certified for ISO 45001 : 2018</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="footer-cer"> @include('frontend.inc_footer')</div>

<script>
	$( ".menubar > li:nth-child(2) > a" ).addClass( "here" );
</script>


		
</div>

</body>

</html>
