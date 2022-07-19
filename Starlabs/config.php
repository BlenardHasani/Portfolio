<?php

    $host='localhost';
    $user='root';
    $pass='';
    $dbname='janartest';
    try {
        $conn=new PDO("mysql:host=$host; dbname=$dbname",$user,$pass);



    } catch (Exception $e) {
        echo "Something went Wrong";
    }










?>