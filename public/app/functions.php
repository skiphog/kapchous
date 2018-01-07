<?php

/**
 * Строка для обработки
 *
 * @param $string
 *
 * @return string
 */
function html($string)
{
    return htmlspecialchars($string, ENT_QUOTES);
}
