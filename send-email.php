<?php
if (isset($_POST['submit'])) {
    // Mengambil data dari formulir kontak
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Menyiapkan pesan email
    $to = 'sharif.ridho@gmail.com'; // Email tujuan
    $subject = 'Pesan dari formulir kontak';
    $message = "Nama: $name\nEmail: $email\nSubjek: $subject\nPesan: $message";

    // Mengirim email
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);

    // Mengarahkan pengguna ke halaman terima kasih
    header('Location: index.html');
    exit();
}
