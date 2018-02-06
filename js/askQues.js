

$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#askque").validate({
        rules: {
           quetype:  {
                required: true,
               
            },
              subject: {
                required: true,
                
            },
              question: {
                required: true,
               
            }
            // interest: {
            //     required: true,
               
            // }
        
        },
        //For custom messages
        messages: {
            quetype:{
                required: "Select type",
                
               
            },
             subject:{
                required: "select  question category",
               
            },
             question:{
                required: "ask question",
               
            }
            /*interest:{
                required: "select interest",
               
            }*/
        },
        //For custom messages
       errorClass:"invalid form-error",
        errorElement : 'div',
        errorPlacement: function(error, element) {
          error.appendTo( element.parent() );
          }
        
     });
});
     


