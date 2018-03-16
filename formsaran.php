<?php


if (isset($_POST['submit'])) {
    $saran = $_POST['saran'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $univ = $_POST['univ'];
    $jurusan = $_POST['jurusan'];

    $mailTo = "wikal.wp@email.unikom.ac.id";
    $headers = "From: ".$email;
    $txt ="ada pesan dan kesan baru dari ".$nama.".\n\n".$saran;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}



?>
