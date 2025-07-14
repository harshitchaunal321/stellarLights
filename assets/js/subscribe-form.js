jQuery(document).ready(function ($) {
    $('#footer-subscribe-form').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        var form = $(this);
        var responseDiv = $('#subscribe-response');
        var name = $('#Name').val();
        var email = $('#Email').val();

        // Clear previous response messages
        responseDiv.removeClass('error success').text('');

        // Perform AJAX request
        $.ajax({
            url: stellarLightsAjax.ajaxurl, // Localized AJAX URL
            type: 'POST',
            data: {
                action: 'handle_footer_subscribe',
                footer_subscribe_nonce_field: form.find('input[name="footer_subscribe_nonce_field"]').val(),
                name: name,
                email: email
            },
            success: function (response) {
                if (response.success) {
                    // Display success message
                    responseDiv.addClass('success').text(response.data.message);
                    // Clear form fields
                    form.find('input[name="name"]').val('');
                    form.find('input[name="email"]').val('');
                } else {
                    // Display error message
                    responseDiv.addClass('error').text(response.data.message);
                }
            },
            error: function () {
                responseDiv.addClass('error').text('An error occurred. Please try again.');
            }
        });
    });
});