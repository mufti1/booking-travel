/***************************************************
		FORM VALIDATION JAVASCRIPT
***************************************************/
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#contact-form").validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    }
                   
                },
                messages: {
                    name: "Please enter your firstname",
                    email: "Please enter a valid email address"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
