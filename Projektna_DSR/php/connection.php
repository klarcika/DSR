<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'database';

//phpinfo();

// USTVARJANJE NOVE POVEZAVE NA PODATKOVNO BAZO
$povezava = new PDO('mysql:host='.$db_hostname.';dbname='.$db_database.';charset=utf8mb4', $db_username = 'root', $db_password);

//echo "povezava uspela";
