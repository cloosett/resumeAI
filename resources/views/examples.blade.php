@extends('layouts.layout')

@section('content')
    <!-- Portfolio Single-->
    <section class="module">
        <div class="container">
            <div class="row mb-50">
                <div class="col-md-12">
                    <div class="row gallery-group">
                        <div class="col-md-4 m-b-30 m-b-30"><a href="https://offsetcode.com/themes/boomerang/1.3.1/assets/images/portfolio/6.jpg" title="Title"><img src="{{ asset('image/6_002.jpg') }}" alt=""></a></div>
                        <div class="col-md-4 m-b-30"><a href="https://offsetcode.com/themes/boomerang/1.3.1/assets/images/portfolio/5.jpg" title="Title"><img src="{{ asset('image/5_002.jpg') }}" alt=""></a></div>
                        <div class="col-md-4 m-b-30"><a href="https://offsetcode.com/themes/boomerang/1.3.1/assets/images/portfolio/4.jpg" title="Title"><img src="{{ asset('image/4.jpg') }}" alt=""></a></div>
                        <div class="col-md-4 m-b-30"><a href="https://offsetcode.com/themes/boomerang/1.3.1/assets/images/portfolio/3.jpg" title="Title"><img src="{{ asset('image/3.jpg') }}" alt=""></a></div>
                        <div class="col-md-4 m-b-30"><a href="https://offsetcode.com/themes/boomerang/1.3.1/assets/images/portfolio/2.jpg" title="Title"><img src="{{ asset('image/2.jpg') }}" alt=""></a></div>
                        <div class="col-md-4 m-b-30"><a href="https://offsetcode.com/themes/boomerang/1.3.1/assets/images/portfolio/1.jpg" title="Title"><img src="{{ asset('image/1.jpg') }}" alt=""></a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-my="50px" style="margin-top: 50px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-list">
                        <li><span class="info-list-title">Date:</span><span>10 October, 2018</span></li>
                        <li><span class="info-list-title">Client:</span><span><a href="#">2theme Team</a></span></li>
                        <li><span class="info-list-title">Category:</span><span><a href="#">Development</a></span></li>
                        <li><span class="info-list-title">Demo:</span><span><a href="#">2the.me</a></span></li>
                    </div>
                    <hr class="m-t-30 m-b-30">
                    <div class="info-list m-b-sm-60">
                        <li><span class="info-list-title">Share:</span><span>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul></span></li>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h6 class="single-portfolio-title">Spacé Decor</h6>
                    <p>Just then her head struck against the
                        roof of the hall in fact she was now more than nine feet high and she at
                        once took up the little golden key and hurried off to the garden door.
                        The first question of course was, how to get dry again: they had a
                        consultation about this, and after a few minutes it seemed quite natural
                        to Alice to find herself talking familiarly with them. Just then her
                        head struck against the roof of the hall in fact she was now more than
                        nine feet high and she at once took up the little golden key and hurried
                        off to the garden door.	The first question of course was, how to get
                        dry again.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Single end-->

    <!-- Related Products-->
    <section class="module divider-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 m-auto text-center">
                    <h5>You may also like:</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="space" data-my="40px" style="margin-top: 40px;"></div>
                </div>
            </div>
            <div class="row row-portfolio" data-columns="3" style="position: relative; height: 373.333px;">
                <div class="grid-sizer"></div>
                <div class="portfolio-item branding" style="position: absolute; left: 0px; top: 0px;">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-item-img"><img src="{{asset("image/1.jpg")}}" alt=""></div>
                        <div class="portfolio-item-caption">
                            <h6 class="portfolio-item-title">Solave Cleanser</h6><span class="portfolio-item-subtitle serif">Digital</span>
                        </div><a class="portfolio-item-link" href="https://offsetcode.com/themes/boomerang/1.3.1/portfolio-single-1.html"></a>
                    </div>
                </div>
                <div class="portfolio-item digital" style="position: absolute; left: 373.333px; top: 0px;">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-item-img"><img src="{{asset('image/2.jpg')}}" alt=""></div>
                        <div class="portfolio-item-caption">
                            <h6 class="portfolio-item-title">Monochrome</h6><span class="portfolio-item-subtitle serif">Branding</span>
                        </div><a class="portfolio-item-link" href="https://offsetcode.com/themes/boomerang/1.3.1/portfolio-single-1.html"></a>
                    </div>
                </div>
                <div class="portfolio-item packaging" style="position: absolute; left: 746.666px; top: 0px;">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-item-img"><img src="{{asset('image/3.jpg')}}" alt=""></div>
                        <div class="portfolio-item-caption">
                            <h6 class="portfolio-item-title">Ellie Cashman</h6><span class="portfolio-item-subtitle serif">Packaging</span>
                        </div><a class="portfolio-item-link" href="https://offsetcode.com/themes/boomerang/1.3.1/portfolio-single-1.html"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
