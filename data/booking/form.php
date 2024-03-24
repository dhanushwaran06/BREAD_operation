<?php

// $f = ['table' => 'user_info' , 
//     'fields' => ['user_name', 'age', 'mobile', 'email', 'gender', 'booking_date', 'booking_time', 'city', 'consultation', 'address', 'pincode']

// ];


$form = [

    'table' => 'user_info',

    'fields' => [
        [
            'is_text' => true,
            'label' => 'Name',
            'type' => 'text',
            'id' => 'user_name',
            'name' => 'user_name',
            'min_len' => '1',
            'max_len' => '30',
            'is_required' => true
        ],
        [
            'is_text' => true,
            'label' => 'Age',
            'type' => 'number',
            'id' => 'age',
            'name' => 'age',
            'min_len' => '0',
            'max_len' => '150',
            'is_required' => true
        ],
        [
            'is_text' => true,
            'label' => 'Mobile No',
            'type' => 'tel',
            'id' => 'mobile',
            'name' => 'mobile',
            'min_len' => '10',
            'max_len' => '10',
            'is_required' => true
        ],
        [
            'is_text' => true,
            'label' => 'Email',
            'type' => 'email',
            'id' => 'email',
            'name' => 'email',
            'is_required' => true
        ],
        [
            'is_select' => true,
            'label' => 'Gender',
            'type' => 'select',
            'id' => 'gender',
            'name' => 'gender',
            'is_required' => true,
            'option_data' => [
                ['l' => 'Male', 'v' => "Male"],
                ['l' => 'Female', 'v' => "Female"],
                ['l' => 'Other', 'v' => "Other"]
            ]
        ],
        [
            'is_text' => true,
            'label' => 'Date',
            'type' => 'date',
            'id' => 'booking_date',
            'name' => 'booking_date',
            'is_required' => true
        ],
        [
            'is_select' => true,
            'label' => 'Time',
            'type' => 'booking_time',
            'name' => 'booking_time',
            'id' => 'booking_time',
            'is_required' => true,
            'option_data' => [
                ['l' => '11:30', 'v' => "11:30"],
                ['l' => '02:30', 'v' => "02:30"],
                ['l' => '04:00', 'v' => "04:00"]
            ],
        ],
        [
            'is_text' => true,
            'label' => 'City',
            'type' => 'text',
            'id' => 'city',
            'name' => 'city',
            'min_len' => '1',
            'max_len' => '30',
            'is_required' => true,


        ],
        [
            'is_select' => true,
            'label' => 'Consultation Mode',
            'type' => 'select',
            'id' => 'consultation',
            'name' => 'consultation',
            'is_required' => true,
            'option_data' => [
                ['l' => 'Coimbatore', 'v' => "Coimbatore"],
                ['l' => 'Chennai', 'v' => "Chennai"],
                ['l' => 'online', 'v' => "online"]
            ]
        ],
        [
            'label' => 'Address',
            'type' => 'textarea',
            'id' => 'address',
            'name' => 'address',
            'min_len' => '1',
            'max_len' => '200',
            'row' => '4',
            'col' => '50',
            'is_required' => true,
            'is_textarea' => true
        ],
        [
            'is_text' => true,
            'label' => 'Pincode',
            'type' => 'text',
            'id' => 'pincode',
            'name' => 'pincode',
            'min_len' => '6',
            'max_len' => '6',
            'is_required' => true
        ],

    ]

];
