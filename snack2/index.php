<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    if(strpos($mail , ".") !== false && strpos($mail , "@") !== false){
        $access_mail = true;
    } else {
        $access_mail = false;
    }

    if(is_numeric($age)) {
        $access_age = true;
    } else {
        $access_age = false;
    }

    if(strlen($name) > 3) {
        $access_name = true;
    } else {
        $access_name = false;
    }

    if($access_mail && $access_age && $access_name) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
?>
