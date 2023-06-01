<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOA Costing (Cambodia) Co,Ltd</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="{{asset('js\tinymce\js\tinymce\tinymce.min.js')}}"></script>
    <link rel="icon" href="{{URL('css/file.jpg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    @extends('home//layouts/bar')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 slide-container">
                <div class="slide-box">
                    <div class="slide">
                        
                    </div>
                    <div class="next"><i class="fa-solid fa-angle-right"></i></div>
                    <div class="back"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="pagination">
    
                    </div>
                </div>                 
            </div>
        </div>
    </div>
    <div class="container-fluid cate-menu-container">
        <div class="container menu-container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 cate-menu">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-color: #97d8b3">
                                <a href="">
                                    <span>WOOD COATING</span>
                                </a> 
                            </div>
                            <div class="swiper-slide" style="background-color: #d78177">
                                <a href="">
                                    <span>HEAVY DUTY COATING</span>    
                                </a>
                            </div>
                            <div class="swiper-slide" style="background-color: #5c5c5c">
                                <a href="">
                                    <span>METAL COATING</span> 
                                </a> 
                            </div>
                            <div class="swiper-slide" style="background-color: #e3915c">
                                <a href="">
                                    <span>DECORATIVE COATING</span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="background-color: #c1c8c9">
                                <a href="">
                                   <span>CONSTRUCTION CHEMICALS</span> 
                                </a>
                            </div>
                            <div class="swiper-slide" style="background-color: #cfafdc">
                                <a href="">
                                    <span>SPECIAL PAINT</span>    
                                </a>
                            </div>
                            <div class="swiper-slide" style="background-color: #97d8b3">
                                <a href="">
                                    <span>WOOD COATING</span>
                                </a> 
                            </div>
                            <div class="swiper-slide" style="background-color: #d78177">
                                <a href="">
                                    <span>HEAVY DUTY COATING</span>    
                                </a>
                            </div>
                            <div class="swiper-slide" style="background-color: #5c5c5c">
                                <a href="">
                                    <span>METAL COATING</span> 
                                </a> 
                            </div>
                            <div class="swiper-slide" style="background-color: #e3915c">
                                <a href="">
                                    <span>DECORATIVE COATING</span>
                                </a>
                            </div>
                            <div class="swiper-slide" style="background-color: #c1c8c9">
                                <a href="">
                                   <span>CONSTRUCTION CHEMICALS</span> 
                                </a>
                            </div>
                            <div class="swiper-slide" style="background-color: #cfafdc">
                                <a href="">
                                    <span>SPECIAL PAINT</span>    
                                </a>
                            </div>
                        </div>
                        <div class="next-cate"><i class="fa-solid fa-angle-right"></i></div>
                        <div class="back-cate"><i class="fa-solid fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container title">
            <div class="row">
                <div class="col-xl-12 head-title">
                    <h1>Our Product</h1>
                </div>
            </div>
        </div>
        <div class="container product-container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                   <div class="product">
                        <a href="{{route('product-detail')}}" target="_blank">
                            <div class="img-box">
                                <img src="{{asset('img/pro1.jpg')}}" alt="">
                                <span class="pcode"> Code: </span>
                                <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                                <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                                <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                            </div>
                            <div class="txt-box">
                                <h2>Interior</h2>
                                <h1>SuperShield Duraclean Matt</h1>
                            </div>
                        </a>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                         <div class="img-box">
                            <img src="{{asset('img/pro.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                         </div>
                         <div class="txt-box">
                             <h2>Interior</h2>
                             <h1>SuperShield Duraclean Matt</h1>
                         </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                         <div class="img-box">
                            <img src="{{asset('img/pro3.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                         </div>
                         <div class="txt-box">
                             <h2>Interior</h2>
                             <h1>SuperShield Duraclean Matt</h1>
                         </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                            <div class="img-box">
                                <img src="{{asset('img/pro4.jpg')}}" alt="">
                                <span class="pcode"> Code: </span>
                                <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                                <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                                <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                            </div>
                            <div class="txt-box">
                                <h2>Interior</h2>
                                <h1>SuperShield Duraclean Matt</h1>
                            </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                         <div class="img-box">
                            <img src="{{asset('img/pro5.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                         </div>
                         <div class="txt-box">
                             <h2>Interior</h2>
                             <h1>SuperShield Duraclean Matt</h1>
                         </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro6.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro7.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro8.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro9.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro10.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro11.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro12.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro13.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro14.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro15.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product-box">
                    <div class="product">
                        <div class="img-box">
                            <img src="{{asset('img/pro16.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
                            <div class="shop"><i class="fa-solid fa-cart-plus"></i></div>
                            <div class="fb"><i class="fa-brands fa-square-facebook"></i></div>
                            <div class="link-cp"><i class="fa-solid fa-link"></i></div>
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container title">
            <div class="row">
                <div class="col-xl-12 video-title">
                    <h1>Video</h1>
                </div>
            </div>
        </div>
        <div class="container video-container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 video-box">
                   <div class="video">
                        <div class="img-box">
                            <img src="{{asset('img/video-img.jpg')}}" alt="">
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 video-box">
                    <div class="video">
                        <div class="img-box">
                            <img src="{{asset('img/video-img2.jpg')}}" alt="">
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 video-box">
                    <div class="video">
                        <div class="img-box">
                            <img src="{{asset('img/video-img3.jpg')}}" alt="">
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 video-box">
                    <div class="video">
                        <div class="img-box">
                            <img src="{{asset('img/video-img4.jpg')}}" alt="">
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid knowledge">
        <div class="container title">
            <div class="row">
                <div class="col-xl-12 video-title">
                    <h1>Knowledge</h1>
                </div>
            </div>
        </div>
        <div class="container video-container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 video-box">
                   <div class="video">
                        <div class="img-box">
                            <img src="{{asset('img/k1.jpg')}}" alt="">
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                   </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 video-box">
                    <div class="video">
                        <div class="img-box">
                            <img src="{{asset('img/k2.jpg')}}" alt="">
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 video-box">
                    <div class="video">
                        <div class="img-box">
                            <img src="{{asset('img/k3.jpg')}}" alt="">
                        </div>
                        <div class="txt-box">
                            <h2>Interior</h2>
                            <h1>SuperShield Duraclean Matt</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid refference">
        <div class="container title">
            <div class="row">
                <div class="col-xl-12 video-title">
                    <h1>PROJECT REFFERENCE</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid careers">
        <div class="container title">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 job-box">
                    <div class="box">
                        <h2 class="head-title">  
                            Jobs                    
                        </h2>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    {{-- contact-use --}}
    <div class="container-fluid contact-box-container">
        <div class="container contact-box">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 title-box">
                    <h1>
                        OUR INFORMATION
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 item-box">
                    <div class="box">
                        <i class="fas fa-map-marker-alt"></i>
                    </div> 
                    <p>
                       TOA Coating (Cambodia) Co.,Ltd 
                        <br>Sales Office: The Point Community Mall
                        <br>No.#113C, Mao Tse Tung Blvd, Sangkat Toul Svay Prey,
                        <br>Khan Beong Keng Kong Phnom Penh, Cambodia.                
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 item-box">
                    <div class="box">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <p>
                        info.toacambodia@toagroup.com 
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 item-box">
                    <div class="box">
                        <i class="fas fa-phone"></i>
                    </div>
                    <p>
                        Product information: (+855) 095 999 538
                    </p>
                </div>
            </div>
            <div class="row frm-submit">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 title-box">
                    <h1>
                        Submit Your Information                
                    </h1>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 thanks-contact">
                    <h1>
                    </h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 control">
                    <input type="text" name="" id="txt-fname" class="frm-control" placeholder="Last Name" autocomplete="off">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 control">
                    <input type="text" name="" id="txt-lname" class="frm-control" placeholder="First Name" autocomplete="off">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 control">
                    <input type="text" name="" id="txt-phone" class="frm-control" placeholder="Phone" autocomplete="off">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 control">
                    <input type="text" name="" id="txt-email" class="frm-control" placeholder="Email" autocomplete="off">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 control">
                    <textarea name="" id="txt-sms" rows="10" class="frm-control" placeholder="Description"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm012 col-12 submit-footer">
                    <a class="btn-submit-contact">Submit</a>
                </div>
            </div>
        </div>
    </div>

    @extends('home//layouts/footer')
