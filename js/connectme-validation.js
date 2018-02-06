

$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#connectme").validate({
        rules: {
            choiceage: {
                required: true,
               
            },
            institutions: {
                required: true,
                
            },
            level: {
                required: true,
               
            },
            interest: {
                required: true,
               
            }
        
        },
        //For custom messages
        messages: {
            choiceage:{
                required: "Select age",
                
               
            },
             institutions:{
                required: "select  institutions",
               
            },
             level:{
                required: "select level",
               
            },
            interest:{
                required: "select interest",
               
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
     


$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#userform").validate({
        rules: {
            
            username:{
            
                required: true
               
            }
           
        },
        
        messages:{
            username:{
                required:"enter username",
            }
        },



       errorClass:"invalid form-error",
        errorElement : 'div',
        errorPlacement: function(error, element) {
          error.appendTo( element.parent() );
          }
        
     });
});
     

