$(document).ready(function() {

    $('#postevent').bootstrapValidator({
        
        fields: {
            event_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter event name!!!..'
                    }
                }
            },
            event_venue: {
                validators: {
                    notEmpty: {
                        message: 'required!!!..'
                    }
                }
            },
             event_title: {
                validators: {
                    notEmpty: {
                        message: 'Please enter event title!!!..'
                    }
                }
            },
               subject: {
                validators: {
                    notEmpty: {
                        message: 'Please enter subject!!!..'
                    }
                }
            },
            Description:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    }
                    /*stringLength:{
                        message:'post Description must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
             post_event_date: {
                validators: {
                    notEmpty: {
                        message: 'Please enter date!!!..'
                    }
                }
            },
            post_event_time: {
                validators: {
                    notEmpty: {
                        message: 'Please enter time!!!..'
                    }
                }
            },

          avatar:{
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



             postedby: {
                validators: {
                    notEmpty: {
                        message: 'required field!!!..'
                    }
                }
            },
 
        }
    });
});