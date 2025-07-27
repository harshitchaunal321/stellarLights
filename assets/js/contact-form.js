jQuery(document).ready(function ($) {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault();

        // Get form data
        var formData = new FormData(this);
        formData.append('action', 'handle_contact_form');

        // Show loading state
        var submitButton = $(this).find('.submit-button');
        var originalText = submitButton.text();
        submitButton.text('Sending').prop('disabled', true);

        // Hide any existing messages
        $('#form-message').hide();

        // Send AJAX request
        $.ajax({
            url: stellarLightsAjax.ajaxurl,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
                    // Show success message
                    $('#form-message')
                        .removeClass('error-message')
                        .addClass('success-message')
                        .text(response.data.message)
                        .show();

                    // Reset form
                    $('#contact-form')[0].reset();

                    // Reset labels
                    $('.form-group label').each(function () {
                        $(this).removeClass('active');
                    });
                } else {
                    // Show error message
                    $('#form-message')
                        .removeClass('success-message')
                        .addClass('error-message')
                        .text(response.data.message)
                        .show();
                }
            },
            error: function () {
                // Show generic error message
                $('#form-message')
                    .removeClass('success-message')
                    .addClass('error-message')
                    .text('An error occurred. Please try again.')
                    .show();
            },
            complete: function () {
                // Reset button state
                submitButton.text(originalText).prop('disabled', false);

                // Scroll to message
                $('html, body').animate({
                    scrollTop: $('#form-message').offset().top - 100
                }, 500);
            }
        });
    });

    // Handle label animations
    $('.form-group input, .form-group textarea').on('focus blur', function () {
        var $this = $(this);
        var $label = $this.siblings('label');

        if ($this.val() || $this.is(':focus')) {
            $label.addClass('active');
        } else {
            $label.removeClass('active');
        }
    });

    // Initialize labels on page load
    $('.form-group input, .form-group textarea').each(function () {
        var $this = $(this);
        var $label = $this.siblings('label');

        if ($this.val()) {
            $label.addClass('active');
        }
    });
}); 