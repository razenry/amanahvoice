<?php

return [

    'title' => 'Lupa kata sandi?',
    'heading' => 'Lupa kata sandi?',

    'actions' => [
        'login' => [
            'label' => 'Kembali ke halaman masuk',
        ],
    ],

    'form' => [
        'email' => [
            'label' => 'Alamat email',
        ],

        'actions' => [
            'request' => [
                'label' => 'Kirim tautan reset',
            ],
        ],
    ],

    'notifications' => [

        'sent' => [
            'title' => 'Tautan reset terkirim.',
            'body' => 'Kami telah mengirimkan email berisi tautan untuk mengatur ulang kata sandi Anda.',
        ],

        'not-found' => [
            'title' => 'Alamat email tidak ditemukan.',
        ],

        'throttled' => [
            'title' => 'Terlalu banyak percobaan',
            'body' => 'Silakan coba lagi dalam :seconds detik.',
        ],

    ],

];
