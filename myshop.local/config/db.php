<?php


/**
 *
 * Инициализация подключения к базе данных
 *
 */
global $db;
    $dblocation = "localhost";
    $dbname = "myshop";
    $dbuser = "root";
    $dbpassword = "";

    // Устанавливаем соединение с БД
    $db = mysqli_connect($dblocation, $dbuser, $dbpassword, $dbname);

    if(!$db){
        echo "Ошибка доступа к БД";
        exit();
    }


    // Устанавливаем кодировку по умолчанию для текущего соединения
    mysqli_set_charset($db, 'utf8');
