@extends('frontend.layout.layout')

@section('content')

<div class="engagement_bg_slider">
    <img src="{{ asset('frontend/image/labgrowndiamond.png') }}" alt="">
    <div class="container engagement_text_part">
        <div class="engagement_text_part">
            <h1 class="heading-h1 engagement_heading text-start mb-3">Lab Grown Diamonds</h1>
            <p class="engagement_paragraph mb-4">
                Explore our extensive collection of 
                loose diamond at your fingertips.
            </p>
            <div class="engagement_button">
                <button class="engagement_start_diamond">Lab Diamond</button>
            </div>
        </div>
    </div>
</div>


<div class="">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0 design_engagemnt_image lab-diamond-img">
                    <img src="{{ asset('frontend/image/design_your_engagement.png') }}" alt="">
                </div> 
                <div class="col-md-6">
                    <div class="choose_your_setting_box text-center">
                        <div class="">
                            <div class="custom_made_heading text-center mb-2 mb-xl-3">
                                Design Your Engagement Ring
                            </div>
                            <p class="custom_engagement_paragrph">
                                Customise your engagement ring and choose from our extensive range of ring styles, diamonds, and precious metals of your choice.
                            </p>
                            <div class="engagement_button mt-3 mt-sm-0 mt-md-3 mt-xl-4 text-start text-sm-center">
                                <button class="engagement_start_diamond d-block d-sm-inline-block mx-auto">Start with Diamond</button>
                                <button class="engagement_start_setting ms-lg-3 mt-3 d-block d-sm-inline-block mx-auto">Start with setting</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop_dimond_by_shape explore_diamonds_section mt-3 ">
        <div class="container">
            <div class="mb-4 text-center ">
                <div class="choose_your_setting_heading text-center mb-2 mb-md-3">Explore Diamonds By Shape</div>
                <div class="choose_your_setting_paragraph text-center mb-3 mb-md-4 mb-xl-5">
                    Whatever the occasion, we've got a beatiful piece of jewellery for you.
                </div>
            </div>
            <div>
                <div class="owl-carousel owl-theme shop-dimond-by-shape-slider explore_diamonds_section">
                    
                    <div class="item">
                        <a href="{{ url('/lab-diamond/round') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/round.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/oval') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/oval.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/princess') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/princess.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/cushion') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/cushion.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/marquise') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/marquise.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/pear') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/pear.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/radiant') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/radiant.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/heart') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/heart.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/emerald') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/emerald.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/lab-diamond/asscher') }}" class="shop-dimond-by-shape-img">
                            <img src="{{ asset('frontend/image/asscher.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="fancy_color_diamonds shop_dimond_by_shape px-0">
    <div class="container">
        <div class="choose_your_setting_heading text-center mb-2 mb-md-5">Fancy Colour Diamonds</div>
        <div class="owl-carousel owl-theme fancy-color-diamonds">
            <div class="item">
                <img src="{{ asset('frontend/image/fancy-color-diamond-yellow.png') }}" alt="" class="fancy-color-duiamonds-img">
                <div class="fancy-color-heading mt-3">
                    Yellow
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('frontend/image/fancy-color-diamond-pink.png') }}" alt="" class="fancy-color-duiamonds-img">
                <div class="fancy-color-heading mt-3">
                    Pink
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('frontend/image/fancy-color-diamond-purple.png') }}" alt="" class="fancy-color-duiamonds-img">
                <div class="fancy-color-heading mt-3">
                    Purple
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('frontend/image/fancy-color-diamond-light-blue.png') }}" alt="" class="fancy-color-duiamonds-img">
                <div class="fancy-color-heading mt-3">
                    Blue
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="smiling_gemver_banner shop_dimond_by_shape smiling_gemver_banner_section">
      <div class="container">
      <div class="choose_your_setting_heading text-center mb-4 mb-md-5">Smiling  Gemver Difference</div>
        <!-- <h2 class="mb-4 mb-md-5 heading-h2 text-center smiling_gemver_heading">Smiling  Gemver Difference</h2> -->
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                   <div class="smiling_box_icon mb-2 mb-mb-3">
                        <img src="{{ asset('frontend/image/smiling_1.png') }}" alt=""> 
                   </div>
                    <div class="smiling_box_heading mb-2 mb-mb-3">
                        {{ $SmilingDifference[0]->title }}   
                    </div>
                    <div class="smiling_box_paragraph">
                        {{ $SmilingDifference[0]->shotline }}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                   <div class="smiling_box_icon mb-2 mb-mb-3">
                        <img src="{{ asset('frontend/image/smiling_2.png') }}" alt=""> 
                   </div>
                    <div class="smiling_box_heading mb-2 mb-mb-3">
                    {{ $SmilingDifference[1]->title }}
                    </div>
                    <div class="smiling_box_paragraph">
                    {{ $SmilingDifference[1]->shotline }}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                   <div class="smiling_box_icon mb-2 mb-mb-3">
                        <img src="{{ asset('frontend/image/smiling_3.png') }}" alt=""> 
                   </div>
                    <div class="smiling_box_heading mb-2 mb-mb-3">
                    {{ $SmilingDifference[2]->title }}
                    </div>
                    <div class="smiling_box_paragraph">
                    {{ $SmilingDifference[2]->shotline }}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                   <div class="smiling_box_icon mb-2 mb-mb-3">
                        <img src="{{ asset('frontend/image/smiling_4.png') }}" alt=""> 
                   </div>
                    <div class="smiling_box_heading mb-2 mb-mb-3">
                    {{ $SmilingDifference[3]->title }} 
                    </div>
                    <div class="smiling_box_paragraph">
                    {{ $SmilingDifference[3]->shotline }}
                    </div>
                </div>
                
            </div>
      </div>
      
    </div>


    <div class="container mb-5 mb-md-5 pb-md-5 mt-5">
    <div class="row">
        <div class="col-md-6 order-2 order-md-1">
            <div class="choose_your_setting_box text-center">
                <div class="">
                    <div class="custom_made_heading text-center mb-2 mb-xl-3">
                        Lab Grown Diamonds
                    </div>
                    <p class="custom_engagement_paragrph">
                        Our Lab Grown Diamonds and Earth Natural Diamonds offer identical sparkle and chemical compositions.
                    </p>
                    <div class="engagement_button">
                        <button class="engagement_start_diamond mt-3 mt-xl-4">Explore Lab grown</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 order-1 order-md-2 mb-3 mb-md-0 lab-diamond-img">
            <img src="{{ asset('frontend/image/labgrowndiamonds.png') }}" alt="">
        </div>  
    </div>
</div>

@endsection