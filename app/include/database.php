<?php

    $link = mysqli_connect('localhost', 'root', '', 'blogtemporary');

    if (mysqli_connect_error()) {
        echo 'Ошибка загрузки базы данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
        exit();
    }        


   
    