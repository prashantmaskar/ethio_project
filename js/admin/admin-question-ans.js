$(document).ready(function() {

    $('#Queans').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            quetype: {
                validators: {
                    notEmpty: {
                        message: ' please enter question type!!!..'
                    }
                }
            },
              subcat: {
                validators: {
                    notEmpty: {
                        message: ' please enter subject/cource category !!!..'
                    }
                }
            },
 

                  question: {
                validators: {
                    notEmpty: {
                        message: ' please ask your question !!!..'
                    }
                }
            },
 





















        }
    });
});