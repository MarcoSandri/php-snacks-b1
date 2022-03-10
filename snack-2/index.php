<?php

    $name = $_GET['name'];
    $age = $_GET['age'];
    $mail = $_GET['mail'];

    if(strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
        echo "<h1> Accesso consentito </h1>";
    } else echo "<h1> Accesso negato ";