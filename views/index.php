<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/materialize.css">

    <link rel="stylesheet" href="assets/css/main.css">

    <title>دانلود سنتر</title>
</head>
<body>

    <nav class="nav-wrapper">
        <div class="container">
            <a href="#" class="brand-logo right">Logo</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-links">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">فیلم و سریال</a></li>
              <li><a href="#">موسیقی</a></li>
              <li><a href="#">عکس‌</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn modal-trigger" href="#login">ورود</a></li>
                <li><a class="waves-effect waves-light btn modal-trigger" href="#signup">ثبت‌نام</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-links">
        <li><a class="waves-effect waves-light btn modal-trigger" href="#login">ورود</a></li>
        <li><a class="waves-effect waves-light btn modal-trigger" href="#signup">ثبت‌نام</a></li>
        <li><a href="#">فیلم و سریال</a></li>
        <li><a href="#">موسیقی</a></li>
        <li><a href="#">عکس‌</a></li>
    </ul>
    <!--login modal-->
    <div id="login" class="sudo modal">
        <h5 id='close' class="modal-close right">&#10005;</h5>
        <div class="modal-content center">
          <br>

          <form action="./panel/user.html" method="POST">

            <div class="input-field">
              <i class="material-icons prefix suffix col s6">person</i>
              <input type="text" id="name" required name="name">
              <label for="name" id="name">نام کاربری</label>
            </div>
            <br>

            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <input type="password" id="pass" required name="pass">
              <label for="pass" id="pass">رمز</label>
            </div>
            <br>

            <div class="right" style="margin-left:20px;">
              <input type="checkbox" id="check" />
              <label for="check">به خاطر داشته باش</label>
            </div>
            <br>

            <input type="submit" name="login" value="ورود" class="btn btn-large">

          </form>
    </div>
    </div>
    <!--signup modal-->
 <div id="signup" class="modal">
        <h5 id='close' class="modal-close right">&#10005;</h5>
        <div class="modal-content center">
          <br>

          <form action="./panel/user.html" method="POST">

            <div class="input-field">
              <i class="material-icons prefix">person</i>
              <input type="text" id="name"  required name="name">
              <label for="name" id="name">نام کاربری</label>
            </div>
            <br>

            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" id="email"  required name="email">
                <label for="email" id="email">پست الکترونیکی</label>
              </div>
              <br>

            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <input type="password" id="pass" required name="pass">
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
    </div>
     <a href="panel/user.html">user</a>

    <!--carousel-->
    <div id='carousel' class="carousel carousel-slider center">
      <div class="carousel-item red white-text" href="#one!">
        <h2>First Panel</h2>
        <p class="white-text">This is your first panel</p>
      </div>
      <div class="carousel-item amber white-text" href="#two!">
        <h2>Second Panel</h2>
        <p class="white-text">This is your second panel</p>
      </div>
      <div class="carousel-item green white-text" href="#three!">
        <h2>Third Panel</h2>
        <p class="white-text">This is your third panel</p>
      </div>
      <div class="carousel-item blue white-text" href="#four!">
        <h2>Fourth Panel</h2>
        <p class="white-text">This is your fourth panel</p>
      </div>
    </div>

    <!-- <h4 id="best">بهترین عکس‌های ماه</h2> -->
    <div id="carousel2" class="carousel">
      <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
      <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
      <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
      <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
      <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
    </div>

    <script src="assets/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $('document').ready(function(){
            $('.sidenav').sidenav();
            $('.modal').modal();
            $('.carousel').carousel();
        })
        $('.carousel.carousel-slider').carousel({
          fullWidth: true,
          indicators: true
        });
    </script>
</body>
</html>
