$(document).ready(function() {

    $('#addcategory').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            category_name: {
                validators: {
                    notEmpty: {
                        message: 'please enter category name!!!..'
                    }
                }
            },



         category_type:{
                validators:{
                    notEmpty:{
                        message:  ' select category type!!'
                    }
                    /*stringLength:{
                        message:'post Description must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
             
             




             }
    });
});