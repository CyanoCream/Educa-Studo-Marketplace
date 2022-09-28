@extends('akun.master')

@section('content')
    <header id="header" class="header style-04">
        <div class="header-top">
            <div class="container">
                <div class="header-top-inner">
                    <ul id="menu-top-center-menu" class="kodory-nav top-bar-menu" style="text-align-last: center">
                        <li id="menu-item-864" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-864">
                            <a class="kodory-menu-item-title" title="" href="#"><span
                                    class="icon pe-7s-map-marker"></span>Store Direction</a>
                        </li>
                        <li id="menu-item-865"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-865"><a
                                class="kodory-menu-item-title" title="" href="mailto:chlid6630@gmail.com"><span
                                    class="icon pe-7s-mail"></span>Info@child.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-wrap-stick">
            <div class="header-position">
                <div class="header-nav">
                    <div class="container">
                        <div class="header-nav-inner">
                            <div class="phone-header">
                                <div class="phone-inner">
                                    <span class="phone-icon">
                                        <span class="pe-7s-call"></span>
                                    </span>
                                    <div class="phone-number">
                                        <p>Support & Order</p>
                                        <p><a href="Https://wa.me/6285743736401" class="text-light">085743736401</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="banner-wrapper has_background">
        <img src="{{ asset('images/home 1.jpg') }}" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner container">
            <h1 class="page-title">TOP UP</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="/"><span>Home</span></a></li>
                    <li class="trail-item trail-end active"><span>Top Up</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card p-5 m-5" style="border-radius: 20px; background: rgb(160, 128, 202);
    background: linear-gradient(180deg, rgb(197, 175, 225) 0%, rgb(236, 188, 237) 53%, rgb(213, 145, 145) 100%);">
        <div class="card m-2 text-center" style="border-radius: 20px">
            <h2><strong> TOP UP </strong></h2>
        </div>
        <div class="card p-5 m-5" style="border-radius: 20px;">
            <h3 class=" text-center"><strong> ISI ULANG </strong></h3>
            <hr>
            @include('top_up.paket_data')
            @include('top_up.pulsa')
            @include('top_up.token_listrik')
        </div>
        <div class="card p-5 m-5" style="border-radius: 20px;">
            <h3 class=" text-center"><strong> PEMBAYARAN </strong></h3>
            <hr>
            @include('top_up.bpjs_kesehatan')
            @include('top_up.bpjs_ketenagakerjaan')
            @include('top_up.listrik_pascabayar')
            @include('top_up.pajak_tanah')
        </div>
    </div>
    <div class="site-main  main-container no-sidebar">
        <div class="section-006 section-001">
            <div class="container">
                <div class="kodory-slide">
                    <div class="owl-slick equal-container better-height"
                        data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:60,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                        data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;40&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;50&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;60&quot;}}]">
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.1.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper   az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.5.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper  az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.2.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.3.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.4.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
