$(document).ready(function() {

    $('#enquiryform').bootstrapValidator({
        
        fields: {
            
            school: {
                validators: {
                    notEmpty: {
                        message: ' please enter school name!!!..'
                    }
					
                }
            },
            fullname:{
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
			address:{
                validators:{
                    notEmpty:{
                        message:  ' address required!!!'
                    }
                    /*stringLength:{
                        message:'post adddress must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
            
             phone_number:{
    validators:{
       /* notEmpty:{
                        message:'phone number is required!!!'
                    },*/
        
         stringLength: {
                        min:14,
                        max: 14,
                        message: '+251 must have before ,contact number must correct .Number should have 9 digit after country code'
                    }
    }
},
             subject:{
                    validators:{
                        notEmpty:{
                            message:'please enter subject!!'
                        }
                    }
            },
             enquirybox:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter academic requierement descreeption !!!'
                    },
                    stringLength:{
                        message:'post descreeption must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
            
           
			 
                   
              
          
      
        }
    });
});