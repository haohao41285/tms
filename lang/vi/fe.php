<?php
return [
    'menu' => [
        'home' => 'Trang Chủ',
        'about-us' => 'Về chúng tôi',
        'faqs' => 'Hỏi & đáp',
        'contact-us' => 'Liên hệ'
    ],
    'page' => [
        'not-found' => 'Không tìm thấy trang',
        'go-to-home' => 'Đi tới trang chủ'
    ],
    'contact' => [
        'title' => 'Mọi thắc mắc và yêu cầu của bạn vui lòng liên hệ với chúng tôi',
        'your-name' => 'Họ và tên',
        'your-phone' => 'Số điện thoại',
        'your-email' => 'Địa chỉ email',
        'your-message' => 'Nội dung',
        'send-button' => 'Gửi',
        'sent-success' => 'Gửi liên hệ thành công. Chúng tôi sẽ sớm liên hệ với Quý khách. Cảm ơn Quý khách!',
    ],
    'home' => [
        'banner' => [
            'title1' => 'Với Freelance <span>chi phí xây dựng thấp</span>',
            'title2' => 'Thời gian làm việc <span>linh hoạt</span>',
            'title3' => 'Quy trình làm việc <span>đơn giản</span>'
        ],
        'why' => [
            'title' => 'Tại sao lựa chọn chúng tôi ?',
            'description' => 'Với đội ngũ thành viên có thâm niên trong ngành thiết kế và vận hành web, với những ưu điểm trong Freelance:',
            'facts' => '<li><i class="fa fa-check" aria-hidden="true"></i> Chi phí xây dựng thấp hơn.</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Thời gian làm việc linh hoạt</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Quy trình làm việc tối giản</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Bảo hành trọn đời</li>',
        ],
        'project' => [
            'type' => 'Loại dự án',
            'type1' => [
                'name' => 'Introduction',
                'description' => 'Giới thiệu công ty, cửa hàng,...'
            ],
            'type2' => [
                'name' => 'E-commerce',
                'description' => 'Bán hàng, Thương mại điện tử...'
            ],
            'type3' => [
                'name' => 'Realtime',
                'description' => 'Báo cáo, cập nhật theo thời gian thực...'
            ]
        ],
        'technology' => [
            'title' => 'Công nghệ sử dụng',
            'description' => 'Một số công nghệ chúng tôi thường dùng để xây dựng'
        ]
    ],
    'about-us' => [
        'advantages' => [
            'advantage1' => [
                'title' => 'Chi phí xây dựng thấp hơn',
                'description' => 'Chi phí xây dựng của Freelancer thấp hơn đáng kể so với thông qua tổ chức, dễ dàng thỏa thuận'
            ],
            'advantage2' => [
                'title' => 'Thời gian làm việc linh hoạt',
                'description' => 'Có thể liên hệ và làm việc ngoài giờ hành chính, phản hồi nhanh chóng'
            ],
            'advantage3' => [
                'title' => 'Quy trình làm việc tối giản',
                'description' => 'Làm việc trực tiếp với người phát triển và khách hàng, dễ thấu hiểu nhu cầu cũng như tối ưu hóa thời gian cho khách hàng'
            ],
            'advantage4' => [
                'title' => 'Bảo hành trọn đời',
                'description' => 'Bảo hành trọn đời, đảm bảo quyền lợi và  làm việc dài lâu với khách hàng'
            ]
        ],
        'our-technology' => [
            'title' => 'Công nghệ sử dụng',
            'description' => 'Công nghệ sử dụng mới nhất và phù hợp với nhu cầu khách hàng',
            'more' => 'Hoặc theo yêu cầu của khách hàng'
        ]
    ],
    'faqs' => [
        'title' => 'Một số câu hỏi thường gặp',
        'websites' => [
            'title' => 'Websites',
            'qa1' => [
                'question' => 'Thời gian để xây dựng một web site trong bao lâu',
                'answer' => 'Thông thường từ 1, 2 tháng. Tùy thuộc vào loại dự án và yêu cầu của quý khách về chức năng, giao diện cũng như công nghệ sử dụng có thể thời gian sẽ nhanh hơn hoặc thời gian nhiều hơn.'
            ],
            'qa2' => [
                'question' => 'Quy trình làm việc để xây dựng một website',
                'answer' => '<ul>
                    <li>Làm việc với khách hàng về yêu cầu tổng quát</li>
                    <li>Phác thảo sơ bộ, tư vấn về các chức năng của khách hàng</li>
                    <li>Lên ý tưởng thiết kế, thiết kế giao diện</li>
                    <li>Gửi khách hàng thiết kế phê duyệt và phản hồi</li>
                    <li>Xây dựng backend</li>
                    <li>Gửi khách hàng kiểm tra, phê duyệt và phản hồi</li>
                    <li>Chỉnh sửa, cập nhật</li>
                    <li>Hoàn thành</li>
                </ul>',
                'note' => 'Dự án sẽ được bào hành suốt đời. Nâng cấp được tính phí theo chức năng và độ thân thiết của cấp độ khách hàng, có thể là miễn phí'
            ],
        ]
    ],
    'validate' => [
        'name' => [
            'required' => 'Vui lòng nhập trường tên',
            'min' => 'Tên ít nhất :min ký tự',
            'max' => 'Tên không quá :max ký tự'
        ],
        'email' => [
            'email' => 'Vui lòng nhập mail'
        ],
        'message' => [
            'required' => 'Vui lòng nhập nội dung lời nhắn',
            'max' => 'Nội dung không quá :max ký tự',
            'min' => 'Nội dung ít nhất :min ký tự'
        ],
        'google-recaptcha' => [
            'required' => 'Vui lòng tích vào kiểm tra Google reCAPTCHA.'
        ]
    ]
];