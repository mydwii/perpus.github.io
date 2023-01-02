<?php
    session_start();
    include "db.php";
    if (isset($_POST['deletebuku'])) {
        $nobuku = $_POST['deletebuku'];
        $sql = "DELETE FROM buku where nobuku=$nobuku";
    
        var_dump($sql);
        

        $query = mysqli_query($connect,$sql);
        if($query){
            echo say("Data Berhasil dihapus");
            echo "<script> document.location.href = 'index.php?act=buku'</script>";
        } else{
            
        }
            die(mysqli_error($connect));
        
    }
?>