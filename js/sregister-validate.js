$(document).ready(function() {

    $('#sregister').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            schooltype: {
                validators: {
                    notEmpty: {
                        message: 'Please enter schooltype!!!..'
                    }
                }
            },
              school: {
                validators: {
                    notEmpty: {
                        message: ' please select school!!!..'
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
                        message: ' required!!!..'
                    }
                }
            },
 
               
                  username: {
                validators: {
                    notEmpty:{ 
                        message:'please enter username!!'

                    },
                     regexp: {
                     regexp: /^[\w]+$/,
                        message: 'You can introduce just alphabetical characters, underscore, number but no spaces'
                    },
                  
                }
            },

      password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'cpassword',
                        message: 'The password and its confirm are not the same'
                    },
                    
                }
            },
            cpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
                  
                  


        }
    });
});