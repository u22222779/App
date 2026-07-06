$(document).ready(function(){
    
 		$('.summernote').summernote({
		    height: 200
		});
	
	
		$('#submitBtn').click(function() {
			var summernoteContent = $('.summernote').summernote('code');
			$('#result').val(summernoteContent);
		});   
    
    
    $("#submitIsi").click(function() {
         var fecha = $(".fecha").val();
            titulo= $(".titulo").val();
            copete = $(".copete").val();
        
            var detalle = $('.summernote').summernote('code');

            //detalle = $(".note-codable").val();
         if (fecha == "") {
            $(".fecha").focus();
            return false;
        }else if(titulo == ""){
            $(".titulo").focus();
            return false;
        }else if(copete == ""){
            $(".copete").focus();
            return false;
        }else if(detalle == ""){
            $(".note-codable").focus();
            return false;
        }else{
            $('.ajaxgif').removeClass('hide');
            var datos = 'fecha='+ fecha + '&titulo=' + titulo + '&copete=' + copete + '&detalle=' + detalle;
            $.ajax({
                type: "POST",
                url: "../proceso.php",//OJO esta url hay que actualizar (se puso asi porque esta un include su index que lo llama)
                data: datos,
                success: function() {
                    $('.ajaxgif').hide();
                    $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);
                    $("input[type='text'], [type='date'], textarea").attr("disabled", true); 
                    //$('.boton_envio').attr("disabled", true);
		            //$("#contacto")[0].reset();
                    
                },
                error: function() {
                    $('.ajaxgif').hide();
                    $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
                }
            });
            return false;
        }
 
    });
});
