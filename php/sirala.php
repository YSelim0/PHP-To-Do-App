<?php

    $tur = $_POST['tur'];

    include("baglanti.php");
    $con = new mysqli($baglantiAdres , $baglantiKadi , $baglantiSifre , $baglantiTablo , $baglantiPort);
    $result = $con->query("Select * from todolist where durum='".$tur."'");
    $array = $result->fetch_all(MYSQLI_ASSOC);

    foreach($array as $item)
    {
        echo "
                <div class='todo flex'>
                    <div class='todoicerik'>
                        <h1>".$item['baslik']."</h1>
                        <p>".$item['aciklama']."</p>
                    </div>
                    <div class='buttons flex ortala'>
                        <h1>Şuraya taşı;</h1>
                        <div class='flex' style='border-bottom: 1px solid black'>
                            <button class='tasiBtn aciklamaBalonu' data-title='Yapılacak' onclick='tasi(this)' name='yapilacak' id='".$item['id']."'><i class='fas fa-pause'></i></button>
                            <button class='tasiBtn aciklamaBalonu' data-title='Yapılıyor' onclick='tasi(this)' name='yapiliyor' id='".$item['id']."'><i class='fas fa-play'></i></button>
                            <button class='tasiBtn aciklamaBalonu' data-title='yapıldı' onclick='tasi(this)' name='yapildi' id='".$item['id']."'><i class='fas fa-check'></i></button>
                        </div>
                        <button class='silBtn' onclick='sil(this)' name='".$item['id']."'><i class='fas fa-trash'></i> Sil</button>
                    </div>
                </div>
            ";
    }

?>