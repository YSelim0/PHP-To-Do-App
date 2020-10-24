function degistir(x)
{
    renkSifirla();
    x.style.backgroundColor = "rgb(60, 145, 60)";
    tiklanan = x;

    document.getElementById("ekle").style.visibility = "visible";
    document.getElementById("sirala").style.visibility = "visible";
    
    listeyiGuncelle();
}

function hover(buton)
{
    buton.style.backgroundColor = "rgb(60, 145, 60)";
}

var tiklanan = document.getElementById("s");

function renkSifirla()
{
    var list = document.getElementsByClassName("btn");
    for(item of list)
    {
        if(item!=tiklanan) item.style.backgroundColor = "rgb(15, 124, 15)";
    }
}

function tasi(x)
{
    console.log(x.name);
    $.post('php/tasi.php', {tasinacakYer:x.name , tasinacakIcerik:x.id}, function (gelen_cevap) {
        alert("Taşıma İşlemi Başarılı!");
        listeyiGuncelle();
    });
}

function listeyiGuncelle()
{
    $.post('php/sirala.php', {tur:tiklanan.name}, function (gelen_cevap) {
        $('#sirala').html(gelen_cevap);
    });
}

function sil(x)
{
    $.post('php/sil.php', {id:x.name}, function (gelen_cevap) {
        alert("Silme İşlemi Başarılı!");
        listeyiGuncelle();
    });
}

function ekle()
{
    var baslik = document.getElementById("baslik");
    var icerik = document.getElementById("aciklama");

    if(baslik.value != "" && icerik.value != "")
    {
        $.post('php/ekle.php', {baslik:baslik.value , aciklama:icerik.value , yer:tiklanan.name}, function (gelen_cevap) {});
    
        baslik.value = "";
        icerik.value = "";
    
        alert("Ekleme İşlemi Başarılı");
        listeyiGuncelle();
    }
    else
    {
        alert("Boş Alan Bırakmayın!");
    }
}