</body>
<script src="{{asset('js/home/home.js')}}"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 7.5,
        spaceBetween: 20,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".next-cate",
            prevEl: ".back-cate",
        },
        breakpoints: {
            // when window width is <= 1200px
            1200: {
                slidesPerView: 7.5,
                spaceBetween: 20,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                // autoplay: {
                //     delay: 2500,
                //     disableOnInteraction: false,
                // },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".next-cate",
                    prevEl: ".back-cate",
                },
            },
            // when window width is <= 992px
            992: {
                slidesPerView: 6.5,
                spaceBetween: 20,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".next-cate",
                    prevEl: ".back-cate",
                },
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 5.5,
                spaceBetween: 20,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".next-cate",
                    prevEl: ".back-cate",
                },
            },
            // when window width is <= 576px
            576: {
                slidesPerView: 4.5,
                spaceBetween: 20,
                slidesPerGroup: 2,
                loop: true,
                loopFillGroupWithBlank: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".next-cate",
                    prevEl: ".back-cate",
                },
            },
            // when window width is <= 300px
            300: {
                slidesPerView: 3.5,
                spaceBetween: 20,
                slidesPerGroup: 1,
                loop: true,
                loopFillGroupWithBlank: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".next-cate",
                    prevEl: ".back-cate",
                },
            },
        },   
    });
</script>
</html>