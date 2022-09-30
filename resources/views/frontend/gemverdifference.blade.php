@extends('frontend.layout.layout')

@section('content')

        <div class="background-sub-slider">
            <div class="">
                <!-- <img src="{{ asset('frontend/image/about_us.png') }}" alt=""> -->
                <div class="about_us_background">
                    <div class="sub_heading mb-lg-3">Gemver Difference</div>
                    <div class="about_us_link">
                        <a href="{{ URL('/') }}">home</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14" fill="none" class="mx-2">
                            <path d="M4.30029 4.32471L6.97613 7L4.30029 9.67529L5.44971 10.8247L9.27388 7L5.44971 3.17529L4.30029 4.32471Z" fill="white"/>
                            <path d="M8.30029 4.32471L10.9761 7L8.30029 9.67529L9.44971 10.8247L13.2739 7L9.44971 3.17529L8.30029 4.32471Z" fill="white"/>
                        </svg>
                        <a href="#">Gemver Difference</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container about_us_product mt-2 mt-md-5">
        @if($Infopage->first_section_contant != '')
        <div class="row gemver_difference_us_product_row align-items-center px-0 px-md-3">
            <div class="col-md-6 order-2 order-md-1">
                <div class="about_us_product_padding">
                    <h3 class="h3-heading text-center text-md-start">Lab Grown Diamond</h3>
                    <p class="customer_stories_paragraph  text-center text-md-start">{!! $Infopage->first_section_contant !!}</p>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div class="about_us_img">
                    <img src="{{ url('images/aboutus/'. $Infopage->first_section_image)}}" alt="">
                </div>
            </div>
        </div>
        @endif
        @if($Infopage->second_section_contant != '')
        <div class="row gemver_difference_us_product_row mt-4 align-items-center px-0 px-md-3">
            <div class="col-md-6">
                <div class="about_us_img">
                    <img src="{{ url('images/aboutus/'. $Infopage->second_section_image)}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_us_product_padding">
                    <h3 class="h3-heading text-center text-md-start">Eco Friendly</h3>
                    <p class="customer_stories_paragraph  text-center text-md-start">{!! $Infopage->first_section_contant !!}</p>
                </div>
            </div>
        </div>
        @endif
        <div class="row gemver_difference_us_product_row align-items-center px-0 px-md-3">
            <div class="col-md-6 order-2 order-md-1">
                <div class="about_us_product_padding">
                    <h3 class="h3-heading text-center text-md-start">Hand Made Jewellry</h3>
                    <p class="customer_stories_paragraph  text-center text-md-start">{!! $Infopage->first_section_contant !!}</p>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div class="about_us_img">
                    <img src="{{ url('images/aboutus/'. $Infopage->first_section_image)}}" alt="">
                </div>
            </div>
        </div>

        <div class="row gemver_difference_us_product_row mt-4 align-items-center px-0 px-md-3">
            <div class="col-md-6">
                <div class="about_us_img">
                    <img src="{{ url('images/aboutus/'. $Infopage->second_section_image)}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_us_product_padding">
                    <h3 class="h3-heading text-center text-md-start">100% Certified Diamonds</h3>
                    <p class="customer_stories_paragraph  text-center text-md-start">{!! $Infopage->first_section_contant !!}</p>
                </div>
            </div>
        </div>
       
    </div>
    @endsection



 