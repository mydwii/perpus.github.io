
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a43f61d4b2.js" crossorigin="anonymous"></script>
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <style>
    *{
    
    font-family: Signika Negative;
    }
    form{
        margin: auto;
    }
    .btn{
      margin: 15px;
    }
   </style>
</head>
<body>
    <div>
        <br>
        <h1><p class="text-center link-light">Administrasi <i class="fa-solid fa-user-pen"></i></p></h1>
        <table>
        <div class="row"><div class="d-flex justify-content-center">
    <div class="col-sm-3 col-md-2 col-lg-3">
        <form action="simpan-siswa.php" method="post">
        <h3><div class="d-flex justify-content-center link-light">Tambah Siswa</div></h3>
        <div class="form-floating mb-1" >
        <input type="number" class="form-control" name="NIS" placeholder="NIS">
  <label for="floatingInput">NIS</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="nama" placeholder="Nama Siswa">
  <label for="floatingInput">Nama Siswa</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="kelas" placeholder="K">
  <label for="floatingInput">Kelas</label>
</div>
<div class="form-floating mb-1">
<select class="form-select" name="jk" aria-label="Default select example">
  <option selected>Jenis Kelamin</option>
  <option value="Laki-laki">Laki-laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
<label for="floatingInput">Jenis Kelamin</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="alamat" placeholder="alamat">
  <label for="floatingInput">Alamat</label>
</div>
<br>
<div class="d-flex justify-content-center"> 
<button type="reset" class="btn btn-primary" value="submit"><i class="fa-solid fa-eraser"></i> Reset</button>
<button type="submit" class="btn btn-primary" value="tambah"><i class="fa-solid fa-plus"></i> Tambah</button>
</div>
</form>
</div>
</div>
</div>
<br>
<br>
<br>
        </table>
    </div>
    <div class="tabel">
    <table class="table table-striped table-hover link-light" id="table">
    <div class="row"><div class="d-flex justify-content-center">
    <div class="col-sm-3 col-md-2 col-lg-3">
  <thead>
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
        <?php
          $sql = mysqli_query($connect, "SELECT * FROM siswa");
          while($a=mysqli_fetch_array($sql)){
        ?>
        <div class="row">
          <div class="col-sm-3 col-md-2 col-lg-3">
          <div class="col-sm-3 col-md-2 col-lg-3">
            <tbody>
              <td class="text-white"><?=$a['NIS'];?></td>
              <td class="text-white"><?=$a['nama'];?></td>
              <td class="text-white"><?=$a['kelas'];?></td>
              <td class="text-white"><?=$a['jk'];?></td>
              <td class="text-white"><?=$a['alamat'];?></td>
              <td><a href="?editsiswa=<?=$a['NIS'];?>"><button type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</button></a></td>
              <?php
                }
              ?>
            </tbody>
          </div>
          <div class="col-1"></div>
        </div>
        </div>
        </div>
        </div>
              </div>
        

</table>
</body>
</html>