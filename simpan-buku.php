<?php
    session_start();
    include "db.php";
    
    $nobuku = $_POST['nobuku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = mysqli_query($connect, "INSERT INTO `buku` (`nobuku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES ('$nobuku', '$judul_buku', '$pengarang', '$penerbit', '$tahun_terbit')");
    if($query){
        echo say("Data Berhasil ditambahkan", "index.php?act=buku");
        echo "<script> document.location.href = 'index.php?act=buku'</script>";
    }
?>