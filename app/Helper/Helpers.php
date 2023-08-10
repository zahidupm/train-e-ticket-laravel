<?php

function eticket_stations(){
    return [
        [
            'name' => 'Dhaka',
            'address' => 'Dhaka',
            'lat' => 90.3434,
            'lon' => -92.3434,
        ],
        [
            'name' => 'Dhaka Bimanbondor',
            'address' => 'Dhaka Bimanbondor',
            'lat' => 90.34434,
            'lon' => -92.34434,
        ],
        [
            'name' => 'Khulna',
            'address' => 'Khulna',
            'lat' => 90.34334,
            'lon' => -92.34334,
        ],
    ];
}

function eticket_trains(){
    return [
      [
          'name' => 'Suborno Express',
          'date' => '2023-08-12',
          'home_station_id' => 1,
          'start_time' => '06:00'
      ],
      [
          'name' => 'Chitra Express',
          'date' => '2023-08-12',
          'home_station_id' => 1,
          'start_time' => '11:00'
      ],
    ];
}

function eticket_bogis(){
    return ['KA', 'KHA'];
}
