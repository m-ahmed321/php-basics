<?php

$_SESSION = [];
session_destroy();

$params = session_get_cookie_params();
setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain']);

session_regenerate_id(true);

header('location: /dynamic_webpages/');
exit();


