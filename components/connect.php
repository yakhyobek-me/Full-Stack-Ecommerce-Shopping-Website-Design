<?php

$db_name = 'mysql:host=localhost;dbname=ecommerce_db';
$user_name = 'root';
$user_password = 'secret';

$conn = new PDO($db_name, $user_name, $user_password);

?>