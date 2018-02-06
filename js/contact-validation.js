  $(document).ready(function() {
     //$("#phone_number").val("+251 ");


    $('#contactform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            full_name: {
                validators:{
                    notEmpty:{
                        message:'full name required'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The full name can consist of alphabetical characters and spaces only'
                    }
                }
            },
              email:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    },
                    emailAddress:{
                        message:'The input is not a valid email adddress!!'
                    }
                }
            },
 
 phone_number: {
                validators: {
                    notEmpty: {
                        message: 'contact required!!!..'
                    },
                    /*digits:{
                         message:'contact number is invalid'

                    },
                    stringLength: {
                        min:14,
                        max: 14,
                        message: 'contact number must contain correct digits'
                    }*/
                     regexp:{
                     regexp:/^\+251?([- ]{1})?([0-9]{9})$/,
                           message:'invalid Phone number,!! Number should have 9 digit after country code!!'
                      ,   }
                }
            },

           

                
             description:{
                validators:{
                    notEmpty:{
                        message:  ' please write some messsage !!!'
                    },
                   /* stringLength:{
                        message:'description must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             }
			
 
              
                 
               
                 




        }
    });
});