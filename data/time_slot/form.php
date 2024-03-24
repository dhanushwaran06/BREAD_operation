<?php

// $f = ['table' => 'user_info' , 
//     'fields' => ['user_name', 'age', 'mobile', 'email', 'gender', 'booking_date', 'booking_time', 'city', 'consultation', 'address', 'pincode']

// ];


$form = [

    'table' => 'time_slot',

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
            'label' => 'Time Slot',
            'name' => 'time_slot',
            'id' => 'time_slot',
            'is_required' => true,
            'option_data' => [
                ['l' => '11:30', 'v' => "11:30"],
                ['l' => '02:30', 'v' => "02:30"],
                ['l' => '04:00', 'v' => "04:00"]
            ],
        ],
    ]

];
