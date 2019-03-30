$(document).ready(function() {
    
    $( ".btnEnviarCategoria" ).click(function() { 
        $('#alert').hide();
        $('#alertError').hide();
        $('#responseMessage').text('');
        $('#responseMessageError').text('');

        var theBtn = $(this);
        
        var form = theBtn.closest("form");
        
        var inputs =  form.find('input');
        
        inputs.push(form.find('textarea')[0]);

        //Validacion de campo vacio.
        var finish = inputs.length - 1;
        var valid = true;

        inputs.each(function(e, a) {
            if( a.value == '' || a.value == null || a.value == undefined || valid == false) {
                $('#responseMessageError').text('Complete todos los campos');
                $('#alertError').show(); 
                theBtn.removeClass('disabled'); 
                return false;    
            }
                
            if(e == finish && valid === true){
                var data = form.serialize();
         
                //Codigo para desabilitar boton de envio.
        
                theBtn.addClass('disabled');
        
                $.ajax({
                    url: '/api/mail.php',
                    type: 'POST',
                    data: data,
                }).done(function(data) {
                    //some code going here if success 
                    if(data.message && data.code == 200) {
                        $('#responseMessage').text(data.message);
                        //Reseteamos formulario
                        form.closest("form").trigger("reset");       
                        $('#alert').show(); 
                    } else {
                        $('#responseMessageError').text(data.message);
                        $('#alertError').show();
                    }
                    theBtn.removeClass('disabled'); 
                }).fail(function() {
                    if(data.message) {
                        $('#responseMessageError').text(data.message);
                        $('#alertError').show();
                        theBtn.removeClass('disabled'); 
                    }
                });
            }

        });
        
        
    });
});