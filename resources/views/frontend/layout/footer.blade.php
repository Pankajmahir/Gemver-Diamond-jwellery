<footer class="footer-part-section mt-0">
    <div class="container">
            <div class="row mb-md-5">
                <div class="col-lg-2">
                    <div class="footer-logo mb-3">
                        <img src="{{ URL('images/company/'.$settings->company_logo) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div>
                        <div class="footer-part-heading mb-3">Trusted By</div>
                        <div class="col-md-12 text-center">
                            <div id="trustby-slider" class="owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#" class="">
                                        <img src="{{ URL('frontend/image/gia.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="">
                                        <img src="{{ URL('frontend/image/SSL-Secure-Connection.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="">
                                        <img src="{{ URL('frontend/image/trust-pilot.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="">
                                        <img src="{{ URL('frontend/image/lets-encrypt.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="">
                                        <img src="{{ URL('frontend/image/McAfee-Logo.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="">
                            <div class="image-box">
                                <img src="{{ URL('images/company/'.$settings->company_logo) }}" alt="">
                            </div>  
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-2 text-lg-end text-start mt-3 mt-lg-0">
                    <div class="footer-part-heading mb-3">stay in touch !</div>
                    <ul class="footer-social-media-icons">
                        @if($settings->instagram_url != "")
                        <li>
                            <a href="{{ $settings->instagram_url}}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34659 0.075C8.67955 0.0136363 9.10455 0 12.5 0C15.8955 0 16.3205 0.0147727 17.6523 0.075C18.9841 0.135227 19.8932 0.347727 20.6886 0.655682C21.5216 0.970455 22.2773 1.4625 22.9023 2.09886C23.5386 2.72273 24.0295 3.47727 24.3432 4.31136C24.6523 5.10682 24.8636 6.01591 24.925 7.34545C24.9864 8.68068 25 9.10568 25 12.5C25 15.8955 24.9852 16.3205 24.925 17.6534C24.8648 18.983 24.6523 19.892 24.3432 20.6875C24.0295 21.5217 23.5378 22.2775 22.9023 22.9023C22.2773 23.5386 21.5216 24.0295 20.6886 24.3432C19.8932 24.6523 18.9841 24.8636 17.6545 24.925C16.3205 24.9864 15.8955 25 12.5 25C9.10455 25 8.67955 24.9852 7.34659 24.925C6.01705 24.8648 5.10795 24.6523 4.3125 24.3432C3.47832 24.0295 2.72252 23.5378 2.09773 22.9023C1.4618 22.278 0.969676 21.5226 0.655682 20.6886C0.347727 19.8932 0.136364 18.9841 0.075 17.6545C0.0136363 16.3193 0 15.8943 0 12.5C0 9.10455 0.0147727 8.67955 0.075 7.34773C0.135227 6.01591 0.347727 5.10682 0.655682 4.31136C0.97014 3.47737 1.46263 2.72195 2.09886 2.09773C2.72277 1.46193 3.47781 0.969822 4.31136 0.655682C5.10682 0.347727 6.01591 0.136364 7.34545 0.075H7.34659ZM17.5511 2.325C16.233 2.26477 15.8375 2.25227 12.5 2.25227C9.1625 2.25227 8.76705 2.26477 7.44886 2.325C6.22955 2.38068 5.56818 2.58409 5.12727 2.75568C4.54432 2.98295 4.12727 3.25227 3.68977 3.68977C3.27505 4.09324 2.95589 4.58441 2.75568 5.12727C2.58409 5.56818 2.38068 6.22955 2.325 7.44886C2.26477 8.76705 2.25227 9.1625 2.25227 12.5C2.25227 15.8375 2.26477 16.233 2.325 17.5511C2.38068 18.7705 2.58409 19.4318 2.75568 19.8727C2.95568 20.4148 3.275 20.9068 3.68977 21.3102C4.09318 21.725 4.58523 22.0443 5.12727 22.2443C5.56818 22.4159 6.22955 22.6193 7.44886 22.675C8.76705 22.7352 9.16136 22.7477 12.5 22.7477C15.8386 22.7477 16.233 22.7352 17.5511 22.675C18.7705 22.6193 19.4318 22.4159 19.8727 22.2443C20.4557 22.017 20.8727 21.7477 21.3102 21.3102C21.725 20.9068 22.0443 20.4148 22.2443 19.8727C22.4159 19.4318 22.6193 18.7705 22.675 17.5511C22.7352 16.233 22.7477 15.8375 22.7477 12.5C22.7477 9.1625 22.7352 8.76705 22.675 7.44886C22.6193 6.22955 22.4159 5.56818 22.2443 5.12727C22.017 4.54432 21.7477 4.12727 21.3102 3.68977C20.9067 3.27508 20.4156 2.95592 19.8727 2.75568C19.4318 2.58409 18.7705 2.38068 17.5511 2.325V2.325ZM10.9034 16.3534C11.7951 16.7246 12.7879 16.7747 13.7124 16.4951C14.6369 16.2156 15.4357 15.6238 15.9723 14.8207C16.5089 14.0177 16.7501 13.0533 16.6546 12.0922C16.5591 11.1311 16.133 10.2329 15.4489 9.55114C15.0128 9.11531 14.4855 8.7816 13.9049 8.57403C13.3244 8.36646 12.705 8.29018 12.0915 8.3507C11.4779 8.41122 10.8854 8.60702 10.3566 8.92401C9.82779 9.241 9.37585 9.6713 9.0333 10.1839C8.69075 10.6965 8.46612 11.2787 8.37559 11.8886C8.28505 12.4984 8.33085 13.1208 8.5097 13.7108C8.68855 14.3008 8.996 14.8439 9.40991 15.3008C9.82382 15.7578 10.3339 16.1173 10.9034 16.3534ZM7.95682 7.95682C8.55344 7.3602 9.26173 6.88694 10.0412 6.56405C10.8208 6.24116 11.6563 6.07497 12.5 6.07497C13.3437 6.07497 14.1792 6.24116 14.9588 6.56405C15.7383 6.88693 16.4466 7.3602 17.0432 7.95682C17.6398 8.55344 18.1131 9.26173 18.436 10.0412C18.7588 10.8208 18.925 11.6563 18.925 12.5C18.925 13.3437 18.7588 14.1792 18.436 14.9588C18.1131 15.7383 17.6398 16.4466 17.0432 17.0432C15.8383 18.2481 14.204 18.925 12.5 18.925C10.796 18.925 9.16174 18.2481 7.95682 17.0432C6.75189 15.8383 6.07497 14.204 6.07497 12.5C6.07497 10.796 6.75189 9.16174 7.95682 7.95682V7.95682ZM20.35 7.03182C20.4978 6.89235 20.6162 6.72464 20.6981 6.53861C20.7799 6.35258 20.8236 6.15201 20.8266 5.94878C20.8296 5.74556 20.7917 5.5438 20.7153 5.35547C20.6389 5.16713 20.5255 4.99603 20.3818 4.85232C20.2381 4.7086 20.067 4.59518 19.8786 4.51877C19.6903 4.44236 19.4885 4.40452 19.2853 4.40748C19.0821 4.41044 18.8815 4.45415 18.6955 4.53602C18.5095 4.61788 18.3417 4.73624 18.2023 4.88409C17.931 5.17162 17.7825 5.55355 17.7883 5.94878C17.7941 6.34402 17.9536 6.72145 18.2331 7.00096C18.5126 7.28046 18.8901 7.44003 19.2853 7.44579C19.6805 7.45156 20.0625 7.30306 20.35 7.03182V7.03182Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        @endif
                        @if($settings->youtub_url != "")
                        <li>
                            <a href="{{ $settings->youtub_url}}" target="_blank">
                                <svg width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.6938 4.60415C29.6938 4.60415 29.4008 2.51292 28.4995 1.59463C27.3574 0.386918 26.0784 0.379182 25.4938 0.309097C21.299 0 14.9986 0 14.9986 0H14.9876C14.9876 0 8.69003 0 4.49288 0.309097C3.9059 0.381275 2.6288 0.386281 1.48716 1.59463C0.585179 2.51292 0.29853 4.60415 0.29853 4.60415C0.29853 4.60415 0 7.05818 0 9.5174V11.817C0 14.271 0.29835 16.73 0.29835 16.73C0.29835 16.73 0.591209 18.8213 1.48698 19.7411C2.62862 20.9489 4.12901 20.9096 4.79879 21.0385C7.20043 21.2704 15.0006 21.3402 15.0006 21.3402C15.0006 21.3402 21.3065 21.3289 25.5013 21.0256C26.0884 20.9555 27.3649 20.9484 28.5071 19.74C29.409 18.8218 29.7013 16.7282 29.7013 16.7282C29.7013 16.7282 30 14.2742 30 11.8152V9.51576C29.994 7.06174 29.6954 4.6027 29.6954 4.6027L29.6938 4.60415ZM11.8911 14.6068V6.0801L19.9952 10.3577L11.8911 14.6068Z" fill="black"/>
                                    </svg>
                            </a>
                        </li>
                        @endif
                        @if($settings->facebook_url != "")
                        <li>
                            <a href="{{ $settings->facebook_url}}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="25" viewBox="0 0 14 25" fill="none">
                                    <path d="M9.16671 8.33333V5.83333C9.16671 4.75 9.41671 4.16667 11.1667 4.16667H13.3334V0H10C5.83337 0 4.16671 2.75 4.16671 5.83333V8.33333H0.833374V12.5H4.16671V25H9.16671V12.5H12.8334L13.3334 8.33333H9.16671Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        @endif
                        @if($settings->twiter_url != "")
                        <li class="me-0">
                            <a href="{{ $settings->twiter_url}}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path d="M12.5 2.51595e-06C9.58548 -0.00184586 6.76191 1.01481 4.51753 2.87418C2.27315 4.73355 0.749042 7.31874 0.208749 10.1828C-0.331545 13.0468 0.145938 16.0096 1.55864 18.5588C2.97133 21.1081 5.23044 23.0836 7.94533 24.1438C7.83595 23.1547 7.73595 21.6344 7.98752 20.5547C8.21564 19.5781 9.45314 14.3406 9.45314 14.3406C9.45314 14.3406 9.0797 13.5922 9.0797 12.4859C9.0797 10.7469 10.0875 9.45 11.3422 9.45C12.4078 9.45 12.9235 10.25 12.9235 11.2109C12.9235 12.2828 12.2406 13.8859 11.8875 15.3719C11.5938 16.6156 12.5125 17.6313 13.7391 17.6313C15.961 17.6313 17.6688 15.2875 17.6688 11.9063C17.6688 8.91406 15.5172 6.82188 12.4469 6.82188C8.89064 6.82188 6.80314 9.48906 6.80314 12.2453C6.80314 13.3203 7.2172 14.4719 7.73283 15.0984C7.77723 15.1457 7.80863 15.2036 7.82397 15.2666C7.8393 15.3296 7.83805 15.3955 7.82033 15.4578C7.72502 15.8516 7.51408 16.7016 7.47345 16.875C7.41877 17.1031 7.2922 17.1516 7.0547 17.0422C5.4922 16.3156 4.5172 14.0328 4.5172 12.1984C4.5172 8.25625 7.38283 4.63594 12.7766 4.63594C17.1125 4.63594 20.4828 7.725 20.4828 11.8547C20.4828 16.1625 17.7656 19.6297 13.9969 19.6297C12.7297 19.6297 11.5391 18.9719 11.1313 18.1938L10.3531 21.1656C10.0703 22.2516 9.30783 23.6125 8.79845 24.4422C10.5172 24.9736 12.3303 25.1278 14.1141 24.8942C15.8978 24.6606 17.6101 24.0447 19.134 23.0886C20.6579 22.1325 21.9575 20.8588 22.944 19.3544C23.9305 17.85 24.5806 16.1504 24.85 14.3717C25.1193 12.593 25.0016 10.7771 24.5048 9.04805C24.008 7.31902 23.1438 5.7176 21.9714 4.35318C20.7989 2.98876 19.3457 1.8935 17.7111 1.14221C16.0765 0.390924 14.299 0.0013161 12.5 2.51595e-06V2.51595e-06Z" fill="white"></path>
                                </svg>
                            </a>
                        </li>
                        @endif
                    
                    </ul>
                </div>
            </div>
            <div class="line"></div>
            <div class="row mt-4 mt-md-5">
                <div class="col-md-2 footer-col mb-md-0">
                    <div class="footer-heading mb-4 mb-md-4 d-flex justify-content-between"> 
                        about
                       <div class="footer-angle d-block d-md-none">
                       <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" viewBox="0 0 50 30" fill="none" class="float-end">
                            <path d="M0.686462 0.753148C1.60174 -0.251049 3.08575 -0.251049 4.00103 0.753148L25 23.7919L45.9991 0.753148C46.9144 -0.251049 48.3982 -0.251049 49.3135 0.753148C50.2288 1.75735 50.2288 3.38551 49.3135 4.38971L26.6572 29.2468C25.7419 30.2511 24.2582 30.2511 23.3428 29.2468L0.686462 4.38971C-0.228821 3.38551 -0.228821 1.75735 0.686462 0.753148Z" fill="#212121"/>
                        </svg>
                       </div>
                    </div>
                    <?php $footer1 = \App\Models\FooterPage::where('page_id', 1)->get(); ?>
                    <ul class="footer-ul-part d-md-block">
                        @foreach($footer1 as $fo1)
                        <li>
                            <a href="{{ url($fo1->value)}}">{{ ($fo1->title != "")?$fo1->title:$fo1->value }}</a>
                        </li>
                        {{-- <li>
                            <a href="{{ Route('frontend.testimonials') }}">testimonials</a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.blogs') }}">our blogs</a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.termcondition') }}" class="">
                                Terms & Conditions 
                            </a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.privacypolicy') }}" class="">
                                Privacy Policy 
                            </a>
                        </li> --}}
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 footer-col mb-md-0">
                    <div class="footer-heading mb-4 mb-md-4 d-flex justify-content-between">
                        Why Gemver?
                    <div class="footer-angle d-block d-md-none">
                       <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" viewBox="0 0 50 30" fill="none" class="float-end">
                            <path d="M0.686462 0.753148C1.60174 -0.251049 3.08575 -0.251049 4.00103 0.753148L25 23.7919L45.9991 0.753148C46.9144 -0.251049 48.3982 -0.251049 49.3135 0.753148C50.2288 1.75735 50.2288 3.38551 49.3135 4.38971L26.6572 29.2468C25.7419 30.2511 24.2582 30.2511 23.3428 29.2468L0.686462 4.38971C-0.228821 3.38551 -0.228821 1.75735 0.686462 0.753148Z" fill="#212121"/>
                        </svg>
                       </div>
                    </div>
                    <?php $footer2 = \App\Models\FooterPage::where('page_id', 2)->get(); ?>
                    <ul class="footer-ul-part d-md-block">
                        {{-- <li>
                            <a href="{{ Route('frontend.freeshipping') }}">Free Shipping </a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.returndays') }}">Free 30 day Returns</a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.lifetimeupgrade') }}">Lifetime Upgrade</a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.freeresizing') }}">Free Resizing</a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.lifetimewarranty') }}">Lifetime Warranty</a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.freeengraving') }}">Free Engraving</a>
                        </li>
                        <li>
                            <a href="{{ Route('frontend.paymentoptions') }}">Payment Options</a>
                        </li> --}}
                        @foreach($footer2 as $fo2)
                        <li>
                            <a href="{{ url($fo2->value)}}">{{ ($fo2->title != "")?$fo2->title:$fo2->value }}</a>
                        </li>
                        
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 footer-col mb-md-0">
                    <div class="footer-heading mb-4 mb-md-4 d-flex justify-content-between">
                        contact
                        <div class="footer-angle d-block d-md-none">
                       <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" viewBox="0 0 50 30" fill="none" class="float-end">
                            <path d="M0.686462 0.753148C1.60174 -0.251049 3.08575 -0.251049 4.00103 0.753148L25 23.7919L45.9991 0.753148C46.9144 -0.251049 48.3982 -0.251049 49.3135 0.753148C50.2288 1.75735 50.2288 3.38551 49.3135 4.38971L26.6572 29.2468C25.7419 30.2511 24.2582 30.2511 23.3428 29.2468L0.686462 4.38971C-0.228821 3.38551 -0.228821 1.75735 0.686462 0.753148Z" fill="#212121"/>
                        </svg>
                       </div>
                    </div>
                    <?php $footer3 = \App\Models\FooterPage::where('page_id', 3)->get(); ?>
                    <ul class="footer-ul-part d-md-block">
                        
                        @foreach($footer3 as $fo3)
                        <li>
                            <a href="{{ url($fo3->value)}}">{{ ($fo3->title != "")?$fo3->title:$fo3->value }}</a>
                        </li>
                        
                        @endforeach
                        
                        <li>
                            <a href="tel:+91{{ $settings->company_mobile_no }}"><i class="fa fa-phone"></i> +91 {{ $settings->company_mobile_no }}</a>
                        </li>
                        <li >
                            <a class="text-transform: lowercase;" href="mailto:{{ $settings->company_email }}"><i class="fa fa-envelope"></i> {{ $settings->company_email }}</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-address-card"></i> {{ $settings->company_address }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 footer-col mb-4 mb-md-4">
                    <div class="footer-heading mb-4 mb-md-4 d-flex justify-content-between">
                        Newsletter
                    </div>
                    <p class="footer-paragraph mb-3">Sign up to receive infrequent emails about sample sales, special deals, and new releases.</p>
                    <div class="mb-4">
                        <form action="test" method="post" id="NewsLatterForm">
                            @csrf
                            <div class="alert alert-success" id="success-alert-newslatter" style="display: none;">
                            </div>
                            <div class="d-flex">
                                <span class="email_input mb-0 d-inline-block"> 
                                    <input type="text" required="required" name="newslatteremail" id="newslatteremail" placeholder="email address">
                                </span>
                                <span class="ms-2">
                                    <button type="submit" id="save_newNewsLatterBtn" class="submit_btn">submit</button>
                                </span>
                            </div>
                            <div id="newslatteremail-error" class="invalid-feedback animated fadeInDown" style="display: none;"></div>
                        </form>    
                    </div>
                    <div class="">
                        <div class="footer-heading mb-4 mb-md-4 d-flex justify-content-between">
                            Payments Accepted
                        </div>
                        <img src="{{ asset('frontend/image/payment-cards.png') }}" alt="Payments Accepted">
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{asset('frontend/')}}" id="asset" name="asset">
            <div class="footer-copyright-text text-center mt-md-4 pt-md-3 ">
                ©2023 Gemver. All Rights Reserved
            </div>
        </div>
    </footer>

    <a href="https://api.whatsapp.com/send?phone=+91{{ $settings->company_mobile_no }}&text=Hello" target="_blank" class="chat-icon-part">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/></svg>
    </a>

    

    <a class="bottom-to-top-btn scrollToTop" href="" style="">
        <svg xmlns="http://www.w3.org/2000/svg" width="9" class="" height="13" viewBox="0 0 9 13" fill="none"><path d="M8.36767 6.49984L2.10726 0.239422L0.633301 1.7113L5.42497 6.49984L0.633301 11.2873L2.10622 12.7603L8.36767 6.49984Z" fill="#0B1727"></path></svg>
    </a>

