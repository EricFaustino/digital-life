<?php

$host = 'us-cdbr-east-04.cleardb.com';
$user = 'bc9b379ca099b3';
$db = 'heroku_395e6c8cb2485c9';
$pass = '58f5ec34';

    try {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'ERROR: '.$e->getMessage();
    }
