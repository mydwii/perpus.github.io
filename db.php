<?php
    $connect = mysqli_connect('localhost', 'root', '');
    $select = mysqli_select_db($connect, "projek_perpustakaan");

   function say($pesan, $lokasi=NULL){
        $a ="
            <script>
            window.alert('$pesan'),
            window.locatime='$lokasi';
            </script>
        ";
            return$a;

    }

?>