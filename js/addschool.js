$(document).ready(function() {
  //alert('in');
     $("#phone_number").val("+251 ");
    


    $("input[type=checkbox][name=agree]").click(function()
    {
        var ischeck=$(this).prop("checked");
        if(ischeck)
            $(this).val("agree");
        else
            $(this).val("");
    });

    $('#homeaddschoolform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            choice: {
                validators: {
                    notEmpty: {
                        message: ' please select registration type!!!..'
                    }
                }
            },
            user_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter username!!!..'
                    }
                }
            },
            firstname:{
                 validators:{
                    notEmpty:{
                        message:'please enter firstname!!!..'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The full name can consist of alphabetical characters and spaces only'
                    }
                }
            },
             lastname:{
                 validators:{
                    notEmpty:{
                        message:'please enter lastname!!!..'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The full name can consist of alphabetical characters and spaces only'
                    }
                }
            },

            fileformat:{
           
                 file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 
           },
        
            email:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    },
                    emailAddress:{
                        message:'The input is Not a valid email adddress!!'
                    }
                }
            },
            schoolname:{
                    validators:{
                        notEmpty:{
                            message:'please enter school name!!'
                        }
                    }
            },
            cat: {
                validators: {
                    notEmpty: {
                        message: ' please select  school catagory!!!..'
                           
                    }
                }
            },
             choice2: {
                validators: {
                    notEmpty: {
                        message: ' please select  school university!!!..'
                           
                    }
                }
            },
             choice3: {
                validators: {
                    notEmpty: {
                        message: ' please select  institute!!!..'
                           
                    }
                }
            },
             choice4: {
                validators: {
                    notEmpty: {
                        message: ' please select  other catagory!!!..'
                           
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
             choice5: {
                validators: {
                    notEmpty: {
                        message: ' please select  country!!!..'
                           
                    }
                }
            },
             choice6:{
                validators:{
                    notEmpty:{
                        message:  ' please enter city!!!'
                    }
                }
             },
              choice7:{
                validators:{
                    notEmpty:{
                        message:  ' please choose region!!!'
                    }
                }
             },
               choice8:{
                validators:{
                    notEmpty:{
                        message:  ' please choose school type!!!'
                    }
                }
             },
             student_population:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter student population!!!'
                    },
                     digits:{
                         message:'population should be in digits'

                    }
                }
             },
             t_staff:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter number of teaching staff!!!'
                    },
                     digits:{
                         message:'invalid number of teaching staff'

                            }
                }
             },
             non_teach:{
                validators:{
                    notEmpty:{
                        message:  ' please enter number of non_teaching staff!!!'
                    },
                     digits:{
                         message:'invalid of non_teaching staff'

                            }
                }
             },
             past_award:{
                validators:{
                    notEmpty:{
                        message:  ' please enter name of past award !!!'
                    }
                }
             },
             year:{
                validators:{
                    notEmpty:{
                        message:  ' please enter acadamic year !!!'
                    },
                   digits:{
                         message:'invalid year'

                    },
                    /*stringLength: {
                        min:4,
                        max:4,
                        message: 'invalid year ,please enter correct year'
                    },*/
                    between:{
                           min:2016,
                        max: 2050,
                        message: 'year must be in range ,please enter present year or next'
                    }
                }
             },
             fee:{
                validators:{
                    notEmpty:{
                        message:  ' please enter acadamic fee !!!'
                    },
                     digits:{
                         message:'invalid acadamic fee'

                            }
                }
             },
                Admissios_pro:{
                validators:{
                    notEmpty:{
                        message:  ' please enter Admission Procedures !!!'
                    },
                   /* stringLength:{
                        message:'post Procedures content must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
             Description:{
                validators:{
                    notEmpty:{
                        message:  ' please enter academic requierement descreption !!!'
                    },
                    stringLength:{
                        message:'descreption must be less than 300 characters',
                        max:function(value,validator,$field){
                            return 300 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
             scolership:{
                validators:{
                    notEmpty:{
                        message:  ' please enter scholarship!!!'
                    }
                }
             },
           address:{
                validators:{
                    notEmpty:{
                        message:  ' please enter address!!!'
                    },
                    stringLength:{
                        message:'adddress must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
                   website:{
                validators:{
                    uri:{
                        message:  ' website address is not valid!!!'
                    },
                    notEmpty:{
                         message:'enter website address'
                    }
                }
             },
              tell_us:{
                validators:{
                    notEmpty:{
                        message:  ' please tell us about yourself  !!!'
                    },
                    stringLength:{
                        message:'information must be less than 200 characters',
                        max:function(value,validator,$field){
                            return 200 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
          
      password: {
                validators: {
                    notEmpty: {
                        message: 'The password cannot be empty'
                    },
                    identical: {
                        field: 'cpassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            cpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
           captcha:{
               validators:{
                notEmpty:{
                    message:'enter the above captcha code'
                }
               }
           },
           agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});

//var jq = $.noConflict();
$(document).ready(function() {

 $('#tokenfield').tokenfield({
  autocomplete:{
    source: ['Computer Study Lab',' Football Pitch ','Science Labs','Swimming Pool','Library','Basket ball court','Football pitch','design and technology lab','tennis court'],
    delay: 100
  },
  showAutocompleteOnFocus: true
});
}); 



    $(document).ready(function() {

 $('#Program_tokenfield').tokenfield({
  autocomplete:{
    source: ['primary','Nursary','Secondary'],
    delay: 100
  },
  showAutocompleteOnFocus: true
});
}); 
    
