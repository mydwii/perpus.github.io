<head>
  <style>
    .btn{
      margin:15px;
    }

  </style>
</head>
<div>
        <br>
        <a href="index.php?act=siswa"><button type="submit" class="btn btn-primary" style="margin-left:500px;" class="back"><i class="fa-sharp fa-solid fa-arrow-left"></i></button></a>
        <table>
        <div class="row"><div class="d-flex justify-content-center">
    <div class="col-sm-3 col-md-2 col-lg-3">
        <form action="simpan-edit-siswa.php" method="post">
        <h3><div class="d-flex justify-content-center link-light">Edit Siswa</div></h3>
        <?php
            $NIS = $_GET['editsiswa'];
            $sql  = mysqli_query($connect, "select * from siswa where NIS='$NIS'");
            $a = mysqli_fetch_array($sql);
        ?>
        <div class="form-floating mb-1" >
        <input type="hidden" class="form-control" name="NIS" placeholder="NIS" value="<?= $a['NIS']?>">
  <label for="floatingInput">NIS</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" value="<?= $a['nama']?>">
  <label for="floatingInput">Nama Siswa</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="<?= $a['kelas']?>">
  <label for="floatingInput">Kelas</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?= $a['alamat']?>">
  <label for="floatingInput">Alamat</label>
</div>
<br>
<div class="d-flex justify-content-center"> 
<button type="submit" class="btn btn-success" value="selesai"  onclick="return confirm('yakin ingin diubah??')"><i class="fa-solid fa-check"></i> Ubah</button>
</form>
<form action="http://localhost/perpustakaan/deletesiswa.php" method="POST">
  <input type="hidden" value="<?php echo $NIS ?>" name="deletesiswa">
  <button type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('yakin ingin dihapus??')"><i class="fa-solid fa-delete-left"></i> Hapus</button>
</form> 

</div>
</div>
</div>
</div>
<br>