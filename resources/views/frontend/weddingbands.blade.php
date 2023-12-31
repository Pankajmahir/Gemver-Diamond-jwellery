@extends('frontend.layout.layout')

@section('content')
<?php 
$banner_img = ($MenuPage->banner_mobile_image) ? $MenuPage->banner_mobile_image : $MenuPage->banner_image; 
?>

<div class="engagement_bg_slider" style="background: url(<?php echo 'images/aboutus/'.$banner_img; ?>);">
    <div class="container">
        <div class="engagement-slider-sub-text px-3">
            <h1 class="custom_made_heading">{{ $MenuPage->main_title }}</h1>
            <p class="custom_engagement_paragrph">
                {{ $MenuPage->main_shotline }}
            </p>
            <div class="">
                <a href="{{ $MenuPage->main_banner_category_id }}" class="engagement_start_diamond me-2 me-lg-3">{{ $MenuPage->main_first_button_name }}</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row choose_your_setting_section wedding_bands_section">
        <div class="choose_your_setting_heading text-center mb-3 mb-md-4 mb-lg-5">
            {{ $MenuPage->shapestyle_title }}
        </div>
        <div class="owl-carousel owl-theme engagement-section">
                @if($MenuPage->menupageshapestyle)
                @foreach($MenuPage->menupageshapestyle as $menupageshapestyle)
                <div class="item">
                    <div class="text-center mb-3 choose_your_setting_col" id="shopProductBtn" data-id="{{ isset($menupageshapestyle->category->slug)?$menupageshapestyle->category->slug:"" }}">
                        <img src="{{ url('images/shopstyle_image/'.$menupageshapestyle->image) }}" alt="">
                        <div class="choose_sub_heading mt-3 ">
                            {{ $menupageshapestyle->title }}
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
        </div>
    </div>
</div>

@if(isset($MenuPage->section51_title) && $MenuPage->section51_title != "")
<div class="container">
        <div class="choose_your_setting_section pt-0">
            <div class="choose_your_setting_heading text-center mb-3 mb-md-4 mb-lg-5 our_engagement_picks_part">
                {{ $MenuPage->section5_title }}
            </div> 
        <div class="row">
            <div class="col-12">
            <ul class="main-img">
                <li class="feature main-img-li">
                    <a class="fancy_color_img first_img" href="{{ url('shop/'.$MenuPage->section51_category) }}">
                        <div  class="lab_grown_diamond_heading">{{ $MenuPage->section51_title }}</div>
                        <img src="{{ url('images/aboutus/'.$MenuPage->section51_image) }}" alt="{{ $MenuPage->section51_title }}" class=" me-0">
                    </a>
                </li>
                <li class="two main-img-li">
                    <a class="fancy_color_img second_img"  href="{{ url('shop/'.$MenuPage->section52_category) }}">
                        <div class="lab_grown_diamond_heading">{{ $MenuPage->section52_title }}</div>
                        <img src="{{ url('images/aboutus/'.$MenuPage->section52_image) }}" alt="{{ $MenuPage->section52_title }}" class=" me-0">
                    </a>
                </li>
                <li class="main-img-li">
                    <a class="fancy_color_img third_img" href="{{ url('shop/'.$MenuPage->section53_category) }}">
                        <div  class="lab_grown_diamond_heading">{{ $MenuPage->section53_title }}</div>
                        <img src="{{ url('images/aboutus/'.$MenuPage->section53_image) }}" alt="{{ $MenuPage->section53_title }}" class=" me-0">
                    </a>
                </li>
            </ul>
        </div>
            <!-- <div class="col-12 col-md-8 image_view_column banner_part_img_parent first_image_part h-100 pe-0 ps-0 ps-md-2">
                <figure class="position-relative mb-0 me-md-2">
                    <img src="{{ url('frontend/image/banner_3.jpg') }}" alt="asscher" class="fancy_color_img me-0">
                    <div class="lab_grown_diamonds_text our_engagement_label">Lab grown diamonds</div>
                </figure>
            </div>
            <div class="col-12 col-md-4 image_view_column_part banner_part_img_parent engagement_part px-0 px-md-1 d-flex flex-column justify-content-between">
                <figure class="position-relative mb-0 image_view_column_part_1"> 
                    <img src="{{ url('frontend/image/banner_3.jpg') }}" alt="asscher" class="fancy_color_img">
                    <div class="lab_grown_diamonds_text">Lab grown diamonds</div>
                </figure>
                <figure class="mb-0 position-relative image_view_column_part_2">
                    <img src="{{ url('frontend/image/banner_3.jpg') }}" alt="asscher" class="fancy_color_img mt-0">
                    <div class="lab_grown_diamonds_text three-lab-grown">Lab grown diamonds</div>
                </figure>
            </div> -->
       </div>
    </div>
