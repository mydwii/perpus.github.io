<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <title>login besti</title>
    <style>
        html{
    background-image: url(logiin.jpg);
    background-size:cover;
}

        .btn{
          margin: 15px;
        }
    </style>
</head>
<body>
    <div class="content-login" class="container">
    <table class="table-secondary" class="container-fluid" >
          <h1><div class="d-flex justify-content-center link-warning">Login</div></h1>
          <form action="ceklogin.php" method="post">
          <div class="form-floating mb-2" >
          <input type="text" class="form-control" name="username" placeholder="username">
          <label for="floatingInput">username</label>
          </div>
          <div class="form-floating">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <label for="floatingPassword">Password</label>
          </div>
          <br>
          <div class="d-flex justify-content-center"> 
          <button type="reset" class="btn btn-warning" value="submit">Reset</button>
          <button type="submit" class="btn btn-warning" value="masuk">Masuk</button>
  </div>
        </form>
        </table>
    </div>
</body>
</html>