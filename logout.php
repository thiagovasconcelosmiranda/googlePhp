<?php
require 'config.php';
session_start();

if (!empty($_SESSION['token'])) {
    $_SESSION['token'] = '';

    header('Location: ' . $base);
    exit;
}