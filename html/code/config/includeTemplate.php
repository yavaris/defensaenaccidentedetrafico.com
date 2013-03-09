<?php

    function ShowArray($ArrayToDisplay){echo "<pre>";print_r($ArrayToDisplay);echo "</pre>";}

    // Includind template based in Page URL
    switch ($_SERVER['SCRIPT_NAME']) {
        case '/contactar.html':
            include_once("code/templates/contact.html");
            break;

        default:
            include_once("code/templates/home.html");
            break;
    }
?>