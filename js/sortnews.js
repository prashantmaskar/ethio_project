$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#sortnews").validate({
        rules: {
            newsd1: {
                required: true,
               
            },
            newsd2: {
                required: true,
                
            }
           
        
        },
        //For custom messages
        messages: {
            newsd1:{
                required: "select from date",
               
            },
             newsd2:{
                required: "select to date",
               
            }
        },
        //For custom messages
       errorClass:"invalid form-error",
        errorElement : 'div',
        errorPlacement: function(error, element) {
          error.appendTo( element.parent() );
          }
        
     });
});
     
