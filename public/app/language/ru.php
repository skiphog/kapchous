<?php

return [

    /**
     * Язык
     * Используется в определении языка страницы + определение гугл карты
     */
    'lang' => 'ru',

    /**
     * Язык переключения
     */
    'prev' => 'en',

    /**
     * Описание сайта (METATEG)
     */
    'description' => 'Самый крутой бар на свете - Капчо!',

    /**
     * Название сайта (TITLE)
     */
    'title' => 'КАПЧО? БАР',

    /**
     * Меню для сайта
     */
    'menu' => [
        'cho-v-kapcho'    => 'Чо в Капчо?',
        'kapcho-gallery'  => 'Галерея',
        'kapcho-eat'      => 'Меню',
        'kapcho-contacts' => 'Контакты'
    ],

    /**
     * Заказ стола (Элемент в меню. Вызывает модальное окно с формой)
     */
    'contact_dialog' => 'Заказать стол',

    /**
     * Картинка логотип
     */
    'kapcho-logo' => [
        'path' => '/img/original.png',
        'alt'  => 'Логотип Капчо'
    ],

    /**
     * Заголовок h1
     * Он не виден на странице, но нужен для поисковиков
     */
    'h1' => 'Капчо бар',

    /**
     * 1. Че в капчо
     */
    'cho-v-kapcho' => [
        'h2'      => 'Чо в Капчо?',
        'content' => 'Самое главное в нашем баре - коптильня. В ней готовим брискет, рёбрышки BBQ, тар-тар, севиче и даже десерты. За кухню отвечает Василий Червенко. За баром - совладельцы Никита Игнатьев и Константин Туйков. В карте доброе вино, гастрономичный крафт, нескучный крепыш и домашние настойки. В репертуаре дегустации, BBQ вечеринки и всегда под хорошую музыку.'
    ],

    /**
     * 2. Галерея
     */
    'kapcho-gallery' => [
        'h2'      => 'Вкусная копченая еда',
        'gallery' => [
            ['path' => '/img/bar/1.jpg', 'alt' => 'Вкусная еда'],
            ['path' => '/img/bar/2.jpg', 'alt' => 'Вкусная еда'],
            ['path' => '/img/bar/3.jpg', 'alt' => 'Вкусная еда'],
            ['path' => '/img/bar/4.jpg', 'alt' => 'Вкусная еда'],
            ['path' => '/img/bar/5.jpg', 'alt' => 'Вкусная еда'],
            ['path' => '/img/bar/6.jpg', 'alt' => 'Вкусная еда'],
            ['path' => '/img/bar/7.jpg', 'alt' => 'Вкусная еда'],
            ['path' => '/img/bar/8.jpg', 'alt' => 'Вкусная еда'],
            ['path' => '/img/bar/9.jpg', 'alt' => 'Вкусная еда'],
        ]
    ],

    /**
     * 3. Скачать меню
     */
    'kapcho-eat' => [
        'h2' => 'Еда и напитки',
        'eat-content' => [
            ['title' => 'Еда', 'link' => '/api/eda.pdf', 'text' => 'Скачать PDF'],
            ['title' => 'Бар', 'link' => '/api/bar.pdf', 'text' => 'Скачать PDF']
        ],
        'notice' => 'Информация в меню не является публичной офертой.'
    ],

    /**
     * 4. Контакты
     */
    'kapcho-contacts' => [
        'h2'      => 'Адрес и телефон',
        'address' => 'Екатеринбург, ул. Розы Люксембург, 8/10',
        'mail'    => 'Напишите нам',
        'phone'   => 'Телефон',
        'what'    => 'Пишите нам'
    ],

    /**
     * 5. Время работы
     */
    'works-time' => [
        'h2'   => 'Время работы',
        'time' => [
            ['days' => 'Пн - Чт', 'hours' => '12:00 - 00:00'],
            ['days' => 'Пт', 'hours' => '12:00 - 04:00'],
            ['days' => 'Сб', 'hours' => '16:00 - 04:00'],
            ['days' => 'Вс', 'hours' => '12:00 - 00:00']
        ]
    ],

    /**
     * 6. Карта
     */
    'map' => [
        'h2' => 'Карта для проезда',
        'img' => ''
    ],

    /**
     * 7. Футер
     */
    'copyright' => 'Все права защищены',

    /**
     * 8. Форма для заказа стола
     */
    'form' => [
        'title'    => 'Заказ столика',
        'name'     => 'Ваше имя',
        'date'     => 'Дата',
        'time'     => 'Время',
        'guest'    => 'Число гостей',
        'more'     => 'Что-то ещё?',
        'phone'    => 'Телефон',
        'email'    => 'Email адрес',

        'rules'    => 'С правилами обработки персональных данных согласен',
        'required' => 'поля обязательные для заполнения',
        'submit'   => 'Заказать столик',

        'success'  => [
            'title' => 'Заказ принят',
            'text'  => 'Спасибо за заказ! Наш менеджер свяжется с Вами в ближайшее время'
        ],
    ]
];