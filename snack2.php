<?php 

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    // 'strpos()' controlla se è presente l'indice dell'elemento cercato all'interno della stringa  
    if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
        echo 'Accesso riuscito';
    } 
    else
    {
        echo 'Accesso negato';
    }
    
?>