<?php
    session_start();
    include "db.php";
    
    $sql = mysqli_query($connect, "SELECT * FROM buku");
    while($a=mysqli_fetch_array($sql))

    $nobuku = $_POST['nobuku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];


    $query = mysqli_query($connect, "UPDATE `buku` SET `judul_buku` = '$judul_buku', `pengarang` = '$pengarang', `penerbit` = '$penerbit', `tahun_terbit` = '$tahun_terbit'WHERE `buku`.`nobuku` = '$nobuku' ");
 
    if($query){
        echo say("Data Berhasil diubah");
        echo "<script> document.location.href = 'index.php?act=buku'</script>";
    }
?>