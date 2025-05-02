<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $kontak = htmlspecialchars($_POST['kontak']);
    $ucapan = htmlspecialchars($_POST['ucapan']);

    $data = "Nama: $nama\nKontak: $kontak\nUcapan: $ucapan\n---\n";

    file_put_contents("buku_tamu.txt", $data, FILE_APPEND | LOCK_EX);
    echo "<script>alert('Terima kasih atas konfirmasinya!'); window.location.href='index.html';</script>";
} else {
    header("HTTP/1.1 403 Forbidden");
    exit("Akses ditolak.");
}
?>
