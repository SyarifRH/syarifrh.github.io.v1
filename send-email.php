<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = "sharif.ridho@gmail.com"; //isi alamat email penerima disini
        $subject = "Dari: $name <$email>";
        $body = "Nama: $name\nEmail: $email\nPesan:\n$message\n\nSalam,\n$name";
        $sender = "Dari: $email";

        if (mail($receiver, $subject, $body, $sender)) {
            echo "Pesan Anda telah terkirim.";
            echo "<meta http-equiv='refresh' content='5; url=index.php' />";
        } else {
            echo "Maaf, gagal mengirimkan pesan Anda!";
        }
    } else {
        echo "Masukkan alamat email yang valid!";
    }
} else {
    echo "Alamat email dan pesan diperlukan!";
}
