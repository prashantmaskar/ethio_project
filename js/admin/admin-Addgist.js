$(document).ready(function() {

    $('#addgist').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            caption: {
                validators: {
                    notEmpty: {
                        message: ' Please enter Gist name!!!..'
                    }
                }
            },



         Description:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    }
                    /*stringLength:{
                        message:'post Description must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
             catagory:{
                validators:{
                    notEmpty:{
                        message:  ' select category !!!'
                    }
                    
                }
             },


          /* avatar:{
            validators:{
                notEmpty:{
                    message:'please select an image'
                },
                 file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           },  */

            author: {
                validators: {
                    notEmpty: {
                        message: ' please enter auther name!!!..'
                    }
                }
            },
             
            date: {
                validators: {
                    notEmpty: {
                        message: ' date can not be Empty!!!..'
                    }
                }
            },
                source_link: {
                validators: {
                    notEmpty: {
                        message: ' enter source link!!!..'
                    }
                }
            },
                p_caption: {
                validators: {
                    notEmpty: {
                        message: ' enter photo caption!!!..'
                    }
                }
            },


               
             




             }
    });
});