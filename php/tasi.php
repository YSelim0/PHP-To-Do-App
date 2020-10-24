<?php

    $tasinacakyer = $_POST['tasinacakYer'];
    $tasinacakicerik = $_POST['tasinacakIcerik'];
    include("baglanti.php");
    $con = new mysqli($baglantiAdres , $baglantiKadi , $baglantiSifre , $baglantiTablo , $baglantiPort);
    $con->query("update todolist set durum='".$tasinacakyer."' where id='".$tasinacakicerik."'");
    
?>