@extends('frontend.layout.layout')

@section('content')

<div class="engagement_bg_slider">
    <img src="{{ asset('frontend/image/custommadejewellery.png') }}" alt="">
    <div class="container engagement_text_part">
        <div class="engagement_text_part">
            <h1 class="heading-h1 engagement_heading text-start mb-3">Custom-Made Jewellery</h1>
            <p class="engagement_paragraph mb-4">
                Design your ideal jewellery. At Gemver we offer jewellery customisation services to help bring your idea to life.
            </p>
        </div>
    </div>
</div>


    <div class="my-3 mb-xl-4 mt-5 pt-4"> 
        <div class="container mb-xl-5 text-center">
            <div class="row">
                <div class="col-md-6 ps-md-0 order-2 order-md-1 pe-md-0">
                    <div class="choose_your_setting_box text-center">
                        <div class="">
                            <div class="custom_made_heading text-center mb-2 mb-xl-3">
                                Create your own Ring 
                            </div>
                            <p class="custom_engagement_paragrph mb-4">
                                Classic, opulent, or delicate - regardless of the occasion, we have the perfect ring to complement every look.
                            </p>
                            <div class="engagement_button text-center">
                                <button class="engagement_start_diamond d-block mx-auto mb-3">Start with Diamond</button>
                                <button class="engagement_start_setting d-block mx-auto">Start with setting</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 design_engagemnt_image lab-diamond-img pe-md-0 order-1 order-md-2 ps-md-0">
                    <img src="{{ asset('frontend/image/create-ring.png') }}" alt="">
                </div> 
            </div>
        </div>
    </div>

    <div class="shop_dimond_by_shape explore_diamonds_section mt-3 my-md-5">
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

    <div class="my-3 my-xl-4"> 
        <div class="container mb-xl-5 text-center">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0 design_engagemnt_image lab-diamond-img pe-md-0">
                    <img src="{{ asset('frontend/image/create-earrings.png') }}" alt="">
                </div> 
                <div class="col-md-6 ps-md-0">
                    <div class="choose_your_setting_box text-center">
                        <div class="">
                            <div class="custom_made_heading text-center mb-2 mb-xl-3">
                                Create your own Earrings
                            </div>
                            <p class="custom_engagement_paragrph mb-4">
                                From classic designs to creative twists, our exquisite hand-crafted earrings are a must-have fashion accessory.
                            </p>
                            <div class="engagement_button text-center">
                                <button class="engagement_start_diamond d-block mx-auto mb-3">Start with Diamond</button>
                                <button class="engagement_start_setting d-block mx-auto">Start with setting</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-3 my-xl-4"> 
        <div class="container mb-xl-5 text-center">
            <div class="row">
                <div class="col-md-6 ps-md-0 order-2 order-md-1 pe-md-0">
                    <div class="choose_your_setting_box text-center">
                        <div class="">
                            <div class="custom_made_heading text-center mb-2 mb-xl-3">
                                Create your own Pendent
                            </div>
                            <p class="custom_engagement_paragrph mb-4">
                                From classic designs to creative twists, our exquisite hand-crafted pendent are a must-have fashion accessory.
                            </p>
                            <div class="engagement_button text-center">
                                <button class="engagement_start_diamond d-block mx-auto mb-3">Start with Diamond</button>
                                <button class="engagement_start_setting d-block mx-auto">Start with setting</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 design_engagemnt_image lab-diamond-img pe-md-0 order-1 order-md-2 ps-md-0">
                    <img src="{{ asset('frontend/image/create-pendent.png') }}" alt="">
                </div> 
            </div>
        </div>
    </div>
 

  


@endsection