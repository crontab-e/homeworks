<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.10.2016
 * Time: 19:05
 */
session_start();


$s_cookie = session_id();

setcookie(cookie_session_id, $s_cookie, time() + 5);
    if isset($_COOKIE[cookie_session_id]) ? echo "кукак еще есть" : echo "кукак удалилась"
