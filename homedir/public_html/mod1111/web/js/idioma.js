$(document).ready(function(){

    $("#english").click(function(){
        $(".es").css("display", "none");
        $(".en").css("display", "block");
        $(".de").css("display", "none");
        $("#menu-item-1").css('background', 'url(imgs/menu-inicioe.png) no-repeat center');
        $("#menu-item-2").css('background', 'url(imgs/menu-nosotrose.png) no-repeat center');
        $("#menu-item-3").css('background', 'url(imgs/menu-quehacemose.png) no-repeat center');
        $("#menu-item-4").css('background', 'url(imgs/menu-serviciosyproductose.png) no-repeat center');
        $("#menu-item-5").css('background', 'url(imgs/menu-contactoe.png) no-repeat center');
        
            //$(document).attr("title", "About Us");
            //$('html head').find('title').text("About Us"); 
            //document.title = 'About Us';        
    });
    $("#deutschland").click(function(){
        $(".es").css("display", "none");
        $(".en").css("display", "none");
        $(".de").css("display", "block");
        $("#menu-item-1").css('background', 'url(imgs/menu-inicioe.png) no-repeat center');
        $("#menu-item-2").css('background', 'url(imgs/menu-nosotrosd.png) no-repeat center');
        $("#menu-item-3").css('background', 'url(imgs/menu-quehacemosd.png) no-repeat center');
        $("#menu-item-4").css('background', 'url(imgs/menu-serviciosyproductosd.png) no-repeat center');
        $("#menu-item-5").css('background', 'url(imgs/menu-contactod.png) no-repeat center');                
    });
    $("#espanol").click(function(){
        $(".es").css("display", "block");
        $(".en").css("display", "none");
        $(".de").css("display", "none"); 
        $("#menu-item-1").css('background', 'url(imgs/menu-inicio.png) no-repeat center');
        $("#menu-item-2").css('background', 'url(imgs/menu-nosotros.png) no-repeat center');
        $("#menu-item-3").css('background', 'url(imgs/menu-quehacemos.png) no-repeat center');
        $("#menu-item-4").css('background', 'url(imgs/menu-serviciosyproductos.png) no-repeat center');
        $("#menu-item-5").css('background', 'url(imgs/menu-contacto.png) no-repeat center');          
    });


});// fin ready 