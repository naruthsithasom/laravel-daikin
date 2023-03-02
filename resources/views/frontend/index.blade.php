<!doctype html>
<html>

<head>
	<?php// require('inc_head.php'); ?>
  @include('frontend.inc_head')
</head>

<body>

<div class="container-fluid">
	
<?php// require('inc_menu.php'); ?>
@include('frontend.inc_menu')
<?php 
// if(session('language')=='en'){
//   $index= array(
//    'banner_text2' => "Behind the scenes of many people's happiness is our dedication…. Thai Yazaki Group",
//    'banner_text1' => 'banner_text1',
//    'banner_text3' => 'One for All, All for One
// ',
//    'banner_text4' => 'banner_text1',
//    'banner_text5' => '"A Corporation in Step with the World
// A Corporation Needed by Society"
// ',
//    'banner_text6' => 'banner_text1',
//    'body' => 'Thai Yazaki Group 
// Founded in 1962, more than 50 years of experience in the industry as a leading supplier of power lines, wiring electrical systems and parts for the automotive industry in Thailand, our main focus is to provide leading engineering products, with high reliability, and quality service, while meeting our individual customer specifications and requirements.
// ',
//   );
// }else{
//   $index= array(
//       'banner_text2' => "เบื้องหลังความสุขของผู้คนมากมายคือ ความตั้งใจของเรา บริษัทเครือไทยยาซากิ",
//       'banner_text1' => 'banner_text1',
//       'banner_text3' => 'One for All, All for One
// ',
//       'banner_text4' => 'banner_text1',
//       'banner_text5' => '"บริษัทฯ จะก้าวเดินไปพร้อมกับโลก และเราจะเป็นในสิ่งที่สังคมต้องการ"
// ',
//       'banner_text6' => 'banner_text1',
//       'body' => 'บริษัทเครือไทยยาซากิ
// บริษัทเครือไทยยาซากิก่อตั้งขึ้นเมื่อปี พ.ศ. 2505 ด้วยประสบการณ์ยาวนานกว่า 50 ปี ทำให้เราเป็นผู้นำในด้านการผลิตและจัดจำหน่ายสายไฟ ชุดสายไฟในรถยนต์ และชิ้นส่วนสำหรับอุตสาหกรรมยานยนต์ในประเทศไทย เรามุ่งเน้นในการนำเสนอผลิตภัณฑ์เชิงวิศวกรรมขั้นสูง ที่สามารถวางใจในด้านคุณภาพและบริการ ที่สามารถตอบสนองต่อข้อกำหนดและความต้องการของลูกค้า
// ',
//   );
// }
// <li> <a href="/change_laguage_show/th"><img src="https://img.icons8.com/color/20/000000/thailand-circular.png" /> &nbsp; TH </a></li>
// <li> <a href="/change_laguage_show/en"><img src="https://img.icons8.com/color/20/000000/usa-circular.png" /> &nbsp; EN</li></a>
// ?>
    <!-- banner images -->
    <section class="row">
        <div class="col-12 wrapbanner">
            <div class="banner-boxleft wow fadeInLeft"></div><div class="banner-home wow fadeInDown">
                <div class="owl-bannerslide owl-carousel owl-theme">
                    <div class="items">
                        <figure><img src="/frontend/images/banner01.jpg" alt=""></figure>
                    </div>
                    <div class="items">
                        <figure><img src="/frontend/images/banner01.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="banner-boxright wow fadeInRight">
                <div class="txt-follow">
                    <div class="social-top">
                        <a href="" target="_blank"><img src="/frontend/images/icon-line.svg" alt=""></a>
                        <a href="" target="_blank"><img src="/frontend/images/icon-fb.svg" alt=""></a>
                    </div>
                    <div class="txtsocial">Follow us</div>
                 </div>
            </div>
        </div>
    </section>

    <!-- banner video, youtube -->
     <!--<section class="row">
        <div class="col-12 wrapbanner">
            <div class="banner-boxleft wow fadeInLeft">
                <div class="txt-bannerwelcome">
                    <div class="txt-welcome">welcome to Daikin</div>
                </div>
            </div><div class="banner-home wow fadeInDown">

               
                <div class="vdo-banner">
                    <div class="video-responsive">
                        <video class="video" muted="muted" loop="loop" autoplay="autoplay">
                            <source src="/frontend/vdo/OEM.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                        <canvas class="canvas"></canvas>
                    </div>
                </div> 

                
                <div class="wrap_video">
                    <div id="player"></div>
                </div>
                
            </div>
            <div class="banner-boxright wow fadeInRight">
                <div class="txt-follow">
                    <div class="social-top">
                        <a href="" target="_blank"><img src="/frontend/images/icon-line.svg" alt=""></a>
                        <a href="" target="_blank"><img src="/frontend/images/icon-fb.svg" alt=""></a>
                    </div>
                    <div class="txtsocial">Follow us</div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="row">
        <div class="col-12 wrap-welcome">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 wow fadeInDown">
                        <div class="topic-welcome">
                            <span>Daikin</span>
                            Compressor Industries
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 wow fadeInDown">
                        <div class="desc-welcome">
                            <span>Daikin Compressor Industries Ltd.</span> founded on February 9, 2001 started operation in january 2002.
                            Capital 3.3 Billon Baht (invested 100% by Daikin Industries Ltd.)
                        </div>
                        <div class="row wrap-iconwelcome">
                            <div class="col-6 col-md-3">
                                <a href="vision-mission.php">
                                    <img src="/frontend/images/icon-w01.svg" alt="">
                                    Vision & Mission
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="history.php">
                                    <img src="/frontend/images/icon-w02.svg" alt="">
                                    History
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="certificate.php">
                                    <img src="/frontend/images/icon-w03.svg" alt="">
                                    Certification
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="policyDCI.php">
                                    <img src="/frontend/images/icon-w04.svg" alt="">
                                    Policy DCI
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp">
                        <div class="photo-company"><img src="/frontend/images/company_03.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="row">
    <div class="col-12 home-menufac wow fadeInDown">
        <div class="bg-homefac">
            <img src="/frontend/images/manufac-home_02.webp" alt="">
            <img src="/frontend/images/manufac-home_04.webp" alt="">
            <!-- <img src="/frontend/images/manufac-home_06.webp" alt="">
            <img src="/frontend/images/manufac-home_08.webp" alt=""> -->
        </div>
        <div class="container content-mfachome">
            <div class="row">
                <div class="col-12 col-xl-9 col-xxl-8">
                    <div class="topic-home"> Manufacturing </div>
                    <div class="topic-mfachome">
                    Revolutionary "Swing Compressor" and "Scroll Compressor" Design
                    </div>
                    <p>
                    Daikin Compressor Industries Ltd. produces modern-design swing compressors for use in residential air conditioners and scroll compressor for use in commercial air conditioners.
                    </p>
                    <div class="btn-menufac">
                        <a href="">Production Process</a>
                        <a href="quality-control.php">Quality Control</a>
                        <!-- <a href="">Welding</a>
                        <a href="">Measuring</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrap-homeproduct">
    <div class="container home-product wow fadeInDown">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="topic-home">
                    Product & <div>Technology</div>
                </div>
                <div class="desc-topicphome">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                <a href="#" class="btn-default btn-blue home-mproduct">view all <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-12 col-md-8">
                <div class="owl-homeproduct owl-carousel owl-theme">
                    <div class="items">
                        <a href="" class="item-phome">
                            <figure><img src="/frontend/images/cover-typeproduct_03.jpg" alt=""></figure>
                            <div class="name-product">Room Air</div>
                            <div class="subtopic-product">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </a>
                    </div>
                    <div class="items">
                        <a href="" class="item-phome">
                            <figure><img src="/frontend/images/cover-typeproduct_05.jpg" alt=""></figure>
                            <div class="name-product">Super Multi</div>
                            <div class="subtopic-product">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </a>
                    </div>
                    <div class="items">
                        <a href="" class="item-phome">
                            <figure><img src="/frontend/images/air-purifier_0.jpeg" alt=""></figure>
                            <div class="name-product">Air Purifier</div>
                            <div class="subtopic-product">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </a>
                    </div>
                </div>
                <a href="#" class="btn-default btn-blue home-mproduct-show">view all <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="row wrap-homenews">
    <div class="col-12 col-lg-5 box-hilightnews">
        <div class="wrap-hilightnews">
            <div class="topic-homenews">Highlights</div>
            <div class="owl-hihlightnews owl-carousel owl-theme">
                <div class="items">
                    <a href="news-detail.php" class="item-hihlightnews">
                        <figure><img src="/frontend/images/air-purifier_0.jpeg" alt=""></figure>
                        <div class="title-news">Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        <div class="subtopic-news">Daikin Industries (Thailand) Co., Ltd. (hereinafter referred to as the “Company”) respects the privacy rights of the Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    </a>
                </div>
                <div class="items">
                    <a href="news-detail.php" class="item-hihlightnews">
                        <figure><img src="/frontend/images/501965.jpeg" alt=""></figure>
                        <div class="title-news">Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        <div class="subtopic-news">Daikin Industries (Thailand) Co., Ltd. (hereinafter referred to as the “Company”) respects the privacy rights of the Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    </a>
                </div>
                <div class="items">
                    <a href="news-detail.php" class="item-hihlightnews">
                        <figure><img src="/frontend/images/DAIKIN_0005-1024x683.jpeg" alt=""></figure>
                        <div class="title-news">Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        <div class="subtopic-news">Daikin Industries (Thailand) Co., Ltd. (hereinafter referred to as the “Company”) respects the privacy rights of the Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-7 bg-homenews">
        <div class="box-homenews">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="topic-homenews">news <span>& Activities</span> </div>
                </div>
                <div class="col-12 col-md-5 text-end">
                    <a href="news.php" class="btn-default btn-blue btnnews-hide">view all <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a href="news-detail.php" class="item-listnews">
                        <figure><img src="/frontend/images/Daikin.png" alt=""></figure>
                        <div class="news-cpad">
                            <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                            <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="news-detail.php" class="item-listnews">
                        <figure><img src="/frontend/images/20931_220531145253.jpeg" alt=""></figure>
                        <div class="news-cpad">
                            <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                            <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="news-detail.php" class="item-listnews">
                        <figure><img src="/frontend/images/R3_07906-1024x683.jpeg" alt=""></figure>
                        <div class="news-cpad">
                            <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                            <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="news-detail.php" class="item-listnews">
                        <figure><img src="/frontend/images/Rayong-branch-opening2.jpeg" alt=""></figure>
                        <div class="news-cpad">
                            <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                            <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="news-detail.php" class="item-listnews">
                        <figure><img src="/frontend/images/Img-0175.jpeg" alt=""></figure>
                        <div class="news-cpad">
                            <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                            <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="news-detail.php" class="item-listnews">
                        <figure><img src="/frontend/images/DAIKIN_0064-1024x683.jpeg" alt=""></figure>
                        <div class="news-cpad">
                            <div class="news-date"><i class="bi bi-calendar3"></i> 05.01.2022</div>
                            <div class="title-listnews">Privacy Notice for the Visitors, the Supplier or its representative, the Participants Privacy Notice for the Visitors, the Supplier or its representative, the Participants</div>
                        </div>
                    </a>
                </div>
                <div class="col-12 text-center">
                    <a href="news.php" class="btn-default btn-blue btnnews-show">view all <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row home-quicklink">
    <div class="col-12 col-md-4 item-quicklink wow fadeInDown">
        <a href="environment.php">
            <figure><img src="/frontend/images/photohome_02.webp" alt=""></figure>
            <div><img src="/frontend/images/icon-sustain.svg" alt=""> Sustainability</div>
        </a>
    </div>
    <div class="col-12 col-md-4 item-quicklink wow fadeInDown">
        <a href="career.php">
            <figure><img src="/frontend/images/photohome_03.webp" alt=""></figure>
            <div><img src="/frontend/images/icon-career.svg" alt=""> careers</div>
        </a>
    </div>
    <div class="col-12 col-md-4 item-quicklink wow fadeInDown">
        <a href="planttour.php">
            <figure><img src="/frontend/images/photohome_04.webp" alt=""></figure>
            <div><img src="/frontend/images/icon-plantour.svg" alt=""> plant tour</div>
        </a>
    </div>
</section>

	
<?php// require('inc_footer.php'); ?>
@include('frontend.inc_footer')

<script>
    
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;

  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '100%',
      width: '100%',
      videoId: 'pc1TCcDClXA',
      loop: true,
      playerVars: {'autoplay': 1, 'controls': 0, 'loop': 1, 'mute': 1,},
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    event.target.playVideo();
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;

  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.ENDED) {
      player.seekTo(0);
    }
  }
</script>

		
</div>

</body>

</html>
