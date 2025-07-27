# Contact Form Implementation

## Overview
The contact form on the Stellar Lights website has been implemented with full functionality including:
- Form validation
- AJAX submission
- Email notifications
- Success/error message display
- Security features (nonce verification)

## Files Modified/Created

### 1. `functions.php`
- Added `handle_contact_form()` function for processing form submissions
- Added AJAX action hooks for both logged-in and non-logged-in users
- Updated script enqueuing to include contact form JavaScript

### 2. `page-contact.php`
- Added nonce field for security
- Added form message display div
- Updated form button to be submit type
- Fixed label association for textarea

### 3. `assets/js/contact-form.js` (New)
- Handles form submission via AJAX
- Shows loading states
- Displays success/error messages
- Handles form reset after successful submission
- Manages label animations

### 4. `assets/css/contact.css`
- Added styles for success/error messages
- Added disabled button styles
- Added active label state styles
- Added responsive styles for messages

## Features

### Form Fields
- **Name** (required)
- **Email Address** (required)
- **Company Name** (optional)
- **Contact Number** (optional)
- **Show Location** (optional)
- **Proposed Show Date** (optional)
- **Event Details** (optional)

### Security Features
- WordPress nonce verification
- Input sanitization
- Email validation
- CSRF protection

### User Experience
- Real-time form validation
- Loading states during submission
- Clear success/error messages
- Form reset after successful submission
- Smooth scrolling to messages
- Responsive design

### Email Configuration
The form sends emails to: `garwalshailesh4@gmail.com`

To change the email address, edit the `$to` variable in the `handle_contact_form()` function in `functions.php`.

## How It Works

1. User fills out the contact form
2. JavaScript captures the form submission
3. Form data is sent via AJAX to WordPress
4. Server validates and sanitizes the data
5. Email is sent using WordPress `wp_mail()` function
6. Success/error response is sent back to the browser
7. User sees appropriate message and form is reset if successful

## Testing

To test the form:
1. Navigate to the Contact page
2. Fill out the required fields (Name and Email)
3. Click "Send"
4. Check for success message
5. Verify email is received at the configured address

## Troubleshooting

### Email Not Sending
- **Test Email Functionality**: Visit `http://yoursite.com/?test_email=1` to test if WordPress email is working
- **Check WordPress mail configuration**: Verify SMTP settings if using a plugin
- **Install SMTP Plugin**: Install "WP Mail SMTP" or "Post SMTP" plugin for reliable email sending
- **Check server logs**: Look for email-related errors in WordPress debug logs
- **Local Development**: On localhost, emails often don't send. The form will still work and log submissions to `contact-form-log.txt`

### Form Not Submitting
- Check browser console for JavaScript errors
- Verify AJAX URL is correct
- Check WordPress debug logs
- Ensure jQuery is loaded

### Styling Issues
- Clear browser cache
- Check CSS file is loading correctly
- Verify responsive breakpoints

### Debug Mode
When `WP_DEBUG` is enabled:
- Form submissions are logged to `contact-form-log.txt` in your theme directory
- Success messages are shown even if email fails
- Check the log file to see all form submissions

## Customization

### Change Email Address
Edit line in `functions.php`:
```php
$to = 'your-email@example.com';
```

### Modify Success Message
Edit the success message in `functions.php`:
```php
wp_send_json_success(array('message' => 'Your custom message here'));
```

### Add Additional Fields
1. Add field to HTML form in `page-contact.php`
2. Add field processing in `handle_contact_form()` function
3. Update email template to include new field
4. Add validation if needed 