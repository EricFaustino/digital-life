<?php

$host = 'sql308.epizy.com';
$user = 'epiz_30533349';
$db = 'epiz_30533349_digital_life';
$pass = 'zvJpyyqZApF2';

    try {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'ERROR: '.$e->getMessage();
    }
