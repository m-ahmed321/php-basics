<?php

function guestMiddleware()
{
    if (isset($_SESSION['email'])) {
        header("Location: /dynamic_webpages/");
        exit;
    }
}

function authMiddleware()
{
    if (!isset($_SESSION['email'])) {
        header("Location: 403.php");
        exit;
    }
}