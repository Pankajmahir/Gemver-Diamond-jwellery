@extends('frontend.layout.layout')

@section('content')
        <div class="background-sub-slider">
            <div class="">
                <!-- <img src="{{ asset('frontend/image/about_us.png') }}" alt=""> -->
                <div class="about_us_background">
                    <div class="sub_heading mb-lg-3">{{ $Category->category_name }} setting</div>
                    <div class="about_us_link">
                        <a href="{{ URL('/') }}">home</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14" fill="none" class="mx-2">
                            <path d="M4.30029 4.32471L6.97613 7L4.30029 9.67529L5.44971 10.8247L9.27388 7L5.44971 3.17529L4.30029 4.32471Z" fill="white"/>
                            <path d="M8.30029 4.32471L10.9761 7L8.30029 9.67529L9.44971 10.8247L13.2739 7L9.44971 3.17529L8.30029 4.32471Z" fill="white"/>
                        </svg>
                        <a href="#">{{ $Category->category_name }} setting</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="wire_bangle_page container">
        <!-- <div class="row mb-lg-5 pb-lg-5 mb-4  align-items-center step-progressbar-row">
            <div class="col-lg-2 text-center text-lg-start">
                <div class="step-progressbar-side-heading mb-3 mb-lg-0">Create Your {{ $Category->category_name }}</div>
            </div>
            <div class="col-lg-10">
                <div class="flex-container step-progressbar">
                    <div class="flex-row text-center">
                        <div class="flex-col-xs-12">
                            @if($check_diamond == 1)
                            <ul class="tab-steps--list">
                                <li data-step="1">
                                    <div class="step-img">
                                        <img src="{{ url('frontend/image/diamon_img.jpeg') }}" alt="choose diamond">
                                    </div>
                                    <div class="step-heading mt-2">
                                        choose diamond
                                        
                                    </div>
                                    <span><a href="{{ url('/diamond-setting-edit/'. $CatId .'/edit') }}" class="step-heading-link mt-2 d-inline-block">edit</a></span>
                                </li>
                                <li class="active" data-step="2">
                                    <div class="step-img">
                                        <img src="{{ url($Category->category_thumb) }}" alt="choose setting">
                                    </div>
                                    <div class="step-heading mt-2">
                                        choose setting
                                    </div>
                                </li>
                                <li data-step="3">
                                    <div class="step-img">
                                        <img src="{{ url($Category->category_thumb) }}" alt="complete the {{ $Category->category_name }}">
                                    </div>
                                    <div class="step-heading mt-2">
                                        complete the {{ $Category->category_name }}
                                    </div>
                                </li>
                            </ul>
                            @else
                            <ul class="tab-steps--list">
                                <li class="active" data-step="1">
                                    <div class="step-img">
                                        <img src="{{ url($Category->category_thumb) }}" alt="">
                                    </div>
                                    <div class="step-heading mt-2">
                                        choose setting
                                    </div>
                                </li>
                                <li data-step="2">
                                    <div class="step-img">
                                        <img src="{{ url('frontend/image/diamon_img.jpeg') }}" alt="">
                                    </div>
                                    <div class="step-heading mt-2">
                                        choose diamond
                                    </div>
                                    <a href="{{ url('/diamond-setting/'. $CatId) }}" class="step-heading-link mt-2 d-block">browse lab diamonds</a>
                                </li>
                                <li data-step="3">
                                    <div class="step-img">
                                        <img src="{{ url($Category->category_thumb) }}" alt="">
                                    </div>
                                    <div class="step-heading mt-2">
                                        complete the {{ $Category->category_name }}
                                    </div>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div> -->
        <div class="mb-lg-5 mb-4">
        @if($check_diamond == 1)
            <ul class="d-block d-lg-flex progressbar_ul">
                    <li class="step-progressbar-part">
                        <div class="step-progressbar-step-part ">
                            <span class="step-progressbar-img ms-3">
                                <img src="{{ url('frontend/image/step_1.png') }}" alt="">
                            </span>
                            <div>
                                <span class="step-progressbar-text">
                                        choose diamonds
                                    </span>
                                    <div class="d-flex edit_price_text mt-1">
                                        <span class="me-2">
                                            <a href="{{ url('/diamond-setting-edit/'. $CatId .'/edit') }}" class="edit_text">Edit</a>
                                        </span>
                                        <span>
                                            |
                                        </span>
                                        <div class="d-flex ms-2">
                                            <span class="price_text me-2">
                                                price:
                                            </span>
                                            <span class="price_part">
                                                ${{ $DiamondPrice }}
                                            </span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    
                    </li>
                    <li class="step-progressbar-part active">
                        <div class="step-progressbar-step-part">
                            <span class="step-progressbar-img ms-3">
                                <img src="{{ url('frontend/image/step_2.png') }}" alt="">
                            </span>
                            <div>
                                <span class="step-progressbar-text">
                                    choose settings
                                </span> 
                            </div>
                        </div>
                        
                    </li>
                    <li class="step-progressbar-part">
                        <div class="step-progressbar-step-part">
                            <span class="step-progressbar-img ms-3">
                                <img src="{{ url('frontend/image/step_3.png') }}" alt="">
                            </span>
                            <div>
                                <span class="step-progressbar-text">
                                      complete the {{ $Category->category_name }}
                                </span>
                                
                            </div>
                        </div>
                    
                    </li>
            </ul>
                @else  
                <ul class="d-block d-lg-flex progressbar_ul">
                    
                    <li class="step-progressbar-part active">
                        <div class="step-progressbar-step-part">
                            <span class="step-progressbar-img ms-3">
                                <img src="{{ url('frontend/image/step_2.png') }}" alt="">
                            </span>
                            <div>
                                <span class="step-progressbar-text">
                                    choose settings
                                </span> 
                                
                            </div>
                        </div>
                    </li>
                    <li class="step-progressbar-part ">
                        <div class="step-progressbar-step-part">
        
                            <span class="step-progressbar-img ms-3">
                                <img src="{{ url('frontend/image/step_1.png') }}" alt="">
                            </span>
                            <div>
                                <span class="step-progressbar-text">
                                    choose diamonds
                                </span>
                                <div class="d-flex edit_price_text mt-1">
                                    <span class="me-2">
                                        <a href="{{ url('/diamond-setting/'. $CatId) }}" class="edit_text">Browse Lab Diamonds</a>
                                    </span>
                                </div>
                                    
                            </div>
                        </div>
                    </li>
                    <li class="step-progressbar-part">
                        <div class="step-progressbar-step-part">
                            <span class="step-progressbar-img ms-3">
                                <img src="{{ url('frontend/image/step_3.png') }}" alt="">
                            </span>
                            <div>
                                <span class="step-progressbar-text">
                                      complete the {{ $Category->category_name }}
                                </span>
                               
                            </div>
                        </div>
                    </li>
            </ul>
            @endif 
        </div>
        <div class="row" >
            <div class="col-md-6 wire_bangle_padding mb-4" id="vimage">
                <div class="slider slider-single mb-5">
                    <?php 
                    foreach($Product->product_variant as $variant){
                        $images = explode(",",$variant->images);
                        foreach($images as $image){
                    ?>
                    <div class="product_slider_main_item">
                        <img src="{{ URL($image) }}" alt="">
                    </div>     
                    <?php 
                        }
                    }
                    ?> 
                </div>
                <div class="slider slider-nav">
                <?php 
                    foreach($Product->product_variant as $variant){
                        $images = explode(",",$variant->images);
                        foreach($images as $image){
                    ?>
                    <div class="product_slider_item">
                        <h3><img src="{{ URL($image) }}" alt=""></h3>
                    </div>    
                    <?php 
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6 wire_bangle_padding_2">
                <div class="wire_bangle_content">
                    <div class="">
                        <div class="wire_bangle_heading mb-2 pb-xxl-2">{{ $Product->product_title }}</div>
                        <div class="d-flex mb-2 pb-xxl-2">
                            <span class="wire_bangle_price ">$<span class="sale_price">{{ $Product->product_variant['0']->sale_price }} </span>
                                @if($Product->product_variant['0']->regular_price != '' || $Product->product_variant['0']->regular_price != 0 )
                                <span class="ms-2 wire_bangle_dublicate_price ">$<span class="regular_price"> {{ $Product->product_variant['0']->regular_price }} </span></span>
                                @endif
                            </span>
                        </div>
                        <!-- <p class="blog_box_paragraph mb-xl-4">{!! Str::limit($Product->desc, 170, ' ...<a style="color: #BB9761;" href="#description">Read More </a>');  !!}</p> -->
                       
                        <form action="" class="mb-4 mb-lg-4">
                            <input type="hidden" value="{{ $Product->id }}" name="product_id" id="product_id">
                            <?php
                            $ProductVariantVariant = \App\Models\ProductVariantVariant::with('attribute','attribute_terms')->where('estatus',1)->where('product_id',$Product->id)->groupBy('attribute_id')->get();
                            foreach($ProductVariantVariant as $productvariants){
                               // $categories = \App\Models\Attribute::where('estatus',1)->where('id',$Product->id)->get();
                             if($productvariants->attribute_terms['0']->attrterm_thumb != ''){
                            ?>
                            <div class="wire_bangle_color_heading mb-2">{{ $productvariants->attribute->attribute_name }}</div>
                                <div class="wire_bangle_color pb-md-2 wire_bangle_color_img_part">
                                <?php 
                                $product_attribute = \App\Models\ProductVariantVariant::with('attribute_terms')->where('estatus',1)->where('attribute_id',$productvariants->attribute_id)->where('product_id',$Product->id)->groupBy('attribute_term_id')->get();
                                $ia = 1;
                                ?>    
                                @foreach($product_attribute as $attribute_term)
                                    <span class="form-check d-inline-block">
                                        <input class="form-check-input variant" @if(in_array($attribute_term->attribute_terms[0]->id,$attribute_term_ids)) checked @endif  value="{{ $attribute_term->attribute_terms[0]->id }}"  type="radio" name="AtributeVariant{{ $productvariants->attribute->attribute_name }}" id="" title="{{ $attribute_term->attribute_terms[0]->attrterm_name }}">
                                        <img src="{{ url('images/attrTermThumb/'.$attribute_term->attribute_terms[0]->attrterm_thumb) }}" alt="{{ $attribute_term->attribute_terms[0]->attrterm_name }}"  class="wire_bangle_color_img">
                                        <div class="wire_bangle_color_input_label"></div>
                                    </span>
                                <?php $ia++ ?>    
                                @endforeach
                            </div>
                            <?php 
                            }else{ 
                             $iv = 1;
                            ?>
                                <div class="wire_bangle_color_heading mb-2">{{ $productvariants->attribute->attribute_name }}</div>
                                <div class="wire_bangle_carat">
                                <?php 
                                 $product_attribute = \App\Models\ProductVariantVariant::with('attribute_terms')->where('estatus',1)->where('attribute_id',$productvariants->attribute_id)->where('product_id',$Product->id)->groupBy('attribute_term_id')->get();
                                ?>    
                                @foreach($product_attribute as $attribute_term)
                                <span class="form-check d-inline-block position-relative me-2  ps-0 mb-3">
                                        <input class="form-check-input variant" @if(in_array($attribute_term->attribute_terms[0]->id,$attribute_term_ids)) checked @endif  value="{{ $attribute_term->attribute_terms[0]->id }}"  type="radio" name="AtributeVariant{{ $productvariants->attribute->attribute_name }}" id="AtributeVariant{{ $attribute_term->attribute_terms[0]->id }}">
                                        <label class="form-check-label wire_bangle_carat_label" for="AtributeVariant{{ $attribute_term->attribute_terms[0]->id }}">
                                        {{ $attribute_term->attribute_terms[0]->attrterm_name }}
                                    </label>
                                    </span>
                                    <?php $iv++ ?>    
                                @endforeach    
                                
                            </div>
                            <?php 
                               } 
                            }  
                            ?>

                            <div class="d-flex flex-wrap" id="speci_multi143">
                            
                            <?php

                            $ProductVariantSpecification = \App\Models\ProductAttribute::leftJoin("attributes", "attributes.id", "=", "product_attributes.attribute_id")->where('product_id',$Product->id)->where('is_dropdown',1)->groupBy('product_attributes.attribute_id')->get();
                            
                             $spe = '';
                             foreach($ProductVariantSpecification as $productvariants)
                             {

                             $spe .='<div class="me-4"> <div class="wire_bangle_color_heading mb-2">'.$productvariants->attribute_name.'</div><span class="wire_bangle_select mb-3 me-3 d-inline-block">
                                       <select name="AtributeSpecification'.$productvariants->id.'" id="AtributeSpecification'.$productvariants->id.'" class="specification">
                                         <option value="">-- '.$productvariants->attribute_name .'--</option>';   
                            
                                 $product_attribute = \App\Models\ProductAttribute::where('attribute_id',$productvariants->attribute_id)->where('product_id',$Product->id)->groupBy('attribute_id')->get();
                                   // dd($product_attribute);
                                foreach($product_attribute as $attribute_term){
                                    $term_array = explode(',',$attribute_term->terms_id);
                                    
                                    $product_attributes = \App\Models\AttributeTerm::where('estatus',1)->whereIn('id',$term_array)->get();
                                    //dd($product_attributes);
                                     $v = 1;
                                     foreach($product_attributes as $term){
                                     $spe .='<option data-spe="'.$productvariants->attribute_name .'" data-term="'.$term->attrterm_name .'" value="'. $term->id .'">'.$term->attrterm_name .'</option>'; 
                                    
                                    }
                                 }   
                                $spe .='</select>
                                    <div id="AtributeSpecification'.$productvariants->id.'-error" class="invalid-feedback animated fadeInDown" style="display: none;"></div>
                                </span> </div>';
                                }
                             
                            echo $spe;
                             ?>
                            </div>
                            <div class="row mb-4" id="specificationproduct143">
                            <?php
                            $product_attributes_specification = \App\Models\ProductAttribute::leftJoin("attributes", "attributes.id", "=", "product_attributes.attribute_id")->where('is_dropdown',0)->where('product_id',$Product->id)->groupBy('attributes.id')->get();
                            //dd($product_attributes_specification);
                            foreach($product_attributes_specification as $product_attribute_specification){  
                                $product_attribute_terms = explode(',',$product_attribute_specification->terms_id);
                                $product_attributes_term_val = \App\Models\AttributeTerm::where('estatus',1)->whereIn('id', $product_attribute_terms)->get()->pluck('attrterm_name')->toArray();
                                $product_attribute_term_name = implode(' | ',$product_attributes_term_val);
                            ?>
                        
                            <div class="mt-3 wire_bangle_share wire_bangle_share_part row ps-0"> 
                                <span class="d-block col-6 col-sm-3 col-md-4 ps-0">{{ $product_attribute_specification->attribute_name }}</span>
                                <span class="wire_bangle_color_theme d-block col-6 col-sm-9 col-md-8">{{ $product_attribute_term_name }}</span>
                            </div>
                               
                            <?php
                            }
                            ?>
                            </div> 
                            <input type="hidden" value="" name="variant_id" id="variant_id">
                            
                            <button type="button" id="save_newProductBtn" class="select_setting_btn  btn-hover-effect btn-hover-effect-black diamond-bt">select setting</button>
                            <div id="inquiry-error" class="invalid-feedback animated fadeInDown" style="display: none;"></div>
                        </form>

                            <div class="mt-3">
                                <p>Estimated date of shipment <br>
                                <b>{{ date('dS M , Y', strtotime ('+15 day')) }} </b>
                                </p>
                            </div>

                            <div class=" mt-3">
                                <button class="select_contact_btn diamond-btn" type="button"> Get a gemologist opinion</button>
                                <div id="inquiry-error" class="invalid-feedback animated fadeInDown" style="display: none;"></div>
                            </div>

                            <div class="modal fade inquiry_now_modal" id="opinionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable text-center">
                                    <div class="modal-content">
                                        <div class="row">
                                            <div class="col-6 ps-0 text-start">
                                                <div class="mb-xl-4 mb-3 product_heading"> Get a gemologist opinion</div>
                                            </div>
                                            <div class="col-6 text-end pe-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        </div>
                                        <div class="alert alert-success" id="opinionsuccess-alert" style="display: none;">
                                        </div>
                                        
                                        <form action="" method="post" id="opinionCreateForm" name="opinionCreateForm">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $Product->id }}"> 
                                        <div class="row mb-0">
                                            <div class="mb-3 col-md-6 ps-0">
                                                <input type="text" name="name" placeholder="your name" class="d-block wire_bangle_input">
                                                <div id="opinionname-error" class="invalid-feedback animated fadeInDown text-start" style="display: none;"></div>
                                            </div>
                                          
                                            <div class="mb-3 col-md-6 ps-0">
                                                <input type="text" name="email"  placeholder="username123@gmail.com" class="d-block wire_bangle_input">
                                                <div id="opinionemail-error" class="invalid-feedback animated fadeInDown text-start" style="display: none;"></div>
                                            </div>
                                            <div class="mb-3 col-md-12 ps-0 mb-3">
                                                <textarea  name="message"  class="d-block wire_bangle_input" placeholder="Message"></textarea>
                                                
                                                <div id="opinionmessage-error" class="invalid-feedback animated fadeInDown text-start mt-2" style="display: none;">Please select any value</div>
                                            </div>
                                        </div>
 
                                        <button class="send_inquiry_btn product_detail_inquiry_btn" id="save_newopinionBtn" >send 
                                            <div class="spinner-border loadericonfa spinner-border-send-inquiry" role="status" style="display:none;">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </button>
                                      </form>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-xxl-4" id="description">
            <div class="col-md-2">
                <div class="description_heading">
                    description
                </div>
            </div>
            <div class="col-md-10">
                <p class="description_paragraph">{{ $Product->desc }}</p>
            </div>
        </div>
        <div class="accordion wire_bangle_accordion detailsspecii" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         Details
                    </button>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row" id="specification143">
                            @if($Product->product_title != "")
                            <div class="col-xl-6 px-0" >
                                <div class="mt-4 wire_bangle_share row">
                                    <span class="col-5 col-sm-3 col-xl-3 ps-0">Product Name </span>
                                    <span class="wire_bangle_color_theme col-7 col-sm-9 col-xl-9">{{ $Product->product_title }}</span>
                                </div>
                            </div>
                            @endif

                            @if($Product->design_number != "")
                            <div class="col-xl-6 px-0" >
                                <div class="mt-4 wire_bangle_share row">
                                   <span class="col-5 col-sm-3 col-xl-3 ps-0"> Design Number </span>
                                    <span class="wire_bangle_color_theme col-7 col-sm-9 col-xl-9">{{ $Product->design_number }}</span>
                                </div>
                            </div>
                            @endif
                            <?php
                            $product_attributes_specification = \App\Models\ProductAttribute::leftJoin("attributes", "attributes.id", "=", "product_attributes.attribute_id")->where('is_dropdown',0)->where('product_id',$Product->id)->groupBy('attributes.id')->get();
                            //dd($product_attributes_specification);
                            foreach($product_attributes_specification as $product_attribute_specification){  
                                $product_attribute_terms = explode(',',$product_attribute_specification->terms_id);
                                $product_attributes_term_val = \App\Models\AttributeTerm::where('estatus',1)->whereIn('id', $product_attribute_terms)->get()->pluck('attrterm_name')->toArray();
                                $product_attribute_term_name = implode(' | ',$product_attributes_term_val);
                            ?>

                            <div class="col-xl-6 px-0" >
                                <div class="mt-4 wire_bangle_share row">
                                    <span class="col-5 col-sm-3 col-xl-3 ps-0"> {{ $product_attribute_specification->attribute_name }} </span>
                                    <span class="wire_bangle_color_theme col-7 col-sm-9 col-xl-9">{{ $product_attribute_term_name }}</span>
                                </div>
                            </div>

                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-3 px-xxl-0" id="spe_desc">
        
        </div>
    </div>

<script>    
$(document).ready(function(){
    filter_data();
    $("#sorting").change(function() {
        filter_data();
    });
    
    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var variant = get_filter('variant');
        var product_id = $('#product_id').val();
        $.ajax({
            url:"{{ url('/product-details-filter') }}",
            method:"POST",
            data:{action:action,variant:variant,product_id:product_id,_token: '{{ csrf_token() }}'},
            success:function(data){
                //console.log(data);
                if(data.result == 'data not found'){
                    $("#inquiry-error").html("product not available");
                    $("#inquiry-error").show();
                    $(".select_setting_btn").prop('disabled', true);
                }else{
                    $("#inquiry-error").html("");
                    $("#inquiry-error").hide();
                    $(".select_setting_btn").prop('disabled', false);

                    $('#variant_id').val(data.result.variant_id);
                    $('.sale_price').html(data.result.sale_price);
                    $('.regular_price').html(data.result.regular_price); 
                    $('#SKU').val(data.result.SKU);
                    //$('#specification').html(data.speci);
                    if(data.speci != ""){
                        $(".detailsspeci").show();
                        $('#specification').html(data.speci);
                    }else{
                        $(".detailsspeci").hide();
                    }
                    $('#speci_multi').html(data.speci_multi);
                    $('#specificationproduct').html(data.specificationstr);
                    $('#vimage').html(data.vimage);
                    $('#spe_desc').html(data.spe_desc);
                    selectjs();
                    sliderjs();
                }    
                
            }
        });
    }
    
    function selectjs(){ 
    $('select').each(function() {
        var $this = $(this),
        numberOfOptions = $(this).children('option').length;
        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());

        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
            //if ($this.children('option').eq(i).is(':selected')){
            //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
            //}
        }

        var $listItems = $list.children('li');

        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function() {
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });

        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            //console.log($this.val());
        });

        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

      });
    }

    function sliderjs(){ 
        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            nav: false,
            fade: false,
            adaptiveHeight: true,
            infinite: false,
            useTransform: true,
            speed: 400,
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        });
        $('.slider-nav')
        .on('init', function(event, slick) {
            $('.slider-nav .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            dots: false,
            nav: false,
            focusOnSelect: false,
            infinite: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                }
            }, {
                breakpoint: 767,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                }
            }, {
                breakpoint: 575,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            }]
        });
        $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
            $('.slider-nav').slick('slickGoTo', currentSlide);
            var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
            $('.slider-nav .slick-slide.is-active').removeClass('is-active');
            $(currrentNavSlideElem).addClass('is-active');
        });

        $('.slider-nav').on('click', '.slick-slide', function(event) {
            event.preventDefault();
            var goToSingleSlide = $(this).data('slick-index');

            $('.slider-single').slick('slickGoTo', goToSingleSlide);
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }
    $('.variant').click(function(){
        filter_data();
    });

});
</script>


