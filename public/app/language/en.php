<?php

return [

    /**
     * Язык
     * Используется в определении языка страницы + определение гугл карты
     */
    'lang' => 'en',

    /**
     * Описание сайта (METATEG)
     */
    'description' => 'The coolest bar in the world is Capcho!',

    /**
     * Название сайта (TITLE)
     */
    'title' => 'CAPCCH? BAR',

    /**
     * Меню для сайта
     */
    'menu' => [
        'cho-v-kapcho'    => 'What Capcho?',
        'kapcho-gallery'  => 'Gallery',
        'kapcho-eat'      => 'Menu',
        'kapcho-contacts' => 'Contacts'
    ],

    /**
     * Заказ стола (Элемент в меню. Вызывает модальное окно с формой)
     */
    'contact_dialog' => 'Order a table',

    /**
     * Картинка логотип
     */
    'kapcho-logo' => [
        'path' => '/img/english.png',
        'alt'  => 'Logo Capcho'
    ],

    /**
     * Заголовок h1
     * Он не виден на странице, но нужен для поисковиков
     */
    'h1' => 'Capcho bar',

    /**
     * 1. Че в капчо
     */
    'cho-v-kapcho' => [
        'h2'      => 'What in Capcho?',
        'content' => 'The most important thing in our bar is a smokehouse. In it we prepare a basketball, ribs BBQ, tar-tar, ceviche and even desserts. Vasily Chervenko is in charge of the kitchen. Behind the bar are co-owners Nikita Ignatiev and Konstantin Tuykov. In the map is a good wine, a gastronomic craft, a boring fast-pound and home-made tinctures. In the repertoire of tasting, BBQ parties and always under good music.'
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
            ['title' => 'Food', 'link' => '/api/bar.pdf', 'text' => 'Download PDF']
        ],
        'notice' => 'Information in the menu is not a public offer.'
    ],

    /**
     * 4. Контакты
     */
    'kapcho-contacts' => [
        'h2'      => 'Address and telephone number',
        'address' => 'Ekaterinburg, Rosa Luxemburg, 8/10',
        'mail'    => 'Contact Us',
        'phone'   => 'Phone',
        'what'    => 'Write to us'
    ],

    /**
     * 5. Время работы
     */
    'works-time' => [
        'h2'   => 'Working hours',
        'time' => [
            ['days' => 'Mon - Thu', 'hours' => '12:00 - 00:00'],
            ['days' => 'Fri', 'hours' => '12:00 - 04:00'],
            ['days' => 'Sat', 'hours' => '16:00 - 04:00'],
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
        'title'    => 'Reservation',
        'name'     => 'Your name',
        'date'     => 'Date',
        'time'     => 'Time',
        'guest'    => 'Number of guests',
        'more'     => 'Something else?',
        'phone'    => 'Phone',
        'email'    => 'Email',

        'rules'    => 'With the rules for processing personal data agree',
        'required' => 'fields are required',
        'submit'   => 'Order a table',

        'success'  => [
            'title' => 'Order is accepted',
            'text'  => 'Thanks for your order! Our manager will contact you soon'
        ],
    ]
];