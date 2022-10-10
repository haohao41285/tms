<?php
return [
    'menu' => [
        'home' => 'Home',
        'about-us' => 'About us',
        'faqs' => 'FAQs',
        'contact-us' => 'Contact us'
    ],
    'page' => [
        'not-found' => 'Page not found',
        'go-to-home' => 'Go to Home'
    ],
    'contact' => [
        'title' => 'For all your needs please contact us',
        'your-name' => 'Your name',
        'your-phone' => 'Your phone',
        'your-email' => 'Your email',
        'your-message' => 'Your message',
        'send-button' => 'Send',
        'sent-success' => 'Contact sent successfully. We will contact you soon. Thank you guest!',
        'google-recaptcha-required' => 'The google reCaptcha is required.'
    ],
    'home' => [
        'banner' => [
            'title1' => 'With Freelance <span>low cost</span>',
            'title2' => 'Working time <span>flexible</span>',
            'title3' => 'worklow <span>simple</span>'
        ],
        'why' => [
            'title' => 'Why choose us ?',
            'description' => 'With a team of senior members in the web design and operation industry, there are advantages of Freelancing:',
            'facts' => '<li><i class="fa fa-check" aria-hidden="true"></i> Low construction cost.</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Flexible working time</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Simplified workflow</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Lifetime warranty<li>',
        ],
        'project' => [
            'type' => 'Project Type',
            'type1' => [
                'name' => 'Introduction',
                'description' => 'Company and store introduction,...'
            ],
            'type2' => [
                'name' => 'E-commerce',
                'description' => 'Sales, E-commerce...'
            ],
            'type3' => [
                'name' => 'Realtime',
                'description' => 'Real-time reporting and updates...'
            ]
        ],
        'technology' => [
            'title' => 'technology used',
            'description' => 'Some technology we use to build'
        ]
    ],
    'about-us' => [
        'advantages' => [
            'advantage1' => [
                'title' => 'Lower construction costs',
                'description' => "Freelancer's construction cost is significantly lower than through the organization, easy to negotiate"
            ],
            'advantage2' => [
                'title' => 'Flexible working time',
                'description' => 'Can contact and work outside office hours, quick response'
            ],
            'advantage3' => [
                'title' => 'Simplified workflow',
                'description' => 'Working directly with developers and customers, it is easy to understand the needs and optimize the time for customers'
            ],
            'advantage4' => [
                'title' => 'Lifetime warranty',
                'description' => 'Lifetime warranty, ensuring benefits and long-term working with customers'
            ]
        ],
        'our-technology' => [
            'title' => 'Technology used',
            'description' => 'Using the latest technology and in line with customer needs',
            'more' => "Or according to customer's request"
        ]
    ],
    'faqs' => [
        'title' => 'Some frequently asked questions'
    ],
    'validate' => [
        'name' => [
            'required' => 'The name field is required',
            'min' => 'The name must be at least :min characters',
            'max' => 'The name must not be greater than :max characters.'
        ],
        'email' => [
            'email' => 'The email must be a valid email address.'
        ],
        'message' => [
            'required' => 'The message field is required',
            'max' => 'The message must not be greater than :max characters.',
            'min' => 'The message must be at least :min characters'
        ],
        'google-recaptcha' => [
            'required' => 'The Google reCaptcha field is required.'
        ]
    ]
];