<script type="text/javascript">
$( document ).ready(function() {    
// $('body').on('click', '#save_newProductBtn', function () {
//     save_cart($(this),'save_new');
// });

$('body').on('click', '#save_newProductBtn', function () {
    var valid = true;
    $(document).find('.specification').each(function() {
        var thi = $(this);
        var this_err = $(thi).attr('name') + "-error";
        if($(thi).val()=="" || $(thi).val()==null){
            $("#"+this_err).html("Please select any value");
            $("#"+this_err).show();
            valid = false;
        }else{
            $("#"+this_err).hide();
            valid = true;
        } 
    })

    if(valid){
        save_cart($(this),'save_new');
    }
});

function save_cart(btn,btn_type){
    $(btn).prop('disabled',true);
    $(btn).find('.loadericonfa').show();

    var dataarray = [];
    $(".specification").each(function () {
      dataarray.push($(this).val());
    });
    var specification = dataarray.join(",");
    var variant_id = $('#variant_id').val();
    var ip_address = '{{ \Request::ip(); }}';
    var category_id = '{{ $Category->id }}';
    $.ajax({
        type: 'POST',
        url: "{{ route('frontend.cart.save') }}",
        data: {specification:specification,variant_id:variant_id,ip_address:ip_address,category_id:category_id,_token: '{{ csrf_token() }}'},

        success: function (res) {
            if(res.status == 'failed'){
                $(btn).prop('disabled',false);
                $(btn).find('.loadericonfa').hide();

                if (res.errors.name) {
                    $('#name-error').show().text(res.errors.name);
                } else {
                    $('#name-error').hide();
                }
                 
            }
            if(res.status == 200){
                
                var check_diamond = '{{ $check_diamond }}';
                if(check_diamond == 0){
                    $url = "{{ url('diamond-setting') }}" +'/' + category_id
                }else{
                    $url = "{{ url('product_complete') }}" +'/' + category_id
                }
                window.location = $url;
            }

        },
        error: function (data) {
            $(btn).prop('disabled',false);
            $(btn).find('.loadericonfa').hide();
            toastr.error("Please try again",'Error',{timeOut: 5000});
        }
    });
}


$('body').on('click', '.select_contact_btn', function () {
    
    jQuery("#opinionModal").modal('show');

}); 
      
$('body').on('click', '#save_newInquiryBtn', function () {
    save_inquiry($(this),'save_new');
});

function save_inquiry(btn,btn_type){
    $(btn).prop('disabled',true);
    $(btn).find('.loadericonfa').show();
    var action  = $(btn).attr('data-action');
    var formData = new FormData($("#InquiryCreateForm")[0]);
    //var dataspecification = $("input:radio.specification:checked").val();
    // $(".specification").each(function( index ) {
    //  console.log( index + ": " + $( this ).text() );
    // });

    var dataarray = [];

    // $('.specification').each(function (index) {
    //     if(this.selected){
    //         dataarray.push($(this).val());
    //     }
    //  });
    $(".specification").each(function () {
      dataarray.push($(this).val());
   })
   
    var dataspecification = dataarray.join(",");
    
    var qty = $('#qty').val();
    formData.append('specification_term_id',dataspecification);
    formData.append('qty',qty);
     
    $.ajax({
        type: 'POST',
        url: "{{ route('frontend.inquiry.save') }}",
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
            
            if(res.status == 'failed'){
                $(btn).prop('disabled',false);
                $(btn).find('.loadericonfa').hide();

                if (res.errors.name) {
                    $('#name-error').show().text(res.errors.name);
                } else {
                    $('#name-error').hide();
                }
                if (res.errors.email) {
                    $('#email-error').show().text(res.errors.email);
                } else {
                    $('#email-error').hide();
                }

                if (res.errors.mobile_no) {
                    $('#mobile_no-error').show().text(res.errors.mobile_no);
                } else {
                    $('#mobile_no-error').hide();
                }
                if (res.errors.inquiry) {
                    $('#inquiry-error').show().text(res.errors.inquiry);
                } else {
                    $('#inquiry-error').hide();
                } 
            }
            if(res.status == 200){
                $('#inquiry-error').hide();
                $('#mobile_no-error').hide();
                $('#email-error').hide();
                $('#name-error').hide();
                document.getElementById("InquiryCreateForm").reset();
                $(btn).prop('disabled',false);
                $(btn).find('.loadericonfa').hide();
                //location.href="{{ route('frontend.contactus')}}";
                var success_message = 'Thank You For Product Inquiry';
                $('#success-alert').text(success_message);
                $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                  $("#success-alert").slideUp(1000);
                });
            }

        },
        error: function (data) {
            $(btn).prop('disabled',false);
            $(btn).find('.loadericonfa').hide();
            toastr.error("Please try again",'Error',{timeOut: 5000});
        }
    });
}


