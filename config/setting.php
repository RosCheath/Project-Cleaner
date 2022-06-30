<?php

return [
    'roles' =>[
        'Admin', 'Cleaner','User'
    ],

    'users' => [
        [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '11112222',
            'phone' => '0966855502',
            'sex' => 'Male',
            'date_of_birth' => '2000-09-23',
            'role' => 'Admin',
            'image' => 'https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419',
        ],
        [
            'name' => 'Cleaner',
            'email' => 'Cleaner@gmail.com',
            'password' => '11112222',
            'phone' => '0966855502',
            'sex' => 'Male',
            'date_of_birth' => '2000-09-23',
            'role' => 'Cleaner',
            'image' => 'https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419',
        ],
        [
            'name' => 'Cleaner1',
            'email' => 'Cleaner1@gmail.com',
            'password' => '11112222',
            'phone' => '0966855502',
            'sex' => 'Male',
            'date_of_birth' => '2000-09-23',
            'role' => 'Cleaner',
            'image' => 'https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419',
        ],
        [
            'name' => 'User',
            'email' => 'User@gmail.com',
            'password' => '11112222',
            'phone' => '0966855502',
            'sex' => 'Male',
            'date_of_birth' => '2000-09-23',
            'role' => 'User',
            'image' => 'https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419',
        ]
    ],
    'services' => [
        [
            'name' => 'HouseKeeping',
            'title' => 'For Cleaner in one day ',
            'image' => 'https://content.tinytap.it/9C451F0A-7A2F-46A4-9374-256170F99113/unzipped%2Fphoto1%2Fphoto1phone.jpg',
            'price' => '9.99',
            'time_line' => '1 day'
        ],
        [
            'name' => 'TeamCleaning',
            'title' => 'For Cleaner in a Day And Work as Group',
            'image' => 'https://planomoms.com/wp-content/uploads/2021/03/House-Cleaning-service.jpg',
            'price' => '67.99',
            'time_line' => '1 Week'
        ],
//        [
//            'name' => 'Month',
//            'title' => 'For Cleaner in one month',
//            'image' => 'https://s.marketwatch.com/public/resources/images/MW-BM466_pfhous_MG_20131003164731.jpg',
//            'price' => '269.99',
//            'time_line' => '1 Month'
//        ]
    ],
    'status' => [
      'Pending','Approved','Done','Rejected'
    ],


    'Image_Head' => [
        [
            'name' => 'Home Screen',
            'image' => 'https://emilypost.com/client_media/images/domestic-employee.jpg'
        ],
        [
            'name' => 'Service Screen',
            'image' => 'https://www.wallstwatchdog.com/wp-content/uploads/2017/04/Waitress-bringing-coffees-to-a-male-couple-at-a-restaurant.jpg'
        ],
        [
            'name' => 'About Screen',
            'image' => 'https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/880/cached.offlinehbpl.hbpl.co.uk/news/OTM/friends_with_boss.jpg'
        ],
        [
            'name' => 'Booking Screen',
            'image' => 'https://s1.kaercher-media.com/media/image/file/812/d3/hotel-und-gastgewerbe.webp'
        ],
        [
            'name' => 'Contact Screen',
            'image' => 'https://w6ig3zr1jm-flywheel.netdna-ssl.com/wp-content/uploads/2020/04/bigstock-Cleaning-Lady-Vacuuming-The-Ca-321786826-scaled.jpg'
        ]
    ],
    'Becom_Cleaner' => [
        [
          'name' => 'Per Time',
          'price' => '3.00',
          'title1' => 'Freedom',
          'title2'=> 'Policy',
          'title3' => 'Easy',
          'title4'=> 'Cleaning'
        ],
        [
            'name' => 'Per Day',
            'price' => '12.00',
            'title1' => 'Freedom',
            'title2'=> 'Policy',
            'title3' => 'Easy',
            'title4'=> 'Cleaning'
        ],
        [
            'name' => 'Per Week',
            'price' => '84.00',
            'title1' => 'Freedom',
            'title2'=> 'Policy',
            'title3' => 'Easy',
            'title4'=> 'Cleaning'
        ],
        [
            'name' => 'Per Month',
            'price' => '336.00',
            'title1' => 'Freedom',
            'title2'=> 'Policy',
            'title3' => 'Easy',
            'title4'=> 'Cleaning'
        ],
    ]

];
