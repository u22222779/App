$(document).ready(function(){
    // OVERs en menu principal 
 //   $("#menu-item-1, #menu-item-5").mouseover(function(){  /* over menu (CIUDAD y CONTACTO)*/
 //       $(".over_02, .over_03, .over_04, #arrow2, #arrow3, #arrow4").css("display", "none"); /* //borra over del menu "Muni, Obras, Servicios" */
  //  });    
    
  //  $("#menu-item-2").mouseover(function(){  /* over menu (MUNICIPALIDAD)*/
  //      $(".over_03, .over_04, #arrow3, #arrow4").css("display", "none"); /* borra over del menu //"Obras, Servicios" */
  //      $("#arrow2").css("display", "block"); /*  aparece flecha */
  //       $(".over_02").slideDown(180); /*  despliega bloque ésto reemplaza a display:block*/
  //       $("#over_02").mouseover(function(){ /* Ojo con el ID para que dicho bloque no desaparezca //*/
  //          $(".over_02").css("display", "block");
   //     });
  //  });

    
  //  $("#menu-item-3").mouseover(function(){  /* over menu (OBRAS)*/
    //    $(".over_02, .over_04, #arrow2, #arrow4").css("display", "none"); /* borra over del menu //"Muni, Servicios" */
  //      $("#arrow3").css("display", "block"); /*  aparece flecha */
  //       $(".over_03").slideDown(180); /*  despliega bloque ésto reemplaza a display:block*/
  //       $("#over_03").mouseover(function(){ /* Ojo con el ID para que dicho bloque no desaparezca //*/
  //          $(".over_03").css("display", "block");
  //      });
  //  });    

    
  //  $("#menu-item-4").mouseover(function(){  /* over menu (SERVICIOS)*/
 //       $(".over_02, .over_03, #arrow2, #arrow3").css("display", "none"); /* borra over del menu //"Muni, Obras" */
 //       $("#arrow4").css("display", "block"); /*  aparece flecha */        
 //        $(".over_04").slideDown(180); /*  despliega bloque ésto reemplaza a display:block*/
 //        $("#over_04").mouseover(function(){ /* Ojo con el ID para que dicho bloque no desaparezca //*/
  //          $(".over_04").css("display", "block");
  //      });
  //  }); 
  //  
   // 
   // $(".over_02, .over_03, .over_04").mouseout(function(){   
   //     $(".over_02, .over_03, .over_04, #arrow2, #arrow3, #arrow4").css("display", "none");
   // });  

    
    
    //PINTA EL MENU PRINCIPAL CON OVER 
    $(".menu-item").mouseover(function(){  
        var id = $(this).attr("id");
         $(".menu-item").removeClass('activo'); //DESPINTA menu (TODOS)
        
         $("#"+id+"").addClass('menu-item activo'); //pinta menu EL SELECCIONADO
    });
    
    
// muestra imgs thums de galeria hihslide
   $("#galeria-boton").click(function(){
        $("#galeria").css("display", "block");
        $("#imgprincipal").css("display", "none");
        $("#galeria-boton").css("display", "none"); 
     });
    
   $("#galeria-boton2").click(function(){
        $("#galeria2").css("display", "block");
        $("#imgprincipal2").css("display", "none");
        $("#galeria-boton2").css("display", "none"); 
     });
  
    
});// fin ready 