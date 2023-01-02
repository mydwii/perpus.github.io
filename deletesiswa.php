<?php
    session_start();
    include "db.php";
    
    if (isset($_POST['deletesiswa'])) {
        $NIS = $_POST['deletesiswa'];
        $sql = "DELETE FROM siswa where NIS=$NIS";
        var_dump($sql);
        $query = mysqli_query($connect,$sql);
    if($query){
        echo say(" Data Berhasil dihapus");
        echo "<script> document.location.href = 'index.php?act=siswa'</script>";
    } else
        die(mysqli_error($connect));
    
}
?>