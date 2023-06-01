$(document).ready(function(){
    $windowwidth=$(window).width();
    let body=$("body");
    //big slide
    get_big_slide();
    function get_big_slide(){
        const img=["img/slide1.jpg","img/slide2.jpg","img/slide3.jpg"];
        var txt="";
        var pagination='';
        img.forEach( (e) =>{
            txt += `
                <div class="slide-show" data-index="0">
                    <img src="../../${e}" alt="">
                </div>
            `;

            pagination += `
                <span></span>
            `;
        });
        $(".slide-container").find(".slide-box .slide").html(txt);
        $(".slide-container").find(".slide-box .pagination").html(pagination);

        // click show
        $(".slide-container").find(".slide-box .pagination span").eq(0).addClass("active");
        $(".slide-container").on('click','.slide-box .pagination span',function(){
            $(this).addClass("active").siblings().removeClass("active");
            slide.eq(indSlide).hide();
            indSlide=$(this).index();
            slide.eq(indSlide).show();
        });
        // slide
        let slide= $('.slide-show');
        let indSlide = 0;
        let numSlide = slide.length;
        slide.hide();
        slide.eq(indSlide).show();
        // next slide
        function nextslide(){
            $(".slide-container").find(".slide-box .pagination span").eq(indSlide).removeClass("active");
            slide.eq(indSlide).hide();
            indSlide ++;
            if( indSlide >= numSlide){
                indSlide = 0;
            }
            slide.eq(indSlide).show();
            $(".slide-container").find(".slide-box .pagination span").eq(indSlide).addClass("active");
        }
        var mynextslide = setInterval(
            nextslide,
            3000
        );
        // stop auto slide
        $('.slide').mouseover(function(){
            clearInterval(mynextslide);
        })
        $('.next').mouseover(function(){
            clearInterval(mynextslide);
        })
        $('.back').mouseover(function(){
            clearInterval(mynextslide);
        })
        $('.pagination').mouseover(function(){
            clearInterval(mynextslide);
        })
        // start auto slide
        $('.slide').mouseleave(function(){
            mynextslide = setInterval(
                nextslide,
                3000
            );
        })
        $('.next').click(function(){
            nextslide();
        });
        // back slide
        $('.back').click(function(){
            $(".slide-container").find(".slide-box .pagination span").eq(indSlide).removeClass("active");
            slide.eq(indSlide).hide();
            indSlide --;
            if( indSlide < 0 ){
                indSlide = numSlide-1 ;
            }
            slide.eq(indSlide).show();
            $(".slide-container").find(".slide-box .pagination span").eq(indSlide).addClass("active");
        });
    }
    //small device show search box
    body.on('click','.menu .menu-box .btn-search-box',function(){
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.search-box").css({"left":"50%"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.search-box").css({"top":"50%"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.search-box").css({"transform":"translate(-50%,-50%)"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.search-box").css({"transition":"0.5"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.btnMenu").css({"display":"none"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.btn-search-box").css({"display":"none"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li:not(.search-box)").css({"display":"none"});
    });
    body.on('click','.menu .menu-box .btnClose',function(){
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.search-box").css({"left":"-100%"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.search-box").css({"transition":"0.5"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.btnMenu").css({"display":"block"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li.btn-search-box").css({"display":"block"});
        $(".menu-bar").find(".menu .menu-box .box1 .box1-1 ul li:not(.search-box)").css({"display":"block"});
    });
    //small device show menu
    body.on('click','.menu .menu-box .btnMenu',function(){
        $(".phone-popUp").css({"display":"block"});
        $(".phone-menu").css({"left":"0"});
    });    
    body.on('click','.phone-popUp',function(){
        $(".phone-popUp").css({"display":"none"});
        $(".phone-menu").css({"left":"-252px"});
        body.find(".product-con .filter").css({"left":"-252px"});
    });
    //get left menu
    body.find(".product-con .title-box .btn-filter").click(function(){
        $(".phone-popUp").css({"display":"block"});
        body.find(".product-con .filter").css({"left":"0"});
    });
    //filter category
    body.find(".filter .filter-box#cate ul li").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
    });
    //filter using
    body.find(".filter .filter-box#using ul li").click(function(){
        // var icon=$(this).find("a i").data("opt");
        var icon=0;
        if( icon == 0 ){
            $(this).find("a i").removeClass("fa-square");
            $(this).find("a i").addClass("fa-square-check");
            icon=1;
        }else if(icon == 1){
            $(this).find("a i").removeClass("fa-square-check");
            // $(this).find("a i").addClass("fa-square");
        }
    });
});