<?php

    $silinecekid = $_POST['id'];
    include("baglanti.php");
    $con = new mysqli($baglantiAdres , $baglantiKadi , $baglantiSifre , $baglantiTablo , $baglantiPort);
    $con->query("delete from todolist where id='".$silinecekid."'");

?>