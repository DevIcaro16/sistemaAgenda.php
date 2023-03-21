<?php

    try {
        $connect = new PDO('mysql:host=localhost;dbname=agenda','root','') ;
    } catch (PDOException $e) {
        
        $e->getMessage();

    }