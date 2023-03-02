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
            <div class="title-banner">Production process</div>
            <img  src="/frontend/images/banner-production.webp" alt="">
        </figure>
    </div>
</section>

<section class="row">
    <div class="col-12 wrap-manufac wow fadeInDown">
        <div class="container">
            <div class="text-center">
                <div class="title-manufac">Manufacturing</div>
                <div class="topic-about">Production <div>process</div></div>
            </div>
        </div>
        <div class="wrap-production">
            <div class="item-production">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7 wow fadeInLeft">
                            <figure><img  src="/frontend/images/production_03.jpg" alt=""></figure>
                        </div>
                        <div class="col-12 col-lg-5 wow fadeInRight">
                            <div class="desc-production">
                                <div>
                                    <div class="topic-products">ระบบการผลิต PDS</div>
                                    <p>
                                    The Production of Daikin System (PDS) has been implemented ,in order to reduce wastage in the production process and enhance product quality as well as reduce production costs by finding the point there is a wasteland and continue to improve It has also expanded the use of PDS system throughout the organization to allow everyone to participate and create mechanisms for development and improvement of work in all departments.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-production">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7 wow fadeInLeft">
                            <figure><img  src="/frontend/images/production_07.jpg" alt=""></figure>
                        </div>
                        <div class="col-12 col-lg-5 wow fadeInRight">
                            <div class="desc-production">
                                <div>
                                    <div class="topic-products">เทคโนโลยีการผลิต</div>
                                    <p>
                                    DCI is enhancing improve the manufacturing through the use of automated production techniques and the deployment of advanced technologies. which includes robotics intelligent controller and real-time data analysis to optimize product quality, consistency and yield in a safe environment
                                    </p>
                                    <a href="production-detail.php" class="btn-default btn-blue">more detail <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-production">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7 wow fadeInLeft">
                            <figure><img  src="/frontend/images/Quality-Control_10.jpg" alt=""></figure>
                        </div>
                        <div class="col-12 col-lg-5 wow fadeInRight">
                            <div class="desc-production">
                                <div>
                                    <div class="topic-products">การพัฒนาทักษะพนักงานฝ่ายผลิต</div>
                                    <p>
                                    DCI is committed to continuously improving the knowledge and skills of employees. Especially in the PDS part, which is a basic course for everyone and additional skills courses, including maintenance, brazing, welding, soldering for high speed production and automated production lines. To improve the quality of products for customers to get the highest satisfaction.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@include('frontend.inc_footer')

<script>
	$( ".menubar > li:nth-child(3) > a" ).addClass( "here" );
</script>


		
</div>

</body>

</html>
