$(document).ready(function() {

    $('#addevent').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            event_name: {
                validators: {
                    notEmpty: {
                        message: 'Please write event_name!!!..'
                    }
                }
            },
              event_tital: {
                validators: {
                    notEmpty: {
                        message: ' please write event title!!!..'
                    }
                }
            },
             event_venue: {
                validators: {
                    notEmpty: {
                        message: ' required!!!..'
                    }
                }
            },
 
                Description:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    }
                   /* stringLength:{
                        message:'post Description must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
 
          /*     avatar:{
            validators:{
                notEmpty:{
                    message:'please select an image'
                },
                 file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           },   */

             post_event_date: {
                validators: {
                    notEmpty: {
                        message: ' post your event date!!!..'
                    }
                }
            },
              post_event_time: {
                validators: {
                    notEmpty: {
                        message: ' post your event time!!!..'
                    }  

                }
            },
                 
                  eventby: {
                validators: {
                    notEmpty: {
                        message: ' must write!!!..'
                    }
                }
            },

 




        }
    });
});