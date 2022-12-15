<?php

$host = 'us-cdbr-east-06.cleardb.net';
$user = 'bac6375f000851';
$db = 'heroku_9256186d51e4ed1';
$pass = 'e0245a59';

    try {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'ERROR: '.$e->getMessage();
    }
