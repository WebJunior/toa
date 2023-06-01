<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distributor</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="{{asset('js\tinymce\js\tinymce\tinymce.min.js')}}"></script>
    <link rel="icon" href="{{URL('css/file.jpg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/dis.css')}}">
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
    <div class="container-fluid video-container distributor-container" style="margin-top: 100px;margin-bottom:10px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 head-title">
                    <h1>Distributor</h1>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 list-video list-distributor">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 video-box distributor-box">
                            <div class="box box-video2" data-url="ផ្លូវក្រវ៉ាត់ក្រុង រទេះភ្លើង ភូមិកំពងបាយខាងជើង ក្រុងកំពត ខេត្តកំពត">
                                <div class="img-box">
                                    <img src="https://www.toacambodia.com/home/img/product/646c2d4f78c63_photo_2023-05-23_10-04-16.jpg" alt="">
                                </div>
                                <div class="txt-box">
                                    <h1>Kong Kea Shop, Kampot</h1>
                                    <h2>
                                    <span class="city">Kampot</span> / <span class="dist">Chhouk</span>
                                    </h2>
                                    <h3>
                                        ផ្លូវក្រវ៉ាត់ក្រុង រទេះភ្លើង ភូមិកំពងបាយខាងជើង ក្រុងកំពត ខេត្តកំពត                                                </h3>
                                    <ul>
                                        <li>
                                            <a href="tel:010414120">
                                                010414120  <i class="fa-solid fa-phone"></i>
                                            </a>
                                        </li>
                                                                                                                                                        <li>
                                            <a href="" target="_blank">
                                                <i class="fa-brands fa-facebook-messenger"></i>
                                            </a>
                                        </li>
                                                                                                                                                        <li>
                                            <a href="" target="_blank">
                                                <i class="fa-brands fa-telegram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.google.com/maps/place/TOA+paint+Cambodia+_+Kong+Kea+Shop+(%E1%9E%9B%E1%9E%80%E1%9F%8B%E1%9E%90%E1%9F%92%E1%9E%93%E1%9E%B6%E1%9F%86%E1%9E%96%E1%9E%8E%E1%9F%8C%E1%9E%8F%E1%9E%BC%E1%9E%A2%E1%9E%B6)/@10.6268234,104.1061614,13z/data=!4m6!3m5!1s0x31083749f4ce971f:0xc3de35718163b22!8m2!3d10.6268234!4d104.1823791!16s%2Fg%2F11stxj0zpc" target="_blank">
                                                <i class="fa-solid fa-location-dot"></i>
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