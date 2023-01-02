<?php
    session_start();
    include("db.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $qcek = mysqli_query($connect, "select * from user where username='$username' && password='$password' && status='ON'");
    if(mysqli_num_rows($qcek) == 1){
        $query = mysqli_query($connect, "select * from user where username ='$username' and password= '$password' && status='ON'");
        $q = mysqli_fetch_array($query);
        $nama = $q['nama'];

        if($nama){
            $_SESSION['nama'] = $nama;
            echo say("Selamat Datang ganteng, semangat jaga perpustakaannya");
            echo "<script> document.location.href = 'index.php'</script>";
        }else{
            echo "<script> 
            ('username atau password salah!');
            </script>";
            echo "<script>
            document.location.href = 'login.php';
            </script>";
    }
    }
?>