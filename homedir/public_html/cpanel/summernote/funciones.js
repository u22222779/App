$(document).ready(function (e) {
    $('#summernote').summernote({ height: "250px" });

    
	$("#form").on('submit',(function(e) {
        var summernoteContent = $('.summernote').summernote('code');
        $('.summeroculto').val(summernoteContent);//paras code de summernote a textarea oculto
        $('textarea[name="summeroculto"]').html($('#summernote').code());        
        
        $('.ajaxgif').removeClass('hide');
		e.preventDefault();
		$.ajax({
        	url: "proceso.php",
			type: "POST",
			data:  new FormData(this),//envía todos los datos del formulario
			contentType: false,
    	    cache: false,
			processData:false,
			beforeSend : function()
			{
				$("#preview").fadeOut(); 
				$("#err").fadeOut();
                $('.ajaxgif').removeClass('hide');
			},
			success: function(data)
		    {
				if(data=='invalid')
				{
					// invalid file format.
					$("#err").html("Invalid File !").fadeIn();
				}
				//else
				{
					// view uploaded file.
                    $('.ajaxgif').hide();
                    $('.msg').text('Solicitud enviada!').addClass('msg_ok').animate({ 'right' : '200px' }, 300);
                    $("#button").css("background-color", "#f1eeee");
                    $('#button').attr("disabled", true);  
                    $('#uploadImage').attr("disabled", true);
                    
                    $("#preview").html(data).fadeIn();
					$("#form")[0].reset();	
				}
		    },
		  	error: function(e) 
	    	{
				$("#err").html(e).fadeIn();
	    	} 	        
	   });
	}));
});