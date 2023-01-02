<?php
    session_start();
    include "db.php";
    if (isset($_POST["submit"])) {
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $judul_buku = $_POST['judul_buku'];
    
        $query = mysqli_query($connect,("INSERT INTO peminjaman VALUES (NULL, '$nama_siswa', '$kelas', '$judul_buku', NOW(),'')"));
        if($query){
            echo say("Data Berhasil ditambahkan");
            echo "<script> document.location.href = 'index.php?act=peminjaman'</script>";
        }    
    }

    if(isset($_GET['konfirmasi'])){
        $id = $_GET['konfirmasi'];
        $query = mysqli_query($connect, ("UPDATE peminjaman SET tanggal_kembali = NOW() WHERE id_peminjam = $id"));
    if($query)
        echo say("Data telah di konfirmasi, buku telah dikembalikan");
        echo "<script> document.location.href = 'index.php?act=peminjaman'</script>";
     }
     
?>