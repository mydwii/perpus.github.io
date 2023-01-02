<?php
    session_start();
    include "db.php";
    // echo say("Selamat Datang ganteng, semangat jaga perpustakaannya", "index.php");
    if(!isset($_SESSION['nama'])){
        echo "
            <script>
            window.location='login.php';
            </script>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a43f61d4b2.js" crossorigin="anonymous"></script>
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/a43f61d4b2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <style>
    *{
    
    font-family: Signika Negative;
    }
    body{
        background-image: url(latar.jpg);
      
      background-size: cover;
      background-position: center;
    }
        .p-footer{
        margin:0 auto;
    }

    
   </style>
       
</head>
<body>
        <nav class="navbar navbar-expand-lg link-light">
  <div class="container-fluid">
    <a class="navbar-brand  link-light" href="index.php"><i class="fa-solid fa-book-open"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active  link-light" aria-current="page" href="index.php?act=buku"><i class="fa-solid fa-book-bookmark"></i></i> Buku</a>
        <a class="nav-link  link-light" href="index.php?act=peminjaman"><i class="fa-solid fa-book-open-reader"></i> Peminjaman</a>
        <a class="nav-link  link-light" href="index.php?act=siswa"><i class="fa-solid fa-user-pen"></i> Siswa</a>
        <a class="nav-link  link-danger" style="margin-left:1070px;" href="logout.php" onclick="return confirm('yakin ingin keluar?')"><i class="fa-solid fa-right-from-bracket"></i></a>
        
</div>
    </div>
  </div>
</nav>
            </div>
        </div>
    </div>
    
    <div class="halaman">
        <?php
            if(isset($_GET['act'])){
                if($_GET['act'] == "buku")
                    include 'buku.php';
                else
                    if($_GET['act'] == 'peminjaman')
                    include 'peminjaman.php';
                else
                    if($_GET['act'] == 'siswa')
                    include 'siswa.php'; 

            }   else if(isset($_GET['editbuku'])){
                include "editbuku.php";

            }
                else if(isset($_GET['editsiswa'])){
                include "editsiswa.php";

            }
                else include "depan.php";

        ?>
    </div>
</body>
<footer>
<span class="navbar-text max-auto" >
<p class="text-center link-light">Jangan membaca sampai koma,</p><p class="text-center link-light">tapi bacalah sampai titik.</p>
    
</p>  </span>
<script src="bootstrap-5.2.2-dist/js/bootstrap.js"></script>
</footer>
</html>