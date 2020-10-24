<?php

    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];
    $yer = $_POST['yer'];

    include("baglanti.php");
    $con = new mysqli($baglantiAdres , $baglantiKadi , $baglantiSifre , $baglantiTablo , $baglantiPort);
    $con->query("insert into todolist (id , baslik , aciklama , durum , favori) values('".uniqid()."' , '".$baslik."' , '".$aciklama."' , '".$yer."' , 0)");

?>