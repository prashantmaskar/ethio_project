 $(document).ready(function() {

    $('#reportnews').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            caption: {
                validators:{
                  notEmpty:{
                        message:'name required'
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
             catagory: {
                validators: {
                    notEmpty: {
                        message: ' please select catagory !!!..'
                           
                    }
                }
            },

             fileformat:{
            validators:{
               /* notEmpty:{
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


        

            auther: {
                validators: {
                    notEmpty: {
                        message: ' please enter auther name!!!..'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The  name can consist of alphabetical characters and spaces only'
                    }
                }
            },
             
            /*date: {
                validators: {
                    notEmpty: {
                        message: ' date can not be Empty!!!..'
                    }
                }
            },*/
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