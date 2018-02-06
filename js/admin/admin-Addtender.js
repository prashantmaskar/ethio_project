$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#postvacancyform").validate({
        rules: {
            title: {
                required: true,
               
            },
            sname: {
                required: true,
                
            },

            vcount: {
                required: true,
                 digits: true
                
            },
            sdate: {
                required: true,
                
            },
            edate: {
                required: true,
                
            },
             vdesc: {
                required: true,
                
            },
        },
        //For custom messages
        messages: {
            title:{
                required: "title required",
               
            },
             sname:{
                required: "name required",
               
            },
            vcount:{
                required: "field compulsary",
                ispass:"should be in digit"
               
            },
             sdate:{
                required: "select to date",
               
            },
            edate:{
                required: "select from date",
               
            },
             vdesc:{
                required: "required",
               
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
     
