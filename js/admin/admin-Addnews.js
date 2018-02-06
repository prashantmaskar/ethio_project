$(document).ready(function() {

    $('#addnews').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            caption: {
                validators: {
                    notEmpty: {
                        message: ' please enter news title!!!..'
                    }
                }
            },



         Description:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    }
                    
                    }
                
             },

         catagory:{
                validators:{
                    notEmpty:{
                        message:  'select category required!!!'
                    }
                    
                    }
                
             },


        /*   avatar:{
            validators:{
                notEmpty:{
                    message:'Please select an image'
                },
                 file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           }, */

            author: {
                validators: {
                    notEmpty: {
                        message: ' Please enter auther name!!!..'
                    }
                }
            },
             
            date: {
                validators: {
                    notEmpty: {
                        message: ' Date can not be Empty!!!..'
                    }
                }
            },
                source_link: {
                validators: {
                    notEmpty: {
                        message: ' Enter source link!!!..'
                    }
                }
            },
                p_caption: {
                validators: {
                    notEmpty: {
                        message: ' Enter photo caption!!!..'
                    }
                }
            },


               
             




             }
    });
});