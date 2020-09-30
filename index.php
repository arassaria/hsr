<?php
session_start();
require "core/bootstrap.php";

if (!empty($_COOKIE['loginkey'])) {
    $user = App::get('database')->findloginkey($_COOKIE['loginkey']);
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['securitykey'] = $user['securitykey'];
    $_SESSION['id'] = $user['id'];
};
Router::load("routes.php")
    ->direct(Request::uri(), Request::method());