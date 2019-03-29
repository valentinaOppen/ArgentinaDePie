$(document).ready(function() {
    
    $( ".btnEnviarCategoria" ).click(function() {
        var data = $(this).closest("form").serialize();
        
        $.ajax({
            url: '/api/mail.php',
            type: 'POST',
            data: data,
        }).done(function(data) {
            //some code going here if success 
            if(data.message) {
                $('#responseMessage').text(data.message);
                $('#alert').show(); 
            }
        }).fail(function() {
            if(data.message) {
                $('#responseMessage').text(data.message);
                $('#alert').show();
            }
        });
    });
/*
    $("form").submit( function(e) {
        
        e.preventDefault();console.log($(this)); return;
        $('#alert').hide();
        $('#responseMessage').text('');
        
        
        var theBtn = $('#btnEnviarCategoria');

        if ( $('#btnEnviarCategoria').is('.disabled')) {
            theBtn.removeClass('disabled'); // enable the button?
            return false;
        }

        var data = $("#formulario").serialize();
        
    });*/
});