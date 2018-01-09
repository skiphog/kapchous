<?php

return [

    /**
     * Язык
     * Используется в определении языка страницы + определение гугл карты
     */
    'lang' => 'en',

    /**
     * Язык переключения
     */
    'prev' => 'ru',

    /**
     * Описание сайта (METATAG)
     */
    'description' => 'The coolest bar in the world is KAPCHO!',

    /**
     * Название сайта (TITLE)
     */
    'title' => 'KAPCHO? BAR',

    /**
     * Меню для сайта
     */
    'menu' => [
        'cho-v-kapcho'    => 'About Us?',
        'kapcho-gallery'  => 'Gallery',
        'kapcho-eat'      => 'Menu',
        'kapcho-contacts' => 'Contacts'
    ],

    /**
     * Заказ стола (Элемент в меню. Вызывает модальное окно с формой)
     */
    'contact_dialog' => 'Reserve a table',

    /**
     * Картинка логотип
     */
    'kapcho-logo' => [
        'path' => '/img/english.png',
        'alt'  => 'KAPCHO LOGO'
    ],

    /**
     * Заголовок h1
     * Он не виден на странице, но нужен для поисковиков
     */
    'h1' => 'KAPCHO BAR',

    /**
     * 1. Че в капчо
     */
    'cho-v-kapcho' => [
        'h2'      => 'About Us',
        'content' => 'Smoke BBQ kitchen is the main idea of our bar. Here we make all the specialties – brisket, holy BBQ ribs, tar-tar, ceviche and even desserts. Chef cuisine - Vasilyi Chervenko. Behind a bar – owners Nikita Ignatev and Konstantin Tuikov. What to drink? Soft-hearted wine, gastronomic craft and inspiring homemade drinks. Have tasted our smoke cherry bourbon? Every week – degustations, BBQ parties and always with a good music.'
    ],

    /**
     * 2. Галерея
     */
    'kapcho-gallery' => [
        'h2'      => 'Delicious smoked food',
        'gallery' => [
            ['path' => '/img/bar/1.jpg', 'alt' => 'Tasty food'],
            ['path' => '/img/bar/2.jpg', 'alt' => 'Tasty food'],
            ['path' => '/img/bar/3.jpg', 'alt' => 'Tasty food'],
            ['path' => '/img/bar/4.jpg', 'alt' => 'Tasty food'],
            ['path' => '/img/bar/5.jpg', 'alt' => 'Tasty food'],
            ['path' => '/img/bar/6.jpg', 'alt' => 'Tasty food'],
            ['path' => '/img/bar/7.jpg', 'alt' => 'Tasty food'],
            ['path' => '/img/bar/8.jpg', 'alt' => 'Tasty food'],
            ['path' => '/img/bar/9.jpg', 'alt' => 'Tasty food'],
        ]
    ],

    /**
     * 3. Скачать меню
     */
    'kapcho-eat' => [
        'h2' => 'Food and drink',
        'eat-content' => [
            ['title' => 'Food', 'link' => '/api/eda.pdf', 'text' => 'Download PDF'],
            ['title' => 'Bar', 'link' => '/api/bar.pdf', 'text' => 'Download PDF']
        ],
        'notice' => 'Information in the menu is not a public offer.'
    ],

    /**
     * 4. Контакты
     */
    'kapcho-contacts' => [
        'h2'      => 'Address and telephone number',
        'address' => 'Ekaterinburg, Rozy Luxembourg 8/10',
        'mail'    => 'Contact Us',
        'phone'   => 'Phone number',
        'what'    => 'Write to us'
    ],

    /**
     * 5. Время работы
     */
    'works-time' => [
        'h2'   => 'We are open',
        'time' => [
            ['days' => 'Mo - Th', 'hours' => '12:00 - 00:00'],
            ['days' => 'Fr', 'hours' => '12:00 - 04:00'],
            ['days' => 'Sa', 'hours' => '16:00 - 04:00'],
            ['days' => 'Su', 'hours' => '12:00 - 00:00']
        ]
    ],

    /**
     * 6. Карта
     */
    'map' => [
        'h2' => 'Map for travel'
    ],

    /**
     * 7. Футер
     */
    'copyright' => 'All rights reserved',

    /**
     * 8. Форма для заказа стола
     */
    'form' => [
        'title'    => 'Reserve a table',
        'name'     => 'Your name',
        'date'     => 'Date',
        'time'     => 'Time',
        'guest'    => 'Number of guests',
        'more'     => 'Something else?',
        'phone'    => 'Phone',
        'email'    => 'Email',

        'rules'    => 'I agree to processing of my personal data',
        'required' => 'Fields are required',
        'submit'   => 'Reserve a table',

        'success'  => [
            'title' => 'Order is accepted',
            'text'  => 'Thanks for your order! Our manager will contact you soon'
        ],
    ]
];
