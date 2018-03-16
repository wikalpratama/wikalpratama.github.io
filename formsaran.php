<?php
    
$saran = $_POST['nama'];
$nama = $_POST['nama'];
$kesan = $_POST['kesan'];
$univ = $_POST['univ'];
$jurusan = $_POST['jurusan'];

$to = "wikal.wp@email.unikom.ac.id";
$subject "Mendapatkan kesan dan pesan";
$body = "jangan balas pesan ini \n\n $request";

mail ($to,$subject,$body);

echo "<a href='index.html'>klik</a> untuk kembali ke home"

?>