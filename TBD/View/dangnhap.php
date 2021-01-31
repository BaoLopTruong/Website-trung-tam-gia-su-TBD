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
          <form action="#" method="post">

            <div class="form-group">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <button type="submit">Login</button>
              <div class="">
                <label style='text-align:left'>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <a style='position: absolute;right: 10%;' href="./dangki.php">Đăng kí</a>
              </div>
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