<?php
if($_SERVER ["REQUEST_METHOD"]=="POST"){
    $nombre = htmlspecialchars($_POST[nombre]);
    $email = htmlspecialchars($_POST[email]);
    $nombre = htmlspecialchars($_POST[mensaje]);

    echo "¡Gracias $nombre, por tu mensaje";
    
}
?>
