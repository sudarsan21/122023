<?php
session_start();
session_unset();
setcookie('persistentlogin', '', 1);
header('Location: login.php');
exit;
