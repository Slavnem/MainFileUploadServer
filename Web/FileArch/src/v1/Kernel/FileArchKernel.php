<?php
// Slavnem @2024-08-03
namespace FileArchWeb\Src\v1\Kernel;

// Dosya Aktarıcı
use FileArchWeb\Public\IndexOperations as PublicIndex;

// Oturum Bilgileri
use SessionApi\v1\Core\Methods as SessionMethods;
use SessionApi\v1\Core\SessionRequest as SessionRequest;

// Sayfa Url kontrolü
$UrlAddr = $_SERVER['REQUEST_URI'];
$UrlAddr = substr($UrlAddr, 1, (strlen($UrlAddr) - 1));

// İşlem yapılmak istenen sayfaya göre
switch(strtolower($UrlAddr))
{
    // giriş yapma sayfası
    case "auth/login":
        PublicIndex::Importer([dirname(__DIR__) . "/Page/Login.php"]);
        exit();
    // oturumu kapat
    case "auth/logout":
        PublicIndex::Importer([dirname(__DIR__) . "/Page/Logout.php"]);
        exit();
    // ana sayfa
    case "files":
        PublicIndex::Importer([dirname(__DIR__) . "/Page/Files.php"]);
        exit();
}

// oturum sorgu nesnesi
$SessionRequest = new SessionRequest();

// oturum bilgilerini alsın
$result_session = $SessionRequest->isSession();

// eğer oturum yoksa giriş sayfasına yönlendirsin
// ve oturum verisi boş değilse eğer, hata mesajları var demektir
// boşsa eğer, oturum zaten var demektir

// oturum yok
if(!is_null($result_session)) {
    header("Location: /auth/login"); // giriş sayfası
    exit();
}

// ana sayfa
header("Location: /files"); // ana sayfa
exit();