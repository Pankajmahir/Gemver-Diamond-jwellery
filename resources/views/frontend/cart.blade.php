@extends('frontend.layout.layout')

@section('content')
    <div class="background-sub-slider">
        <div class="">
            <!-- <img src="{{ asset('frontend/image/about_us.png') }}" alt=""> -->
            <div class="about_us_background">
                <h1 class="sub_heading mb-lg-3 main_header_title">Cart</h1>
                <div class="about_us_link">
                    <a href="{{ URL('/') }}">home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14" fill="none" class="mx-2">
                        <path d="M4.30029 4.32471L6.97613 7L4.30029 9.67529L5.44971 10.8247L9.27388 7L5.44971 3.17529L4.30029 4.32471Z" fill="white"/>
                        <path d="M8.30029 4.32471L10.9761 7L8.30029 9.67529L9.44971 10.8247L13.2739 7L9.44971 3.17529L8.30029 4.32471Z" fill="white"/>
                    </svg>
                    <a href="#" class="main_header_title">Cart</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        @if(session()->has('customer')) 
        <div class="row my-5">
            <div class="col-md-12">
                <div class="my_account_heading">
                    Hi {{ session("customer.full_name") }}
                </div>
                <p>Welcome to your Account</p>
            </div>
        </div>
        <ul class="nav nav-pills my-4 my_account_tab" id="pills-tab" role="tablist">
            <li class="nav-item " role="presentation">
                <a href="{{ url('/orders') }}" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.442129 9.18474L0.454905 9.18049L5.08119 7.52421L6.07983 8.65632L2.50281 9.93643L8.50009 12.763L14.4974 9.93643L10.9366 8.662L11.9271 7.52707L16.5453 9.18065L16.5581 9.1849C16.5662 9.18836 16.5736 9.19119 16.5817 9.1948L16.5999 9.20251L16.6187 9.21163L16.6281 9.21651C16.6322 9.21855 16.6355 9.22075 16.6396 9.2228L16.6504 9.22909L16.6564 9.23255C16.6934 9.25362 16.7278 9.27909 16.7601 9.30725L16.7736 9.3192L16.7851 9.32973L16.7924 9.33744L16.8025 9.34735L16.8147 9.36071L16.8288 9.37691L16.8348 9.38399C16.8402 9.39028 16.8456 9.39673 16.8503 9.40302L16.8625 9.41859L16.8685 9.42771L16.8805 9.44469L16.8886 9.45806L16.8981 9.47284L16.9089 9.49108L16.9109 9.49454C16.9149 9.50225 16.919 9.51011 16.9223 9.51703L16.931 9.53402L16.9337 9.54031C16.9411 9.55587 16.9478 9.57207 16.9539 9.58827L16.9579 9.59881C16.9633 9.61579 16.9693 9.63262 16.9741 9.65023L16.9769 9.66218C16.9802 9.67492 16.9836 9.68829 16.9863 9.70087L16.9896 9.72052L16.9923 9.73609L16.9943 9.74883L16.9962 9.76927L16.9982 9.79113L16.9988 9.80104L16.9994 9.81441L17 9.83548V16.2036C17 16.4706 16.8559 16.7144 16.6283 16.8334L8.80097 20.9281L8.69726 20.9719L8.57265 20.9986L8.44534 21L8.31938 20.9767L8.20019 20.9288L0.371711 16.8333C0.144145 16.7142 0 16.4705 0 16.2034V9.82403L0.000601229 9.81349L0.00120246 9.79793L0.00255522 9.77968L0.00390799 9.76915L0.00526075 9.75782L0.00661351 9.74304L0.0106718 9.72055L0.0139786 9.7009C0.0166841 9.68816 0.019991 9.67479 0.0234479 9.66221L0.0261534 9.65026C0.0315643 9.63264 0.0369754 9.61566 0.0423866 9.59884L0.0464449 9.5883C0.0524572 9.5721 0.0592209 9.55591 0.0665861 9.54034L0.0753039 9.52272L0.0780094 9.51706C0.0813161 9.50998 0.0853744 9.50228 0.0894327 9.49457L0.0995039 9.47759L0.108221 9.46344L0.113632 9.45494L0.120396 9.44441L0.128513 9.43246L0.137982 9.4183L0.144746 9.40981L0.150157 9.40273C0.154816 9.39644 0.160227 9.39 0.165638 9.38371L0.178414 9.36814L0.193294 9.35257L0.200058 9.34486L0.208776 9.33637L0.217494 9.32725L0.232975 9.3131L0.240341 9.3068C0.272656 9.27866 0.307078 9.25334 0.344052 9.23211L0.354122 9.22581L0.360886 9.22235C0.364945 9.22031 0.368252 9.21811 0.37231 9.21606L0.383733 9.2104L0.400567 9.20191L0.410638 9.19767L0.418755 9.19421C0.426871 9.19075 0.434012 9.18835 0.442129 9.18474ZM8.02434 10.3409C8.15225 10.4861 8.33202 10.5685 8.52064 10.5678C8.70912 10.5672 8.88904 10.484 9.01621 10.3382L12.707 6.1111C12.8868 5.9054 12.9332 5.60738 12.8254 5.3523C12.7184 5.0966 12.4766 4.93164 12.2093 4.93164H10.6418L11.2054 0.803928C11.2331 0.601693 11.1758 0.397397 11.0479 0.243126C10.92 0.0888548 10.7341 0 10.5388 0H6.49856C6.30391 0 6.11814 0.0886937 5.99022 0.243126C5.86231 0.397397 5.80504 0.601677 5.8327 0.803928L6.3956 4.93164H4.79031C4.52231 4.93164 4.28062 5.09724 4.17284 5.35371C4.06583 5.6102 4.11362 5.90819 4.29534 6.11392L8.02434 10.3409Z" fill="#BB9761"/>
                    </svg>
                    <span class="ms-2 d-none d-sm-inline-block">
                         Order 
                    </span>
                </a>
            </li>
            <li class="nav-item active" role="presentation">
                <a href="{{ url('/cart') }}" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9257 0.209157C11.0597 0.0752338 11.2413 0 11.4307 0C11.6201 0 11.8018 0.0752338 11.9357 0.209157L16.7243 4.99828H18.5714C18.9503 4.99828 19.3137 5.14881 19.5816 5.41675C19.8495 5.68468 20 6.04809 20 6.42701V8.57012C20 8.94904 19.8495 9.31244 19.5816 9.58038C19.3137 9.84832 18.9503 9.99885 18.5714 9.99885H17.8571L16.6036 18.7734C16.5549 19.1139 16.3851 19.4254 16.1253 19.6507C15.8655 19.876 15.5332 20 15.1893 20H4.81071C4.46684 20 4.1345 19.876 3.8747 19.6507C3.6149 19.4254 3.44509 19.1139 3.39643 18.7734L2.14286 9.99885H1.42857C1.04969 9.99885 0.686328 9.84832 0.418419 9.58038C0.15051 9.31244 0 8.94904 0 8.57012V6.42701C0 6.04809 0.15051 5.68468 0.418419 5.41675C0.686328 5.14881 1.04969 4.99828 1.42857 4.99828H3.32857C3.33929 4.98613 3.35 4.97399 3.36214 4.96256L8.11429 0.209871C8.249 0.0797436 8.42943 0.00773938 8.61672 0.00936701C8.804 0.0109946 8.98315 0.086124 9.11559 0.218574C9.24802 0.351023 9.32314 0.530195 9.32477 0.7175C9.3264 0.904805 9.2544 1.08526 9.12429 1.21999L5.34643 4.99899H14.7036L10.925 1.21927C10.7911 1.08531 10.7159 0.90364 10.7159 0.714215C10.7159 0.52479 10.7918 0.343121 10.9257 0.209157ZM11.4286 12.142C11.4286 11.9525 11.5038 11.7708 11.6378 11.6368C11.7717 11.5029 11.9534 11.4276 12.1429 11.4276C12.3323 11.4276 12.514 11.5029 12.6479 11.6368C12.7819 11.7708 12.8571 11.9525 12.8571 12.142V16.4282C12.8571 16.6176 12.7819 16.7993 12.6479 16.9333C12.514 17.0673 12.3323 17.1425 12.1429 17.1425C11.9534 17.1425 11.7717 17.0673 11.6378 16.9333C11.5038 16.7993 11.4286 16.6176 11.4286 16.4282V12.142ZM7.85714 11.4276C7.6677 11.4276 7.48602 11.5029 7.35207 11.6368C7.21811 11.7708 7.14286 11.9525 7.14286 12.142V16.4282C7.14286 16.6176 7.21811 16.7993 7.35207 16.9333C7.48602 17.0673 7.6677 17.1425 7.85714 17.1425C8.04658 17.1425 8.22826 17.0673 8.36222 16.9333C8.49617 16.7993 8.57143 16.6176 8.57143 16.4282V12.142C8.57143 11.9525 8.49617 11.7708 8.36222 11.6368C8.22826 11.5029 8.04658 11.4276 7.85714 11.4276Z" fill="#0B1727"/>
                    </svg>
                    <span class="ms-2 d-none d-sm-inline-block">
                       Cart 
                    </span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="{{ url('/wishlist') }}" >
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                    <path d="M14.5496 0C11.1471 0 10 2.80557 10 2.80557C10 2.80557 8.8542 0 5.45038 0C2.04877 0 0 3.01286 0 5.496C0 9.65743 10 16 10 16C10 16 20 9.65886 20 5.49686C20 3.01283 17.952 0 14.5496 0Z" fill="#0B1727"/>
                </svg>
                    <span class="ms-2 d-none d-sm-inline-block"> 
                        Wishlist 
                    </span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="{{ url('/address') }}"  id="address-part-tab" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="21" viewBox="0 0 16 21" fill="none">
                        <path d="M15.0977 4.04917C13.125 0.424746 8.31326 -1.03386 4.36771 0.778387C0.422161 2.59068 -1.09351 7.16532 0.83115 10.635C1.69725 12.182 5.06535 17.5745 6.84571 20.4033C7.35102 21.1989 8.5779 21.1989 9.05906 20.4033C10.8393 17.5743 14.1835 12.1821 15.0977 10.635C16.3247 8.60183 16.2766 6.19292 15.0977 4.04921V4.04917ZM7.97644 10.5245C6.07593 10.5245 4.51202 9.11009 4.51202 7.34205C4.51202 5.59621 6.05174 4.15959 7.97644 4.15959C9.90114 4.15959 11.4409 5.59602 11.4409 7.34205C11.4407 9.08803 9.90097 10.5245 7.97644 10.5245Z" fill="#0B1727"/>
                    </svg>
                    <span class="ms-2 d-none d-sm-inline-block">
                       Address 
                    </span>
                </a>
            </li>
            <li class="nav-item " role="presentation">
                <a href="{{ url('/account') }}" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 46 50" fill="none">
                        <path d="M12.1821 24.0354C11.6483 24.0703 11.113 24.2312 10.6096 24.5475C4.67604 28.2769 0.584241 34.6702 0.0109472 42.0471C-0.11072 43.6124 0.792271 44.9739 2.1956 45.5648C15.5079 51.1694 29.2591 51.6553 43.2421 45.5804C44.6378 44.9739 45.5282 43.6098 45.4066 42.0471C44.8324 34.6707 40.741 28.2773 34.8079 24.5475C33.4654 23.7038 31.8943 23.97 30.7359 24.765C28.3828 26.3794 25.5874 27.253 22.7093 27.2534C19.8311 27.253 17.0358 26.3793 14.6827 24.765C14.1033 24.3677 13.4204 24.1019 12.7155 24.0418C12.5391 24.027 12.3611 24.0236 12.1832 24.035L12.1821 24.0354Z" fill="black"/>
                        <path d="M22.7077 0C15.5088 0 9.64844 5.86015 9.64844 13.0592C9.64844 20.2583 15.5086 26.1184 22.7077 26.1184C29.9067 26.1184 35.7669 20.2583 35.7669 13.0592C35.7669 5.86015 29.9067 0 22.7077 0V0Z" fill="black"/>
                    </svg>
                    <span class="ms-2 d-none d-sm-inline-block">
                        Account 
                    </span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="{{ url('/frontend/logout') }}" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                        <path d="M9.0021 0C8.39497 0 7.7644 0.722488 7.77864 1.33336V9.33349C7.76901 10.038 8.32167 10.6668 9.0021 10.6668C9.68252 10.6668 10.2352 10.038 10.2256 9.33349V1.33336C10.2444 0.526485 9.60923 0 9.0021 0ZM4.6959 3.33339C4.58364 3.35913 4.47484 3.4014 4.37394 3.45839C0.511127 5.55381 -0.672222 9.85583 0.349226 13.417C1.37104 16.9771 4.57337 20 8.96162 20C13.2877 20 16.5305 17.1346 17.6149 13.625C18.6979 10.1155 17.5401 5.86033 13.5901 3.49953C13.0312 3.16143 12.2263 3.37959 11.8993 3.95786C11.5727 4.53601 11.7834 5.36977 12.3423 5.70791C15.4213 7.54768 16.0546 10.367 15.2802 12.8745C14.5058 15.382 12.2615 17.4578 8.96162 17.4578C5.64427 17.4578 3.42718 15.2575 2.68354 12.6661C1.93972 10.0747 2.62303 7.2687 5.50044 5.70753C5.98813 5.43253 6.24628 4.78416 6.08744 4.23326C5.92876 3.6822 5.36977 3.28623 4.81626 3.33263C4.77601 3.3307 4.73562 3.3307 4.69552 3.33263L4.6959 3.33339Z" fill="#0B1727"/>
                    </svg>
                    <span class="ms-2 d-none d-sm-inline-block">
                      Logout
                    </span>
                </a>
            </li>
        </ul>
        @endif
        <?php
         $total = 0;
         $coupan_discount_amount = 0;
        ?>
        <div class="my-xl-5 my-4">
            <div class="my_cart_heading mb-3 px-3">My Cart</div>
            <div class="row">
                <!-- <div class="wire_bangle_line mb-md-5"></div> -->
                @if(isset($cart_data) && count($cart_data))
                    <div class="tab-content1 clearfix col-lg-8">
                        <div class="tab-pane">
                            <div class="alert alert-warning inquiry-alert" role="alert" style="display:none;">
                                Maximum order amount limit exceeded. The Order will not be placed.
                            </div>
                            <div class="">
                                <table class="table table-bordered table-hover table_part_product mb-4 my_cart_table">
                                    <thead>
                                        <tr class="table-active">
                                            <th class="text-center">Item Details</th>
                                            <th style="width: 15%;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        <?php
                                            $total_qty = 0;
                                            // dd($cart_data);
                                        ?> 
                                        @foreach($cart_data as $data)
                                            <?php
                                                $diamond_name = "";
                                                $diamond_terms = "";
                                                if(isset($data['item_type']) && $data['item_type'] == 2){
                                                    $item = \App\Models\ProductVariant::with('product','product_variant_variants.attribute_term.attribute')->where('estatus',1)->where('id',$data['item_id'])->first();
                                                    if(!$item){
                                                        if(session()->has('customer')){
                                                            $cart_data = \App\Models\ItemCart::where(['user_id' => session('customer.id'),'item_id' => $data['item_id']])->first();
                                                            if($cart_data){
                                                            $cart_data->delete();
                                                            }
                                                            return response()->json(['status'=>'Item Removed from Wish List']);
                                                        }else{
                                                            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                                                            $cart_data = json_decode($cookie_data, true);

                                                            $item_id_list = array_column($cart_data, 'item_id');
                                                            $prod_id_is_there = $data['item_id'];

                                                            if(in_array($prod_id_is_there, $item_id_list))
                                                            {
                                                                foreach($cart_data as $keys => $values)
                                                                {
                                                                    if($cart_data[$keys]["item_id"] == $data['item_id'])
                                                                    {
                                                                        unset($cart_data[$keys]);
                                                                        $item_data = json_encode($cart_data);
                                                                        $minutes = Config::get('constants.cookie_time');
                                                                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                                                                        return response()->json(['status'=>'Item Removed from Cart']);
                                                                    }
                                                                }
                                                            }
                                                        }  
                                                    }
                                                    
                                                    $item_name = $item->product->product_title;
                                                    $sale_price = $item->sale_price;
                                                    $item_image = explode(',',$item->images); 
                                                    if(session()->has('customer')){
                                                        $specifications = json_decode($data['specification'],true);
                                                    }else{
                                                        $specifications = $data['specification'];
                                                    }
                                                    $diamond = \App\Models\Diamond::where('id',$data['diamond_id'])->first();
                                                    $diamond_name = $diamond->short_title;
                                                    $diamond_terms = $diamond->Clarity .' Clarity | '. $diamond->Color .' Color | '. $diamond->Lab .' Certified';
                                                    $sale_price_diamond = $diamond->Sale_Amt;
                                                    $item_image_diamond = explode(',',$diamond->Stone_Img_url); 
                                                    $url =  "";
                                                    $sale_price = $sale_price + $sale_price_diamond;
                                                } elseif(isset($data['item_type']) && $data['item_type'] == 0){
                                                    $item = \App\Models\ProductVariant::with('product','product_variant_variants.attribute_term.attribute')->where('estatus',1)->where('id',$data['item_id'])->first();
                                                    if(!$item){
                                                        if(session()->has('customer')){
                                                            $cart_data = \App\Models\ItemCart::where(['user_id' => session('customer.id'),'item_id' => $data['item_id']])->first();
                                                            if($cart_data){
                                                            $cart_data->delete();
                                                            }
                                                            return response()->json(['status'=>'Item Removed from Wish List']);
                                                        }else{
                                                            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                                                            $cart_data = json_decode($cookie_data, true);

                                                            $item_id_list = array_column($cart_data, 'item_id');
                                                            $prod_id_is_there = $data['item_id'];

                                                            if(in_array($prod_id_is_there, $item_id_list))
                                                            {
                                                                foreach($cart_data as $keys => $values)
                                                                {
                                                                    if($cart_data[$keys]["item_id"] == $data['item_id'])
                                                                    {
                                                                        unset($cart_data[$keys]);
                                                                        $item_data = json_encode($cart_data);
                                                                        $minutes = Config::get('constants.cookie_time');
                                                                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                                                                        return response()->json(['status'=>'Item Removed from Cart']);
                                                                    }
                                                                }
                                                            }
                                                        }  
                                                    }
                                                    $item_name = $item->product->product_title;
                                                    $sale_price = $item->sale_price;
                                                    $item_image = explode(',',$item->images); 
                                                    if(session()->has('customer')){
                                                        $specifications = json_decode($data['specification'],true);
                                                    }else{
                                                        $specifications = $data['specification'];
                                                    }
                                                    $url =  URL('product-details/'.$item['slug']); 
                                                }else{
                                                    $item = \App\Models\Diamond::where('id',$data['item_id'])->first();
                                                    if(!$item){
                                                        if(session()->has('customer')){
                                                            $cart_datas = \App\Models\ItemCart::where(['user_id' => session('customer.id'),'item_id' => $data['item_id']])->first();
                                                            //dd($cart_data);
                                                            if($cart_datas){
                                                            $cart_datas->delete();
                                                            }
                                                        
                                                        }else{
                                                            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                                                            $cart_datas = json_decode($cookie_data, true);

                                                            $item_id_list = array_column($cart_datas, 'item_id');
                                                            $prod_id_is_there = $data['item_id'];

                                                            if(in_array($prod_id_is_there, $item_id_list))
                                                            {
                                                                foreach($cart_datas as $keys => $values)
                                                                {
                                                                    if($cart_datas[$keys]["item_id"] == $data['item_id'])
                                                                    {
                                                                        unset($cart_datas[$keys]);
                                                                        $item_data = json_encode($cart_datas);
                                                                        $minutes = Config::get('constants.cookie_time');
                                                                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                                                                    
                                                                    }
                                                                }
                                                            }
                                                        }  
                                                    }else{
                                                        $item_name = $item->short_title;
                                                        $item_terms = $item->Clarity .' Clarity | '. $item->Color .' Color | '. $item->Lab .' Certified';
                                                        $sale_price = $item->Sale_Amt;
                                                        $item_image = explode(',',$item->Stone_Img_url); 
                                                        $url =  url('labdiamond-details/'.$item->slug);

                                                    }
                                                    
                                                    
                                                }
                                            ?>
                                            @if($item)
                                                <tr class="cartpage">
                                                    <td class="cart-product-name-info1">
                                                        <input type="hidden" class="variant_id" value="{{ $data['item_id'] }}">
                                                        <input type="hidden" class="diamond_id" value="{{ $data['diamond_id'] }}">
                                                        <input type="hidden" class="item_type" value="{{ $data['item_type'] }}">

                                                        <div class="row">
                                                            <div class="col-md-2 col-4 text-center">
                                                                <img src="{{ asset($item_image[0]) }}" alt="{!! $item_name !!}" class="cart-item-img">
                                                            </div>
                                                            <div class="col-md-10 col-8 p-0">
                                                                <div class="row">
                                                                    <div class="col-md-7 col-sm-12">
                                                                        <div class="">
                                                                            <a href="{{ $url }}" class="cart_product_name mb-2">{!! $item_name !!}</a>
                                                                        </div>
                                                                        @if(isset($data['item_type']) && $data['item_type'] != 1)   
                                                                            <?php
                                                                                $atr = 0;
                                                                            ?>
                                                                            <div class="cart_product_specification d-block mt-1">
                                                                                @foreach($item->product_variant_variants as $vitem)
                                                                                    <?php 
                                                                                    if($atr > 0){
                                                                                        echo ' | '; 
                                                                                    } 
                                                                                    ?>
                                                                                    {{ $vitem->attribute_term->attrterm_name }} 
                                                                                    <?php $atr++; ?>
                                                                                @endforeach
                                                                            </div>
                                                                            @if(isset($specifications))
                                                                                @foreach ($specifications as $specification)
                                                                                    <div class="cart_product_specification d-block mt-1">{{ $specification['key'] }}: {{ $specification['value'] }}</div>
                                                                                @endforeach
                                                                            @endif
                                                                        @endif
                                                                        @if(isset($data['item_type']) && $data['item_type'] == 1)
                                                                            <div class="cart_product_specification">
                                                                                {!! $item_terms !!}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-md-5 col-sm-12 mt-md-0 mt-2">
                                                                    <div class="">
                                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                                        <span class="cart-sub-total-price price_jq">{{ $sale_price }}</span>
                                                                    </div>
                                                                    <div class="wire_bangle_input mt-1">
                                                                        <div class="wire_bangle_number number-input">
                                                                            <button  class="sp-minus"></button>
                                                                            <input type="number" class="qty qty-input" min="1" size="1" placeholder="" onkeypress="return isNumber(event)" name="qty" id="qty" value="{{ $data['item_quantity'] }}" >
                                                                            <button  class="plus sp-plus "></button>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @if($data['item_type'] == 2)
                                                            <div class="row mt-4">
                                                                <div class="col-md-2 col-4 text-center">
                                                                    <img src="{{ asset($item_image_diamond[0]) }}" alt="{!! $diamond_name !!}" class="cart-item-img">
                                                                </div>
                                                                <div class="col-md-10 col-8">
                                                                    <div class="">
                                                                        <a href="{{ $url }}" class="cart_product_name mb-2">{!! $diamond_name !!}</a>
                                                                    </div>
                                                                    <div class="cart_product_specification d-block mt-1">
                                                                        {!! $diamond_terms !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="row mt-3">
                                                            <div class="col-md-2 col-5 text-center">
                                                                <a class="delete_cart_data">
                                                                    <i class="fa fa-trash"></i> Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="total_amount">
                                                        <i class="fa fa-usd" aria-hidden="true"></i><span class="cart-total-price ">{{ $sale_price * (int)$data['item_quantity'] }}</span>
                                                    </td>
                                                </tr>
                                                <?php
                                                    $total = $total + $sale_price * $data['item_quantity'];
                                                    $total_qty = $total_qty + $data['item_quantity'];
                                                ?>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button type="button" class="continue_shopping_btn mb-3" >Continue Shopping</button>
                        <!-- <div class="row mt-3 mt-lg-5 checkout_box mb-4">
                            <div class="col-sm-6 col-lg-6 checkout_box_col">
                                <div class="checkout_box_part_img">
                                    <img src="{{ asset('frontend/image/checkout-true.png') }}" alt="">
                                </div>
                                <div class="checkout_box_part_paragraph mt-3">
                                    Insured Shipping WorldWide <br> Delivered At Your Door Step
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 checkout_box_col mt-3 mt-sm-0">
                                <div class="checkout_box_part_img">
                                    <img src="{{ asset('frontend/image/checkout-calendar.png') }}" alt="">
                                </div>
                                <div class="checkout_box_part_paragraph mt-3">
                                    Estimated date of shipment<br>
                                    {{ date('dS M, Y', strtotime ('+10 day')) }}
                                </div>
                            </div>
                        </div>  -->
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12 mycard py-5 text-center">
                            <div class="mycards">
                                <h4>Your cart is currently empty!</h4>
                                <button type="button" class="continue_shopping_btn mt-3" >Continue Shopping</button>
                            </div>
                        </div>
                    </div>
                @endif
            
                @if(isset($cart_data) && count($cart_data))  
                    <div class="col-lg-4 px-md-3">
                        <div class="order_summary_box ms-0">
                            <div class="row order_summary_input_part">
                                <div class="col-8 col-sm-8 ps-0">
                                    <input type="text" placeholder="Enter your code" class="enter_yout_code_input" name="coupon_code" id="coupon_code">
                                    <div id="coupon_code-error" class="invalid-feedback animated fadeInDown" style="display: none;"></div>
                                </div>
                                <div class="col-4 col-sm-4 pe-0 ps-0">
                                    <button type="button" class="btn btn-primary apply_btn redeem" >Apply 
                                        <div class="spinner-border loadericonfa spinner-border-send-inquiry" role="status" style="display:none;">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="order_summary_proceed_checkout">
                                <div class="order_summary_heading text-start">
                                    Order Summary
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6 text-start ps-0 order_table_heading">
                                        Subtotal
                                    </div>
                                    <div class="col-6 text-end order_summary_price ">
                                        $<span class="cart-maintotal-price ">{{ $total }}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 text-start ps-0 order_table_heading">
                                        Coupon Discount
                                    </div>
                                    <?php 
                                        if(session()->has('coupon')){
                                            if(session('coupon.discount_type_id') == 1){
                                                $coupan_discount_per  =  session('coupon.coupon_amount');
                                                $coupan_discount_amount = ($total * $coupan_discount_per)/100;

                                            }else{
                                                $coupan_discount_amount  =  session('coupon.coupon_amount');
                                            }
                                        
                                        }else{
                                            $coupan_discount_amount  =  0;    
                                        }  
                                        ?>
                                    <input type="hidden" id="coupan_discount_amount" value="{{ $coupan_discount_amount }}">
                                    <div class="col-6 text-end order_summary_price ">
                                        $<span class="cart-maintotal-price coupan_discount_amount">{{ $coupan_discount_amount }}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 text-start ps-0 order_table_heading">
                                        Delivery Charge
                                    </div>
                                    <div class="col-6 text-end order_summary_price">
                                        0
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 text-start ps-0 order_table_heading total_amount_part">
                                        Total Amount
                                    </div>
                                    <div class="col-6 text-end order_summary_price total_amount_part_price">
                                        $<span class="cart-maintotal-price final_price">{{ $total - $coupan_discount_amount  }}</span>
                                    </div>
                                </div>
                                <div class="py-3 py-md-4 mt-4 order-payment-methohs">
                                    <div class="order_table_heading text-start">
                                        Accepted payment methods :
                                    </div>
                                    <div class="accepted_payment_methods_icon mt-3">
                                        <img src="{{ asset('frontend/image/payment_method.png') }}" alt="" class="">
                                    </div>
                                </div>
                                @if($setting->max_order_price >  $total - $coupan_discount_amount)
                                    <button type="button" class="btn btn-dark w-100 proceed_to_checkout_btn check_max_amounty" id="proceed_to_checkout_btn">Proceed to checkout</button>
                                @else
                                    <button type="button" class="btn btn-dark w-100 proceed_to_checkout_btn disabled" id="proceed_to_checkout_btn">Proceed to checkout</button>
                                @endif
                            </div>
                        </div>
                    </div> 
                @endif
            </div>
        </div>
        @if(isset($cart_data) && count($cart_data))
        <div class="row mb-5">
            <div class="col-md-6 col-lg-7 col-xl-8">
                <!-- <button type="button" class="continue_shopping_btn mb-3" >Continue Shopping</button> -->
                    <div class="row mt-3 mt-md-5 checkout_box mb-4">
                        <div class="col-sm-6 col-lg-6 checkout_box_col">
                            <div class="checkout_box_part_img">
                                <img src="{{ asset('frontend/image/checkout-true.png') }}" alt="">
                            </div>
                            <div class="checkout_box_part_paragraph mt-3">
                                Insured Shipping WorldWide <br> Delivered At Your Door Step
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 checkout_box_col mt-3 mt-sm-0">
                            <div class="checkout_box_part_img">
                                <img src="{{ asset('frontend/image/checkout-calendar.png') }}" alt="">
                            </div>
                            <div class="checkout_box_part_paragraph mt-3">
                                Estimated date of shipment<br>
                                {{ date('dS M, Y', strtotime ('+'.env('SHIPMENT_DAYS', 0).' day')) }}
                            </div>
                        </div>
                    </div>
            </div>
            <!-- <div class="col-md-6 col-lg-5 col-xl-4 text-end">
               
            </div> -->
        </div>
        @endif

    </div>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"  />
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   
    <script type="text/javascript">
     // Delete Cart Data
     function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
     $(document).ready(function () {
     if("{{ isset($total) }}"){
        if("{{ $setting->max_order_price <  $total - $coupan_discount_amount }}"){
            $('.inquiry-alert').show();
        } 
     }  
    
    $('.delete_cart_data').click(function (e) {
        e.preventDefault();

        var variant_id = $(this).closest(".cartpage").find('.variant_id').val();
    
        var data = {
            '_token': $('input[name=_token]').val(),
            "product_id": variant_id,
        };

        // $(this).closest(".cartpage").remove();

        $.ajax({
            url: "{{ url('/delete-from-cart') }}",
            type: 'DELETE',
            data: data,
            success: function (response) {
                window.location.reload();
            }
        });
    });


    $('body').on('change', '.qty', function () {  
        
        var sum = 0;
        var total = 0;
        var maintotal = 0;
        var qtytotal = 0;
        $('.price_jq').each(function () {
            var price = $(this);
            var count = price.closest('tr').find('.qty');
            var amount = Number(price.html());
            var qty = Number(count.val());
            sum = amount * qty;
            total = total + sum;
            console.log(price.closest('tr').find('.cart-total-price'));
            price.closest('tr').find('.cart-total-price').html(sum);
            qtytotal = qtytotal + qty;
        })

        $('.cart-maintotal-price').html(total);
        $('.total_qty').html(qtytotal);

        if("{{ session()->has('coupon') }}"){
            if("{{ session('coupon.discount_type_id') }}" == 1){
                var coupan_discount_per  =  "{{ session('coupon.coupon_amount') }}";
                var coupan_discount_amount = total * coupan_discount_per/100;
            }else{
                var coupan_discount_amount  =  "{{ session('coupon.coupon_amount') }}";
            }
        }else{
            var coupan_discount_amount  =  0;    
        } 
        //var coupan_discount_amount = $('#coupan_discount_amount').val();
        $('.coupan_discount_amount').html(coupan_discount_amount);
        var main_total =  total - coupan_discount_amount;
        var max_order_amount = "{{ $setting->max_order_price }}";
        if(main_total < max_order_amount){
            $("#proceed_to_checkout_btn").addClass("check_max_amounty");
            $("#proceed_to_checkout_btn").removeClass("disabled");
        }else{
            $("#proceed_to_checkout_btn").removeClass("check_max_amounty");
            $("#proceed_to_checkout_btn").addClass("disabled");
            
        }

        $('.final_price').html(main_total);
        var quantity = $(this).closest(".cartpage").find('.qty-input').val();
        var variant_id = $(this).closest(".cartpage").find('.variant_id').val();
        var diamond_id = $(this).closest(".cartpage").find('.diamond_id').val();
        var item_type = $(this).closest(".cartpage").find('.item_type').val();
        var data = {
            '_token': $('input[name=_token]').val(),
            'quantity':quantity,
            'variant_id':variant_id,
            'diamond_id':diamond_id,
            'item_type':item_type,
            'action':'update_qty'
        };
        $.ajax({
            url: "{{ url('/add-to-cart') }}",  
            method: "POST",
            data: data,
            success: function (response) {
                location.reload();
            }
        });

    
    });

    $('.sp-plus').on('click', function(){
        var count = $(this).closest('tr').find('.qty').val();
        var newVal = (parseInt(count,10) +1);
        $(this).closest('tr').find('.qty').val(newVal).trigger('change');
    });

    $('.sp-minus').on('click', function(){
        var count = $(this).closest('tr').find('.qty').val();
        if ($(this).next().val() > 1) {
        var newVal = (parseInt(count,10) -1);
        $(this).closest('tr').find('.qty').val(newVal).trigger('change');
        }
    });

    $('.redeem').click(function (e) {
        e.preventDefault();
        var btn = $(this);
        $(btn).prop('disabled',true);
        $(btn).find('.loadericonfa').show();

        var coupon_code = $('#coupon_code').val();
        //var variant_id = $(this).closest(".cartpage").find('.variant_id').val();
    
        var data = {
            '_token': $('input[name=_token]').val(),
            "coupon_code": coupon_code,
        };
        $.ajax({
            url: "{{ url('/redeem_coupon') }}",
            type: 'Post',
            data: data,
            success: function (response) {
                if(response.status == 'failed'){
                    $(btn).prop('disabled',false);
                    $(btn).find('.loadericonfa').hide();

                    if (response.errors.coupon_code) {
                        $('#coupon_code-error').show().text(response.errors.coupon_code);
                    } else {
                        $('#coupon_code-error').hide();
                    }
                    
                }else if(response.status == 200){
                    $(btn).find('.loadericonfa').hide();
                    $(btn).prop('disabled',false);
                    if(response.data.discount_type_id == 1){
                    var coupon_amount_per = response.data.coupon_amount;
                    var total  = $('.cart-maintotal-price').html();
                    var coupon_amount = (total * coupon_amount_per)/100;
                    
                    }else{
                        var coupon_amount = response.data.coupon_amount;
                    }
                    $('#coupan_discount_amount').val(coupon_amount);
                    $('.coupan_discount_amount').html(coupon_amount);
                    toastr.success(response.message,'Success',{timeOut: 5000});
                    $("#coupon_code").val('');
                    $(".qty").change();
                }else{
                    $(btn).find('.loadericonfa').hide();
                    $(btn).prop('disabled',false);
                    toastr.error(response.message,'Success',{timeOut: 5000});
                }
            }
        });
    });

    $('.check_max_amounty').click(function (e) {
        e.preventDefault();
        var check_login = "{{ is_login() }}";
        if(check_login) {
            location.href="{{ url('/checkout') }}";
        } else {
            location.href="{{ url('/login') }}";
            "{{ Session::put('afterLogin','/cart');}}";
        }
    });

    $('.continue_shopping_btn').click(function () {
        location.href="{{ url('/shop') }}";
    });

    });
     
</script>





@endsection