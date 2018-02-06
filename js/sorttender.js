 $(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#sorttender").validate({
        rules: {
            vacd1: {
                required: true,
               
            },
            vacd2: {
                required: true,
                
            }
           
        
        },
        //For custom messages
        messages: {
            vacd1:{
                required: "select from date",
               
            },
             vacd2:{
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
     
