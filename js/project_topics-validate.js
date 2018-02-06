  $(document).ready(function() {

    $('#project_topic').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            Project_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter the name of project!!!..'
                    }
                }
            },
              course_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter cource name !!!..'
                    }
                }
            },
 

                  Year: {
                validators: {
                    notEmpty: {
                        message: ' please select Year!!!..'
                    }
                }
            },
            format_type: {
                validators: {
                    notEmpty: {
                        message: ' please select format type!!!..'
                    }
                }
            },
 
              
                 fileformat: {
                 validators: {
                   file: {
                     extension: 'doc,docx,pdf,rtf',
                      type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf',
                          //maxSize: 5120 * 5120 * 5120 * 5120 * 5120,   // 5 MB
                          message: 'The selected file is not valid, it should be (doc,docx,pdf,rtf) and 5 MB at maximum.'
                            },
                          notEmpty: {
                        message: 'File is required.'
                          }
                        }
                     }
                 /* upload1: {
                validators: {
                    notEmpty: {
                        message: ' you must upload file!!!..'
                    }
                }
            },*/
 




        }
    });
});

