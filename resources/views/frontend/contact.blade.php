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
                    <div class="title-banner">contact us</div>
                    <img src="/frontend/images/banner-contact.webp" alt="">
                </figure>
            </div>
        </section>

        <section class="row">
            <div class="col-12 bg-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-5 wow fadeInLeft">
                            <div class="box-contactinfo">
                                <div class="topic-contact">
                                    <span>Daikin</span>
                                    Compressor Industries
                                </div>
                                <address>7/202 Moo.6 T.Mabyangporn A.Pluakdaeng, Rayong 21140</address>
                                <div class="contact-info">
                                    <div><i class="bi bi-telephone"></i> Tel. 66(0)-3865-0060 </div>
                                    <div><i class="bi bi-printer"></i> Fax. 66(0)-3865-0061</div>
                                    <div><i class="bi bi-envelope"></i> e-mail: contact@dci.co.th</div>
                                </div>
                                <div class="contact-social">
                                    <a href="" target="_blank"><img src="/frontend/images/icon-fb.svg" alt=""></a>
                                    <a href="" target="_blank"><img src="/frontend/images/icon_youtube.svg" alt=""></a>
                                    <a href="" target="_blank"><img src="/frontend/images/icon_twitter.svg" alt=""></a>
                                    <a href="" target="_blank"><img src="/frontend/images/icon-line.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 bg-contactfrm wow fadeInRight">
                            <div class="box-contactfrm">
                                <div class="topic-form"><i class="bi bi-envelope-fill"></i> Get in Touch</div>
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Name - Surname<span>*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Email<span>*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label>Topic<span>*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label>Message<span>*</span></label>
                                            <textarea name="" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <img src="/frontend/images/capcha.png" alt="">
                                        </div>
                                        <div class="col-12 col-md-6 text-end">
                                            <button class="btn-default btn-blue"><i class="bi bi-envelope"></i>
                                                send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="row">
            <div class="col-12 col-md-4 link-contact">
                <a href="">
                    <figure>
                        <span></span><img src="/frontend/images/photo-contact_02.webp" alt="">
                    </figure>
                    <div class="caption-services">
                        <div class="topic-services">coporate info</div>
                        <div class="home-descservices">
                            <div class="twolines">
                                To be a production base for air conditioner parts (Key device) of the Daikin group
                                developed into the DX-factory
                            </div>
                            <div class="txt-readmore">company profile</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 link-contact">
                <a href="">
                    <figure>
                        <span></span><img src="/frontend/images/photo-contact_04.webp" alt="">
                    </figure>
                    <div class="caption-services">
                        <div class="topic-services">Careers</div>
                        <div class="home-descservices">
                            <div class="twolines">
                                We thrive when our teams are made up of people from different backgrounds, cultures,
                                genders, education, training, interests, and skills.
                            </div>
                            <div class="txt-readmore">Work with us</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 link-contact">
                <a href="">
                    <figure>
                        <span></span><img src="/frontend/images/photo-contact_06.webp" alt="">
                    </figure>
                    <div class="caption-services">
                        <div class="topic-services">Daikin plant tour</div>
                        <div class="home-descservices">
                            <div class="twolines">
                                Accelerating Our 3 Structures Of Collaborative Innovation, Let Us Win In This Era Of
                                Change
                            </div>
                            <div class="txt-readmore">plant tour</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section class="row wow fadeInDown">
            <div class="col-12 googlemaps">
                <div class="ratio ratio-21x9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9034029452064!2d101.10929161567665!3d12.978029818246583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102ddadb56e365d%3A0x39babd50b1d918c2!2z4LmE4LiU4LiB4Li04LmJ4LiZIOC4hOC4reC4oeC5gOC4nuC4o-C4quC5gOC4i-C4reC4o-C5jCDguK3guLTguJnguJTguLHguKrguJfguKPguLXguKrguYw!5e0!3m2!1sth!2sus!4v1674828111441!5m2!1sth!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        @include('frontend.inc_footer')

        <script>
            $(".menubar > li:nth-child(9) > a").addClass("here");

        </script>


    </div>

</body>

</html>
