<?php
    session_start();
    include "db.php";
    
    $sql = mysqli_query($connect, "SELECT * FROM buku");
    while($a=mysqli_fetch_array($sql))

    $NIS = $_POST['NIS'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];


    $query = mysqli_query($connect, "UPDATE `siswa` SET `nama` = '$nama', `kelas` = '$kelas', `alamat` = '$alamat' WHERE `siswa`.`NIS` = '$NIS' ");

    if($query){
        echo say("Data Berhasil diubah");
        echo "<script> document.location.href = 'index.php?act=siswa'</script>";
    }
?>