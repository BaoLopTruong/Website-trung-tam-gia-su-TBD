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
<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <form action="../Controler/loginController.php" method="GET">

    <div class="form-group">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="form-group" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span> <a href="../View/dangki.php">Dang Ki</a></span>
    <span class="psw">Forgot <a href="#">password?</a></span>    
  </div>

    </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>



</body>
</html>