$(document).ready(function() {

    $('#addcourseform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            Course_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter course name!!!..'
                    },
                    stringLength:{
                        message:'course name must be less than 40 characters',
                        max:function(value,validator,$field){
                            return 40- (value.match(/\r/g) || []).length;
                        }
                    }
                }
            },
            Major_sub: {
                validators: {
                    notEmpty: {
                        message: ' please enter Major subject!!!..'
                    },
                    stringLength:{
                        message:'course name must be less than 40 characters',
                        max:function(value,validator,$field){
                            return 40- (value.match(/\r/g) || []).length;
                        }
                    }
                }
            },
            course_cat:{
                validators:{
                    notEmpty:{
                        message:  ' please enter course catagory!!!'

                    }
                }
            },
        
            duration:{
                validators:{
                    notEmpty:{
                         message:'please select duration!!!'
                    }
                    
                }
            },
            c_duration:{
                    validators:{
                        notEmpty:{
                            message:'please enter course duration in day/month/year!'
                        },
                        digits:{
                         message:'Enter valid duration'

                            }
                    }
            },
               addschool: {
                validators: {
                    notEmpty: {
                        message: ' please add school !!!..'
                           
                    }
                }
            },
             adduniversity: {
                validators: {
                    notEmpty: {
                        message: ' please select  school university!!!..'
                           
                    }
                }
            },
             details:{
                validators:{
                    notEmpty:{
                        message:  ' details required!!!'
                    },
                   /* stringLength:{
                        message:'post details must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             }
           
        }
    });
});