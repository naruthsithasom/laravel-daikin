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
            <div class="title-banner">Products and TEchnology</div>
            <img src="/frontend/images/banner-products.webp" alt="">
        </figure>
    </div>
</section>

<section class="row">
    <div class="col-12 item-products wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="topic-products">Compressor Technology YC model</div>
                    <div class="products-content">
                        <p><img src="/frontend/images/products_03.jpg" alt=""></p>
                        <p>
                        Daikin's compressor is a unique Mechanism series design called Swing compressor Which has better points than the Rotary type, such as High Efficiency, High Reliability For compressor motors, high efficiency magnets are used. which applies to inverter type air conditioners that save electricity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 item-products wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="topic-products">Compressor Technology SCR model</div>
                    <div class="products-content">
                        <p><img src="/frontend/images/products_06.png" alt=""></p>
                        <p>
                        Daikin’s Scroll Compressor feature a more efficient and quiet operation than other regular compressors due to their high-pressure dome construction that helps minimise heat loss and the use of high-pressure lubrication oil. This will also result in noise level reduction and efficiency improvement
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 item-products wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="topic-products">ODM Technology</div>
                    <div class="products-content">
                        <p><img src="/frontend/images/products_09.jpg" alt=""></p>
                        <p>
                        Daikin System Indoor & Outdoor Units are equipped with a high efficiency, variable speed DC Fan Motor. By using high-power magnets instead of the induction magnets of conventional AC motors. Daikin DC motors are able to deliver significantly higher motor efficiency. The motor control system also has a range of fan speeds.
                        </p>
                        <p>
                        The design is different from the general Fan Motor in that the rotor is designed outside the stator to increase efficiency. This makes it possible to have a smaller size and save energy on electricity bills.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 item-products wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="topic-products">Cooling Only & High Speed</div>
                    <div class="products-content">
                        <p><img src="/frontend/images/products_12.png" alt=""></p>
                        <p>
                        Daikin has developed a new technology by increasing the operating speed of the compressor from 100s-1 to 140 s-1 (1.4 times), thereby reducing the size of the compressor (23-35%) and achieving high efficiency.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.inc_footer')

<script>
	$( ".menubar > li:nth-child(4) > a" ).addClass( "here" );
</script>


		
</div>

</body>

</html>
