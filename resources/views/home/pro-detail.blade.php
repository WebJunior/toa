<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detial</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="{{asset('js\tinymce\js\tinymce\tinymce.min.js')}}"></script>
    <link rel="icon" href="{{URL('css/file.jpg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    <div class="container-fluid bar1">
        <div class="container bar">
            <div class="row">
                <div class="col-xl-12 col-lg-12 menu-bar">
                    <div class="menu">
                        <div class="logo-box">
                            <a href="{{route('home-page')}}"><img src="{{URL('css/toa.jpg')}}" alt=""></a>
                        </div>
                        <div class="menu-box">
                            <div class="box1">
                                <div class="box1-1">
                                    <ul>
                                        <li class="search-box">
                                            <input type="text" name="" id="txt-search-text" placeholder="What are you looking for..">
                                            <a class="btnSearch">
                                                <i class="fas fa-search"></i>
                                            </a>
                                            <a class="btnClose">
                                                <i class="fa-solid fa-xmark"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul> 
                                        <li class="btnMenu">
                                            <a>
                                                <i class="fas fa-bars"></i>
                                                <span>Menu</span>
                                            </a>
                                        </li>
                                        <li class="btn-search-box">
                                            <a>
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                                <span>Search</span>
                                            </a>
                                        </li>                                   
                                        <li id="btn-my-toa-login">
                                            <a>
                                                <i class="fa-brands fa-square-facebook"></i>
                                                <span>Login</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa-solid fa-flag"></i>
                                                <span>Khmer</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box2">
                                <ul>  
                                    <li class="show">
                                        <a href="{{route('product')}}">
                                            Products                                                
                                        </a>
                                    </li>
                                    <li class="show">
                                        <a href="{{route('distributor')}}">
                                            Distributor                                               
                                        </a>
                                    </li>
                                    <li class="show">
                                        <a href="{{route('videos')}}">
                                            Videos                  
                                        </a>
                                    </li>
                                    <li class="show">
                                        <a href="{{route('knowledge')}}">
                                            Knowledge                                      
                                            </a>
                                    </li>
                                    <li class="show">
                                        <a href="{{route('jobs')}}">
                                            Jobs                                      
                                        </a>
                                    </li>
                                    <li class="show">
                                        <a href="{{route('project-refference')}}">
                                            Project Reference                                                
                                        </a>
                                    </li>
                                    <li class="show">
                                            <a href="{{route('contact-us')}}">
                                            Contact Us                                      
                                            </a>
                                    </li>
                                    <li class="hide">
                                        <a>
                                            Search                                      
                                        </a>
                                    </li>
                                    <li class="hide">
                                        <a>
                                            Order                                              
                                        </a>
                                    </li>
                                    <li class="hide">
                                        <a>
                                            My TOA     
                                        </a>
                                    </li>
                                    <li class="hide">
                                        <a>
                                            Profile                                               
                                        </a>
                                    </li>
                                    <li class="hide">
                                        <a>
                                            Customer Order                                        
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="phone-popUp"></div>
    <div class="phone-menu">
        <ul>  
            <li class="logo-box">
                <a href="{{route('home-page')}}">
                    <img src="{{URL('css/toa.jpg')}}" alt="">
                </a>
            </li>
            <li class="show">
                <a href="{{route('product')}}">
                    Products             
                </a>
            </li>
            <li class="show">
                <a href="{{route('distributor')}}">
                    Distributor                        
                </a>
            </li>
            <li class="show">
                <a href="{{route('videos')}}">
                    Videos 
                </a>
            </li>
            <li class="show">
                <a href="{{route('knowledge')}}">
                    Knowledge                        
                </a>
            </li>
            <li class="show">
                <a href="{{route('jobs')}}">
                    Jobs                        
                </a>
            </li>
            <li class="show">
                <a href="{{route('project-refference')}}">
                    Project Reference   
                </a>
            </li>
            <li class="show">
                <a href="{{route('contact-us')}}">
                    Contact Us                        
                </a>
            </li>
            <li class="hide">
                <a>
                    Search        
                </a>
            </li>
            <li class="hide">
                <a>
                    Order                        
                </a>
            </li>
            <li class="hide">
                <a>
                    My TOA                        
                </a>
            </li>
            <li class="hide">
                <a>
                    Profile
                </a>
            </li>
            <li class="hide">
                <a>
                    Customer Order 
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid" style="background-color:#fff">
        <div class="container pro-detail-con">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pro-detail-box">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{asset('img/pro1.jpg')}}" alt="">
                        </div>
                        <div class="txt-box">
                            <h1 class="title1">
                                SuperShield Duraclean Matt                            
                            </h1>
                            <p>
                                </p><p>SuperShield Duraclean™ is Ultra-Premium interior paint. 100% high performance pure acrylic waterborne. Superior washable and scrub resistance. anti-bacterial for lifetime. Low odor and safe for resident. For interior, Suitable for areas that require highly hygienic ex. Bedroom, Hospital, Kindergarten or areas require extra low odor ready for moving in within an hour ex hotel, corridor. Type : 100% Pure Acrylic Emulsion Paint Color : Wide range of colors.Please refer to colour card.Film Appearance : Matt100% Pure acrylic waterborne &amp; Life time hygienic ● 100% Pure acrylic waterborne, Ultra premium grade. ● Easy washable and scrub resistance more than 60,000 times. Do not leave stains. ● Low odor, Low VOCs, Received certification from the Green Label standard. Therefore safe for residents And the environment. ● Anti-bacterial 99.99% for lifetime by Microban.● Suitable for buildings that need to pass the Green Building Standard, both Thai Green Building (TREES) and the United States (LEED).</p>                                    <p></p>
                            <div class="row product-feature">
                                <div class="col-xl-6 col-lg-6">
                                    <h1 class="title2">
                                        Grade                                           
                                    </h1>
                                    <span>Ultra Premium</span>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h1 class="title2">Using</h1>
                                    <span>Interior</span>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h1 class="title2">Product Types</h1>
                                    <span>Topcoat</span>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h1 class="title2">Film Type</h1>
                                    <span>Flatt &amp; Matt</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <h1 class="title2">Quantity</h1>
                                    <span>1 GL., 2.5 GL., 5 GL.</span>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <h1 class="title2">Knowledge</h1>
                                    <a href="" target="_blank">Link</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 img-sponser">
                                    <h1 class="title1">Supported</h1>
                                    <img src="https://www.toacambodia.com/home/img/product/6392dff1adeb0_sponser-02.jpg" alt="6392dff1adeb0_sponser-02.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #eee;margin-bottom:10px">
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
                        <div class="img-box">
                            <img src="{{asset('img/pro1.jpg')}}" alt="">
                            <span class="pcode"> Code: </span>
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
                             <img src="{{asset('img/pro.jpg')}}" alt="">
                             <span class="pcode"> Code: </span>
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
    <div class="container-fluid footer">
        <div class="container footer-box">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-12 box1">
                    <h3>LET'S COLOR YOUR LIFE </h3>
                    <h1>TOA Coating (Cambodia) Co.,Ltd</h1>
                    <h2>Address</h2>
                    <p> 
                        TOA Coating (Cambodia) Co.,Ltd 
                        <br>Sales Office: The Point Community Mall
                        <br>No.#113C, Mao Tse Tung Blvd, Sangkat Toul Svay Prey,
                        <br>Khan Beong Keng Kong Phnom Penh, Cambodia.                
                    </p>
                    <h2>
                        Contact Us    
                    </h2>
                    <p>
                        Business Center : 095 999 538                
                    </p>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-4 col-sm-4 col-12 box2">
                    <h1>   
                        Quick Link 
                    </h1>
                    <ul>
                        <li>
                            <a href="">Decorative Coating</a>
                        </li>
                                                        <li>
                            <a href="">Construction Chemicals</a>
                        </li>
                                                        <li>
                            <a href="">Special Paint</a>
                        </li>
                                                        <li>
                            <a href="">Wood Coating</a>
                        </li>
                                                        <li>
                            <a href="">Heavy Duty Coating</a>
                        </li>
                                                        <li>
                            <a href="">Metal Coating</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-3 col-12 box3">
                    <h1>
                        Follow us 
                    </h1>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/numberonepaint" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                                                        <li>
                            <a href="https://www.youtube.com/channel/UC6KVYyT95_3yG0skkBpJT8w" target="_blank">
                                <i class="fa-brands fa-square-youtube"></i>
                            </a>
                        </li>
                                                        <li>
                            <a href="https://t.me/TOACambodiaNews" target="_blank">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                        </li>
                                                        <li>
                            <a href="https://www.instagram.com/toacambodia/?hl=en" target="_blank">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                        </li>
                                                        <li>
                            <a href="ggsdfgfg" target="_blank">
                                <i class="fa-solid fa-location-dot"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="copyright">
                    © 2022 All Rights Reserved Designed by TOA Coating (Cambodia) Co., Ltd. 
                </p>
            </div>
        </div>
    </div>
</body>
</html>