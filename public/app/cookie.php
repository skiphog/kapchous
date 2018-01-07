<?php

if (isset($_GET['lang'])) {
    setcookie('lang', $_GET['lang'], 0x7FFFFFFF, '/');
}

header('Location: /');
