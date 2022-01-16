<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('storage/app/mpdf'),
	'pdf_a'                 => false,
	'pdf_a_auto'            => false,
	'icc_profile_path'      => '',
    'show_watermark_image'       => true,
    'watermark_image_alpha'      => 0.9,
    'watermark_image_size'       => 'D',
    'font_path' => base_path('public/fonts/ttf/'),
    'font_data' => [
        'IRANSans' => [
            'R' => "IRANSansWeb.ttf", //regular
            'B' => "IRANSansWeb.ttf", //bold
            'I' => "IRANSansWeb.ttf", //italic
            'BI' => "IRANSansWeb.ttf", //bold-italic
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ]
    ]

];
