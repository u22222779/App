(function(){
    $("#enviar_reclam").click(function() {
 
        var buscarv = $("#buscarv").val();
            fecha = $("#fecha").val();
            apaterno = $("#apaterno").val();
            amaterno = $("#amaterno").val();
            nombres = $("#nombres").val();
            tipodoc = $("#tipodoc").val();
            ndoc = $("#ndoc").val();
            departamento_id = $("#departamento_id").val();
            provincia_id = $("#provincia_id").val();
            distrito_id = $("#distrito_id").val();
            tipo_via = $("#tipo_via").val();
            nom_via = $("#nom_via").val();
            num_via = $("#num_via").val();
            ubicacion = $("#ubicacion").val();
            fono_dom = $("#fono_dom").val();
            celular = $("#celular").val();
            email = $("#email").val();
            tit_reclamo = $("#tit_reclamo").val(); 
            det_reclamo = $("#det_reclamo").val(); 

        
            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

        if(email == "" || !validacion_email.test(email)){
            $("#email").focus();
            return false;
        }else{
            $('.ajaxgif').removeClass('hide');
            var datos = 'buscarv=' + buscarv + '&fecha=' + fecha + '&apaterno=' + apaterno + '&amaterno=' + amaterno + '&nombres=' +nombres + '&tipodoc='+ tipodoc + '&ndoc=' + ndoc + '&departamento_id=' + departamento_id + '&provincia_id=' + provincia_id + '&distrito_id='+ distrito_id + '&tipo_via=' + tipo_via + '&nom_via=' + nom_via + '&num_via=' + num_via + '&ubicacion='+ ubicacion + '&fono_dom=' + fono_dom + '&celular=' + celular + '&email=' + email + '&tit_reclamo='+ tit_reclamo + '&det_reclamo=' + det_reclamo;

            $.ajax({
                type: "POST",
                url: "proceso.php",//OJO esta url hay que actualizar (se puso asi porque esta un include su index que lo llama)
                data: datos,
                success: function() {
                    $('.ajaxgif').hide();
                    $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);  
                },
                error: function() {
                    $('.ajaxgif').hide();
                    $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
                }
            });
            return false;
        }
 
    });
})();
