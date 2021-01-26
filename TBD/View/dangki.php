
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dangnhap.css">
    <title>Document</title>
</head>
<body>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <form action="../Controler/registerControler.php" method="GET">

    <div class="form-group">
    <label for="uname"><b>tai khoan</b></label>
    <input type="text" placeholder="" name="name" required>

    <label for="uname"><b>mat khau</b></label>
    <input type="password" placeholder="" name="pass" required>

    <label for="uname"><b>nhap lai mat khau</b></label>
    <input type="password" placeholder="" name="repass" required>

    <label for="uname"><b>ma loai</b></label>
    <input type="text" placeholder="" name="maloai" required>
        
    <button type="submit" value="submit" name="submit">dang ki</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="form-group" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

    </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>



</body>
</html>