
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
    form{
        margin: auto;
    }
        .btn{
          margin: 20px;
        }
        
   </style>
</head>
<body>
    <div>
        <h1><p class="text-center link-light">Administrasi  <i class="fa-solid fa-book-bookmark"> </i></p></h1>
        <table>
        <div class="row"><div class="d-flex justify-content-center">
    <div class="col-sm-3 col-md-2 col-lg-3" class="container">
        <form action="simpan-buku.php" method="post">
        <h3><div class="d-flex justify-content-center link-light">Tambah Buku</div></h3>
        <div class="form-floating mb-1" >
        <input type="number" class="form-control" name="nobuku" placeholder="No Buku">
  <label for="floatingInput">No Buku</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku">
  <label for="floatingInput">Judul Buku</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="pengarang" placeholder="Pengarang">
  <label for="floatingInput">Pengarang</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="penerbit" placeholder="Penerbit">
  <label for="floatingInput">Penerbit</label>
</div>
<div class="form-floating mb-1">
  <input type="date" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit">
  <label for="floatingInput">Tahun Terbit</label>
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
    <table class="table table-striped table-hover link-light" id="table" >
    <div class="row"><div class="d-flex justify-content-center">
    <div class="col-sm-3 col-md-2 col-lg-3">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">No Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <?php
      $sql = mysqli_query($connect, "SELECT * FROM buku");
      while($a=mysqli_fetch_array($sql)){
     ?>
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
            <tbody>
              <th scope="row" class="text-white">#</th>
              <td class="text-white"><?=$a['nobuku'];?></td>
              <td class="text-white"><?=$a['judul_buku'];?></td>
              <td class="text-white"><?=$a['pengarang'];?></td>
              <td class="text-white"><?=$a['penerbit'];?></td>
              <td class="text-white"><?=$a['tahun_terbit'];?></td>
              <td class="text-white"><a href="?editbuku=<?=$a['nobuku'];?>"><button type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
</a></td>
              <?php
                }
              ?>
            </tbody>
              </div>
        </div>
        </div>
        </div>
              </div>

</table>
</body>
</html>