
$(document).ready(function() {

    $('#edituser').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            schooltype: {
                validators:{
                    notEmpty:{
                        message:'school type required'
                    }
                   /* regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The  name can consist of alphabetical characters and spaces only'
                    }*/
                }
            },
              school: {
                validators: {
                    notEmpty: {
                        message: ' please select school  name!!!..'
                    }
                }
            },
              level: {
                validators: {
                    notEmpty: {
                        message: ' please select level!!!..'
                    }
                }
            },
 
                  department: {
                validators: {
                    notEmpty: {
                        message: 'contact required!!!..'
                    }
                   /* digits:{
                         message:'contact number is invalid'

                    },*/
                    /*stringLength: {
                        min:10,
                        max: 10,
                        message: 'contact number must contains 10 digits'
                    }*/

                }
            },
               username:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    }
                   /* emailAddress:{
                        message:'The input is not a valid email adddress!!'
                    }*/
                }
            },
             password: {
                validators: {
                   
                    identical: {
                        field: 'cpassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            cpassword: {
                validators: {
                   
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            first_name: {
                validators:{
                    notEmpty:{
                        message:'first name required'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The  name can consist of alphabetical characters and spaces only'
                    }
                }
            },
              last_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter last name!!!..'
                    }
                }
            },
             gender: {
                validators: {
                    notEmpty: {
                        message: ' please select gender!!!..'
                    }
                }
            },
              
                  attach:{
            validators:{
                /*notEmpty:{
                    message:'please select an image'
                },*/
                 file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           },
               
                  date: {
                validators: {
                    notEmpty:{ 
                        message:'please enter birthdate!!'

                    }
                  
                }
            },
                  
                  status: {
                validators: {
                    notEmpty:{ 
                        message:'please select choice!!'

                    }
                  
                }
            },
               
                
                  
                  interestedIn: {
                validators: {
                    notEmpty:{ 
                        message:'please select choice!!'

                    }
                  
                }
            },
                  aboutme:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter information about you !!!'
                    }
                    /*stringLength:{
                        message:'post descreeption must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
              myinterest:{
                validators:{
                    notEmpty:{
                        message:  ' please write your interest !!!'
                    }
                   /* stringLength:{
                        message:'post descreeption   must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },

               myhobby:{
                validators:{
                    notEmpty:{
                        message:  ' please write your hobby !!!'
                    },
                    stringLength:{
                        message:'post descreeption   must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },


        }
    });
});

                     