<script type="text/javascript">
$( document ).ready(function() {    
$('body').on('click', '#save_newNewsLatterBtn', function () {
    save_newslatter($(this),'save_new');
});

function save_newslatter(btn,btn_type){
    $(btn).prop('disabled',true);
    $(btn).find('.loadericonfa').show();
    var action  = $(btn).attr('data-action');

    var formData = new FormData($("#NewsLatterForm")[0]);
    formData.append('action',action);

    $.ajax({
        type: 'POST',
        url: "{{ route('frontend.newslatter.save') }}",
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
           
            if(res.status == 'failed'){
                $(btn).prop('disabled',false);
                $(btn).find('.loadericonfa').hide();
                if (res.errors.newslatteremail) {
                    $('#newslatteremail-error').show().text(res.errors.newslatteremail);
                } else {
                    $('#newslatteremail-error').hide();
                }

            }
            if(res.status == 200){
                $('#newslatteremail-error').hide();
                document.getElementById("NewsLatterForm").reset();
                $(btn).prop('disabled',false);
                $(btn).find('.loadericonfa').hide();
                //location.href="{{ route('frontend.contactus')}}";
                var success_message = 'Thank You For subscribe';
                $('#success-alert-newslatter').text(success_message);
                $("#success-alert-newslatter").fadeTo(2000, 500).slideUp(500, function() {
                  $("#success-alert-newslatter").slideUp(1000);
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
