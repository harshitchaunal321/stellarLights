document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('footer-subscribe-form');
    const responseDiv = document.getElementById('subscribe-response');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Clear previous messages
            responseDiv.style.display = 'none';
            responseDiv.innerHTML = '';

            const formData = new FormData(form);
            formData.append('action', 'handle_footer_subscribe');

            fetch(ajaxurl, {
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    responseDiv.style.display = 'block';
                    if (data.success) {
                        responseDiv.style.color = 'green';
                        responseDiv.innerHTML = data.data.message;
                        form.reset(); // Clear the form
                    } else {
                        responseDiv.style.color = 'red';
                        responseDiv.innerHTML = data.data.message;
                    }
                })
                .catch(error => {
                    responseDiv.style.display = 'block';
                    responseDiv.style.color = 'red';
                    responseDiv.innerHTML = 'An error occurred. Please try again later.';
                    console.error('Error:', error);
                });
        });
    }
});