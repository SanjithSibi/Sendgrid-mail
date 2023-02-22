
jQuery(document).ready(function($) {
    $('#submit').click(function() {

        var to=$('#to').val();
        var subject=$('#subject').val();
        var body=$('#body').val();

        $.ajax({
            type: 'post',
            url: contactForm.ajaxUrl,
            data: {
                action: 'submitForm',
                to: to, subject: subject, body: body,
                 },
            success: function (response) {
                alert('successfully sent');
                console.log(response.data);


                },
            error: function () {
                alert('hi');

                }


        });


        return false;
    });
});