</div>
@endif



<div class="create_your_own_section custom_made_wedding_bands_section my-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 mt-md-0 mt-4 order-2 order-md-1">
                <div class="text-center">
                    <div class="">
                        <div class="choose_your_setting_heading text-center text-center mb-2 mb-xl-3">
                            {{ $MenuPage->section1_title }}
                        </div>
                        <p class="custom_engagement_paragrph">
                            {{ $MenuPage->section1_description }}
                        </p>
                    </div>
                </div>
              
                <div class="text-center mt-5">
                    <a href="{{ $MenuPage->section1_button_url }}" class="explore-category-btn btn-hover-effect btn-hover-effect-black diamond-btn buy_lab_diamonds_btn view_all_rings_btn">
                        {{ $MenuPage->section1_button_title }}
                    </a>
                </div>
            </div>
            <div class="col-md-5 order-1 order-md-2">
                <img src="{{ url('images/aboutus/'.$MenuPage->section1_image) }}" alt="">
            </div>  
        </div>
       
    </div> 
</div>

@if(count($products) > 0)
    <div class="shop_dimond_by_shape1 choose_your_setting_section">
        <div class="container">
            <div class="">
                <div class="choose_your_setting_heading text-center mb-2 mb-lg-3">{{ $MenuPage->section2_title }}</div>
                {{-- <div class="choose_your_setting_paragraph text-center mb-3 mb-md-4 mb-xl-5">
                    Whatever the occasion, we've got a beatiful piece of jewellery for you.
                </div> --}}
            </div>
            <div>
                <div class="owl-carousel owl-theme products_item">
                    
                <?php 
                    $shape_no = 1;
                    $supported_video = array(
                        'mov',
                        'mp4',
                        '3gp'
                    );
                    $index = 0;
                ?>
                    @foreach($products as $product) 
                     
                    <?php
                    
                        $video_array = array();
                        $images_array = array();
                        $images = explode(",",$product->images);
                        foreach($images as $key => $value){
                        $ext = pathinfo($value, PATHINFO_EXTENSION);
                        if(in_array($ext, $supported_video)){
                            $video_array[] = $value;
                        }else{
                            $images_array[] = $value;
                        } 
                        //dump($index);
                        }
                        $new_array = array_merge($video_array,$images_array);   
                        $image = URL($new_array['0']);
                        $sale_price = $product->sale_price;
                        $url =  URL('/product-details/'.$product->slug); 
                        $supported_image = array(
                        'jpg',
                        'jpeg',
                        'png'
                        );

                        $alt_text = "";
                        if($product->alt_text != ""){
                            $alt_texts = explode(",",$product->alt_text);
                            $alt_text = $alt_texts['0'];
                        }
                     
                    
                    ?>
                    <div class="hover_effect_part wire_bangle_shop_radio product-data mt-0">
                    <div class="wire_bangle_img_radio_button">
                        <div class="wire_bangle_img mb-3 position-relative">
                            <a class="wire_bangle_hover_a" href="{{ $url }}">
                                <?php 
                                   $ext = pathinfo($image, PATHINFO_EXTENSION); 
                                   if(in_array($ext, $supported_image)) {  
                                ?>
                                
                                <img src="{{ $image }}" alt="{{ $alt_text }}">
                                <?php }else{ ?>
                                   
                                    <video  loop="true" autoplay="autoplay"  muted style="width:100%; height:200px;" name="media"><source src="{{ $image }}" type="video/mp4" alt="{{ $alt_text }}"></video>
                                <?php } ?>
                            </a>
                        </div>
                        <div class="wire_bangle_description p-3"><div class="wire_bangle_heading mb-2">{{ isset($product->primary_category->category_name)?$product->primary_category->category_name:"#" }}
                        <input type="hidden" class="variant_id" value="{{ $product->variant_id }}">    
                        <input type="hidden" class="item_type" value="0">    
                        <span type="button" class="btn btn-default add-to-wishlist-btn" data-toggle="tooltip" data-placement="right" title="Wishlist">
                            <?php 
                            if(is_wishlist($product->variant_id,0)){
                            ?>
                                <i class="fas fa-heart heart-icon-part"></i>
                            <?php }else{ ?>
                                <i class="far fa-heart"></i> 
                            <?php }
                            ?>
                        </span>
                        </div>
                            <div class="wire_bangle_sub_heading wire_bangle_description"><a href="{{ $url }}">{{ $product->product_title }}</a></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="wire_bangle_price wire_bangle_price_part">
                                        $ {{ $sale_price }}
                                    </span>
                                    
                                     <?php if($product->regular_price != ""){  ?>
                                    <span class="ms-2 wire_bangle_dublicate_price product_detail_regular_price">$<span class="regular_price"> {{ $product->regular_price }}</span></span>
                                    <?php } ?>
                                </div>

                                <?php 
                                $ProductVariantVariant = \App\Models\ProductVariantVariant::with('attribute','attribute_terms')->where('estatus',1)->where('product_id',$product->id)->groupBy('attribute_id')->get();
                                foreach($ProductVariantVariant as $productvariants){
                                if($productvariants->attribute_terms['0']->attrterm_thumb != ''){
                                ?>
                                <span class="wire_bangle_color mb-xxl-0 wire_bangle_color_img_part text-center wire_bangle_color_ring_part d-inline-block"><div class="wire_bangle_color_part">
                                <?php
                                    $product_attribute = \App\Models\ProductVariantVariant::with('attribute_terms','product_variant')->where('estatus',1)->where('attribute_id',$productvariants->attribute_id)->where('product_id',$product->id)->groupBy('attribute_term_id')->get();
                                    $ia = 1;
                                    foreach($product_attribute as $attribute_term){
                                        $attributeurl =  URL('/product-details/'.$attribute_term->product_variant->slug); 
                                     ?>
                                    <span class="form-check d-inline-block">
                                        <a href="{{ $attributeurl }}">
                                        <img src="{{ url('images/attrTermThumb/'.$attribute_term->attribute_terms[0]->attrterm_thumb) }}" alt="{{ $attribute_term->attribute_terms[0]->attrterm_name }}"  class="wire_bangle_color_img pe-auto">
                                        </a>
                                        <div class="wire_bangle_color_input_label"></div>
                                    </span>
                                <?php        
                                    $ia++;    
                                }
                                ?>
                                </div></span>
                                <?php
                                    } 
                                }
                                ?>
                                
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $shape_no++;  ?>
                    @endforeach           
                </div>
            </div>
        </div>
    </div>
