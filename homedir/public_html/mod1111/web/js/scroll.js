
$(document).ready(function(){  
    
    $(function () {
      var $win = $(window);
      $win.scroll(function () {
         if ($win.scrollTop() > 15){
           $('#header').addClass('header-scroll');
           $('#mainmenu-block-bg').addClass('mainmenu-block-bg-scroll');
           $('#menu').addClass('menu-scroll'); 
           $('#secondmenu-block-bg').css({'margin-top':'-37px', 'transition': 'margin-top 0.5s', '-webkit-transition': 'margin-top 0.5s'});
           $('.logo-mc-peq').css({'top':'124px', 'transition': 'top 1s', '-webkit-transition': 'top 1s'});
           $('body').css('margin-top','121px');
            
        //scroll animacion top 0 del body
            $('.upp2').css('display','block');            
     
             
          }
         else {
           $('#header').removeClass('header-scroll');
           $('#mainmenu-block-bg').removeClass('mainmenu-block-bg-scroll');
           $('#menu').removeClass('menu-scroll');  
           $('.row-fluid').css('padding-left','0px');
           $('#secondmenu-block-bg').css('margin-top','0px');
           $('.logo-mc-peq').css('top','-50px'); 
             $('body').css('margin-top','0px');
             
        //scroll animacion top 0 del body
            $('.upp2').css('display','none');          

         }          
       });
        
    });



        //scroll animacion top 0 del body
               $('#upp1').click(function(){
                 $('html, body').animate({ scrollTop: 0 }, 400);
                  return false;
               });    

});