<?php

header('Content-Type: application/json;charset=utf-8');

/**
 * Если это не Ajax запрос то вываливаемся с ошибкой
 */
if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    http_response_code(403);
    die;
}


$validate = [
    'name'   => function ($data) {
        return !empty($data);
    },
    'date'   => function ($data) {
        return !empty($data);
    },
    'time'   => function ($data) {
        return !empty($data);
    },
    'guests' => function ($data) {
        return (int)$data > 0;
    },
    'phone'  => function ($data) {
        return preg_match('#^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$#', $data);
    },
    'rules'  => function ($data) {
        return !empty($data);
    },
    'email'  => function ($data) {
        return filter_var($data, FILTER_VALIDATE_EMAIL);
    }
];

$errors = [];

foreach ($validate as $key => $value) {
    if (!array_key_exists($key, $_POST)) {
        $errors[] = $key;
        continue;
    }

    if (!$validate[$key]($_POST[$key])) {
        $errors[] = $key;
    }
}

/**
 * Если массив с ошибками не пустой, то показываем код ответа 422
 */
if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['error' => $errors], JSON_UNESCAPED_UNICODE);
    die;
}

$message = '<h4>Заявка с сайта ' . $_SERVER['HTTP_HOST'] . '</h4>';

foreach ($_POST as $k => $v) {
    $message .= $k . ': ' . $v . '<br />';
}

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";


/**
 * Если письмо не удалось отправить, то так же показываем ошибку
 */

/*
if (!mail('tequi11az@mail.ru', 'Заявка с сайта ' . $_SERVER['HTTP_HOST'], $message, $headers)) {
    http_response_code(422);
    echo json_encode(['error' => ['email' => 'Ошибка при отправке письма']], JSON_UNESCAPED_UNICODE);
    die;
}
*/

/**
 * Если все хорошо, то показываем ответ об успешном отправке письма
 */
echo json_encode([
    'status'  => 'OK',
    'message' => $message
], JSON_UNESCAPED_UNICODE);
