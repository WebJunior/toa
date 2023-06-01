$(document).ready(function(){
    let body = $("body");
    var popUP='<div class="popUP"></div>';
    var loading='<div class="popUP"><div class="loading"></div></div>';
    var frm={
        "1":"frm-user.blade.php",
        "2":"frm_category.blade.php",
        "3":"frm-product.blade.php",
    };
    var opt=0;
    //back
    $(".tab").on('click','.box1 #main-page',function(){
        $(".main").show();
        $(".tab").hide();
    });
    //close form
    body.on('click','.frm #cancel',function(){
        body.find(".popUP").remove();
    });
    //load form
    $(".tab").on('click','.box3 #btn',function(){
        opt=$(".tab").data("opt");
        body.append(popUP);
        body.append(loading);
        body.find('.popUP').first().load("../frm/"+frm[opt], function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                calleditor();
                body.find(".popUP").last().remove();
            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });
    //save product
    function add_product(){
        tinymce.triggerSave();
    }

    function calleditor(){
        tinymce.remove();
        tinymce.init({selector:"textarea",theme: "modern",width: "760",height:"300",relative_urls: false, remove_script_host: false,
        file_browser_callback:function(field_name, url, type, win){
        var filebrowser = "../filebrowser.php";
        filebrowser += (filebrowser.indexOf("?") < 0) ? "?type=" + type : "&type=" + type;
        tinymce.activeEditor.windowManager.open({
        title : "Insert Photo",
        width : 660,
        height : 500,
        url : filebrowser
        }, {
        window : win,
        input : field_name
        });
        return false;
        },
        plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern imagetools media code",	
        ],
        menubar:true,toolbar1: "undo redo | insert | sizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",
        toolbar2:"fontselect | fontsizeselect | forecolor media code",
        });
    }
});