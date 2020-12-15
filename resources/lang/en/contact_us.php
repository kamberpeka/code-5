<?php

return [
    'form' => [
        'title' => 'Contact Us',
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Enter your message here',
        'action' => 'Send Message'
    ],
    'response' => [
        'success' => [
            'title' => 'Thank you!',
            'heading' => 'Thanks for reaching out',
            'text' => 'We have received your e-mail and we will get in touch with you as soon as possible.'
        ],
        'failed' => [
            'title' => 'Sorry',
            'heading' => 'Message not sent!',
            'text' => "We are sorry, we couldn't receive your message. Please try again or
                        send an email to our support team."
        ]
    ]

];