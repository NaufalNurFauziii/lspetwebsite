<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $instansi = htmlspecialchars($_POST['instansi']);
    $message = htmlspecialchars($_POST['message']);

    $to = "sekretariat@perdanavokasinusantara.co.id"; 
    $subject = "Pesan Baru dari Website LSP ET";
    
    $body = "
Nama: $name
Email: $email
Telepon: $phone
Instansi: $instansi

Pesan:
$message
";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.html?status=success");
        exit();
    } else {
        header("Location: contact.html?status=failed");
        exit();
    }

}
?>
