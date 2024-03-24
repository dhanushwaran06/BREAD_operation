<?php

// $f = ['table' => 'user_info' , 
//     'fields' => ['user_name', 'age', 'mobile', 'email', 'gender', 'booking_date', 'booking_time', 'city', 'consultation', 'address', 'pincode']

// ];


$form = [

    'table' => 'consultation',

    'fields' => [
        [
            'is_text' => true,
            'label' => 'Label',
            'type' => 'text',
            'id' => 'label',
            'name' => 'label',
            'min_len' => '1',
            'max_len' => '30',
            'is_required' => true
        ],
        [
            'is_select' => true,
            'label' => 'consultation',
            'name' => 'mode',
            'id' => 'mode',
            'is_required' => true,
            'option_data' => [
                ['l' => 'Chennai', 'v' => "Chennai"],
                ['l' => 'Coimbatore', 'v' => "Coimbatore"],
                ['l' => 'Thanjavur', 'v' => "Thanjavur"]
            ],
        ],
    ]

];
