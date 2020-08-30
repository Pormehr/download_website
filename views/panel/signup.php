<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/materialize.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/panel.css">
    <title>دانلود سنتر</title>
</head>
<body>

<!--Sign Up form-->

    <div id="signup">
        <h5 id='close' class="modal-close right">&#10005;</h5>
        <div class="modal-content center">
          <br>

          <form action="./user.html" method="POST">

            <div class="input-field">
              <i class="material-icons prefix">person</i>
              <input type="text" id="name" name="name">
              <label for="name" id="name">نام کاربری</label>
            </div>
            <br>

            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" id="email" name="email">
                <label for="email" id="email">پست الکترونیکی</label>
              </div>
              <br>

            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <input type="password" id="pass" name="pass">
              <label for="pass" id="pass">رمز</label>
            </div>
            <br>

            <div class="right" style="margin-left:20px;">
              <input type="checkbox" id="check" />
              <label for="check">به خاطر داشته باش</label>
            </div>
            <br>

            <input type="submit" name="register" value="ثبت‌نام" class="btn btn-large">

          </form>
    </div>

<script src="../assets/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assets/js/materialize.js"></script>
    <script src="../assets/js/app.js"></script>
    <script>
        $('document').ready(function(){
            $('.sidenav').sidenav();
            $('.modal').modal();
        })
    </script>
</body>
</html>