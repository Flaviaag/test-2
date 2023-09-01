<?php
    require_once "Personne.php";

    $peter = new Personne();

    $peter -> setname("Peter c`est une personne");
    echo $peter -> getName();

?>