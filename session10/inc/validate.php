<?php


$validates=[

"username" =>[
    'filter' => FILTER_VALIDATE_REGEXP ,
    'my_options' => ['options' => ['regexp' =>  '/^[A-Z][a-z]{2,8}/']] ,
    'error'=> "username start upper  and len  between 2 and 8 "

    ],

    "password" =>[
    'filter' => FILTER_VALIDATE_REGEXP ,
    'my_options' => ['options' => ['regexp' =>  '/[a-z0-9A_Z#]{3,8}/']] ,
    'error'=> "invalid password"

    ],


    "age" =>[
    'filter' => FILTER_VALIDATE_INT ,
    'my_options' => ['options' => ['min_range'=>10 , 'max_range'=>50]] ,
    'error'=> "invalid age"

    ],

      "email" =>[
    'filter' => FILTER_VALIDATE_EMAIL ,
    'error'=> "invalid email"

    ],


    //     "price" =>[
    // 'filter' => FILTER_VALIDATE_INT ,
    // 'my_options' => ['options' => ['min_range'=>10 , 'max_range'=>50]] ,
    // 'error'=> "invalid age"

    // ]



];