@endif
<div class="container ready-to-ship-section">
    <div class="row two_part_box_section">
        <div class="col-md-6 mb-0 mb-md-0 order-2">
            <div class="choose_your_setting_box text-start custom-bg-remove ps-0 ps-md-3">
                <div class="">
                    <div class="custom_made_heading text-start mb-2 mb-xl-3">
                        {{ $MenuPage->section4_title }}
                    </div>
                    <p class="custom_engagement_paragrph text-start ms-0">
                        {{ $MenuPage->section4_description }}
                    </p>
                    <div class="engagement_button">
                        <a href="{{ $MenuPage->section4_button_url }}" class="engagement_start_diamond mt-3 mt-xl-5 labDiamondBtn create_yout_own_engagemtnt_ring_btn buy_now_btn d-inline-block">{{ $MenuPage->section4_button_title }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 design_engagemnt_image order-1">
            <div class="custom-image-part">
                <img src="{{ url('images/aboutus/'.$MenuPage->section4_image) }}" alt="">
            </div>
        </div>  
    </div>
</div>

    <div class="container choose_your_setting_faq">
        <div class="row">
            <div class="col-md-8 mb-md-5 pb-md-5 offset-md-2 pb-4">
                @if(count($faqs) > 0)
                    <div class="choose_your_setting_heading text-center mb-3 mb-md-4 mb-lg-4">
                        FAQs
                    </div> 
                    @foreach($faqs as $faq)
                        <button class="accordion mb-2">
                            {{ $faq->question }}
                        </button>
                            <div class="panel" style="display: none;">
                                {!! $faq->answer !!}
                            </div>
                        @endforeach
                @endif
            </div>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function() {    
        $('body').on('click', '#shopProductBtn', function () {
            var category_id = $(this).attr('data-id');
            var url = "{{ url('shop/') }}" + "/" + category_id;
            window.open(url,"_blank");
        });
    
    });
</script>

@endsection