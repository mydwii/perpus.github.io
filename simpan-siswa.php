<?php
    session_start();
    include "db.php";
    
        $NIS = $_POST['NIS'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

    
        $query = mysqli_query($connect, "INSERT INTO `siswa` (`NIS`, `nama`, `kelas`, `jk`, `alamat`) VALUES ('$NIS', '$nama', '$kelas', '$jk', '$alamat')");
        
        if($query){
            echo say("Data Berhasil ditambahkan");
            echo "<script> document.location.href = 'index.php?act=siswa'</script>";
        }    
     else {    
        echo "N0";
    }

?>