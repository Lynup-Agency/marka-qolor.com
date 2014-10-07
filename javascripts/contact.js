 // logica para la validacion y envio de la forma de contacto
    function exito (){
        // avisamos del exito, cerramos el pop, reactivamos el boton de enviar.
                   
        //$.fancybox.open('<h2>Thank you.</h2><p>We\'ll get in touch with you soon.</p>', {
        //    wrapCSS:'exitoPop'
       // });
         alert('exito!');

    }
                
                
    $("#markaform").submit(function() {

        //checamos si pasa validacion la forma para hacer el ajax submit
        if($("#markaform").validate().form()) {
                                           

            $('.sendButton').attr('disabled', true);

            var inputs = [];

            // array
            $(':input, textarea', this).each(function() {
                inputs.push(this.name + '=' + escape(this.value));
            });
            

                                                
            $.ajax({
                type : "POST",
                url : "../contactengine.php",
                data : inputs.join('&'),
                success : exito()
            });
            return false;
        }else {
                                            
        }
    });
    // validate the comment form when it is submitted
    $("#markaform").validate({
             
        rules : {
            name: {
                required: true
                
            },
            email: {
                required: true,
                email: true
            },
            company:{
                required: true,
                minlength: 3
            }
        },
    
        messages : {
            name : {
                required: "Your name please :)"                
            },
            email: {
                 required: "Verify your email."
            },						
            company : {           
                required: "This field should not be empty.",
                 minlength : "Type at least 3 characters."
            }
        }
    });                