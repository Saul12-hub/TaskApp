<?php

return [
    'email' =>[
            'is_unique' =>'That email is already registered'
        ],
        'password_confirmation' => [
            'required' =>'Please confirm the password',
            'matches'  =>'Please repeat the password'
        ]
];