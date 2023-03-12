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
                    <div class="title-banner">@lang('phrase.vmSection1.text1')</div>
                    <img src="/frontend/images/banner-vision.webp" alt="">
                </figure>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-12 wow fadeInDown">
                    <div class="box-vision">
                        <div class="topic-about">@lang('phrase.vmSection2.text1')</div>
                        <div class="txt-vision">@lang('phrase.vmSection2.text2')</div>
                        <p>@lang('phrase.vmSection2.text3')</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="row">
            <div class="col-12 photo-vision">
                <img src="/frontend/images/photo-vision.webp" alt="">
            </div>
        </section>
        <section class="row bg-vision wow fadeInDown">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="icon-vision01 wow fadeInDown">
                                <img src="/frontend/images/icon-vision_08.png" alt="">
                                <div>@lang('phrase.vmSection3.text1')
                                </div>
                            </div>
                            <div class="icon-vision02 wow fadeInDown">
                                <img src="/frontend/images/icon-vision_11.png" alt="">
                                <div>@lang('phrase.vmSection3.text2')
                                </div>
                            </div>
                            <div class="icon-vision03 wow fadeInDown">
                                <img src="/frontend/images/icon-vision_05.png" alt="">
                                <div>@lang('phrase.vmSection3.text3')</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="row">
            <div class="col-12 bg-mission wow fadeInDown">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="topic-about">@lang('phrase.vmSection4.text1')</div>
                            <ul>
                                <li>@lang('phrase.vmSection4.text2')</li>
                                <li>@lang('phrase.vmSection4.text3')</li>
                                <li>@lang('phrase.vmSection4.text4')</li>
                                <li>@lang('phrase.vmSection4.text5')</li>
                                <li>@lang('phrase.vmSection4.text6')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="row wrap-strategy wow fadeInDown">
            <div class="col-12">
                <div class="img-strategy">
                    <figure><img src="/frontend/images/photo-stategy_02.jpg" alt=""></figure>
                </div>
                <div class="desc-strategy">
                    <div class="list-strategy">
                        <div class="topic-about">@lang('phrase.vmSection5.text1')
                        </div>
                        <ul>
                            <li>@lang("phrase.vmSection5.text2")</li>
                            <li>@lang("phrase.vmSection5.text3")</li>
                            <li>@lang("phrase.vmSection5.text4")</li>
                            <li>@lang("phrase.vmSection5.text5")</li>
                            <li>@lang("phrase.vmSection5.text6")</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="row">
            <div class="col-12 wrap-strategy2">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 wow fadeInLeft">
                            <div class="photo-piechart"><img src="/frontend/images/piechart.png" alt=""></div>
                        </div>
                        <div class="col-12 col-md-8 wow fadeInRight">
                            <div class="box-charstrategy">
                                <div class="item-charstrategy">
                                    <div class="txt-charstrategy char-green">s</div>
                                    <div class="desc-charstrategy">
                                        <div class="char-green">@lang("phrase.vmSection6_1.header1")</div>
                                        @lang("phrase.vmSection6_2.text1")
                                    </div>
                                </div>
                                <div class="item-charstrategy">
                                    <div class="txt-charstrategy char-green2">Q</div>
                                    <div class="desc-charstrategy">
                                        <div class="char-green2">@lang("phrase.vmSection6_1.header2")</div>
                                        @lang("phrase.vmSection6_2.text2")
                                    </div>
                                </div>
                                <div class="item-charstrategy">
                                    <div class="txt-charstrategy char-purple">c</div>
                                    <div class="desc-charstrategy">
                                        <div class="char-purple">@lang("phrase.vmSection6_1.header3")</div>
                                        @lang("phrase.vmSection6_2.text3")
                                    </div>
                                </div>
                                <div class="item-charstrategy">
                                    <div class="txt-charstrategy char-green3">d</div>
                                    <div class="desc-charstrategy">
                                        <div class="char-green3">@lang("phrase.vmSection6_1.header4")</div>
                                        @lang("phrase.vmSection6_2.text4")
                                    </div>
                                </div>
                                <div class="item-charstrategy">
                                    <div class="txt-charstrategy char-green4">e</div>
                                    <div class="desc-charstrategy">
                                        <div class="char-green4">@lang("phrase.vmSection6_1.header5")</div>
                                        @lang("phrase.vmSection6_2.text5")
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
            $(".menubar > li:nth-child(2) > a").addClass("here");

        </script>



    </div>

</body>

</html>
