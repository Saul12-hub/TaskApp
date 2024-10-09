<?php

return [
    'email' =>[
            'is_unique' =>'Ese correo electrónico ya está registrado'
        ],
        'password_confirmation' => [
            'required' =>'Por favor, confirma la contraseña',
            'matches'  =>'Por favor, repite la contraseña'
        ]
];