$('body').on('click', '#save_newopinionBtn', function () {
    save_opinion($(this),'save_new');
});

function save_opinion(btn,btn_type){
    $(btn).prop('disabled',true);
    $(btn).find('.loadericonfa').show();
    var action  = $(btn).attr('data-action');
    var formData = new FormData($("#opinionCreateForm")[0]);
  
    $.ajax({
        type: 'POST',
        url: "{{ route('frontend.opinion.save') }}",
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
            
            if(res.status == 'failed'){
                $(btn).prop('disabled',false);
                $(btn).find('.loadericonfa').hide();
                if (res.errors.name) {
                    $('#opinionname-error').show().text(res.errors.name);
                } else {
                    $('#opinionname-error').hide();
                }
                if (res.errors.email) {
                    $('#opinionemail-error').show().text(res.errors.email);
                } else {
                    $('#opinionemail-error').hide();
                }
                if (res.errors.message) {
                    $('#opinionmessage-error').show().text(res.errors.message);
                } else {
                    $('#opinionmessage-error').hide();
                } 
            }
            if(res.status == 200){
                $('#opinionmessage-error').hide();
               
                $('#opinionemail-error').hide();
                $('#opinionname-error').hide();
                document.getElementById("opinionCreateForm").reset();
                $(btn).prop('disabled',false);
                $(btn).find('.loadericonfa').hide();
                //location.href="{{ route('frontend.contactus')}}";
                var success_message = 'Thank You For Opinion';
                $('#opinionsuccess-alert').text(success_message);
                $("#opinionsuccess-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#opinionsuccess-alert").slideUp(1000);
                });
            }

        },
        error: function (data) {
            $(btn).prop('disabled',false);
            $(btn).find('.loadericonfa').hide();
            toastr.error("Please try again",'Error',{timeOut: 5000});
        }
    });
}
});
</script>

@endsection
  