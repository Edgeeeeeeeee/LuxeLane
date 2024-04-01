<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="row g-0" style="height: 100% !important;">
        <div class="sidepanel col-lg-4 px-5 mx-auto">
                <div class="logo mx-auto" style="max-width: fit-content;">
                    <p style="font-size: 61px; font-family: 'Oswald'; margin-bottom: 0px;">
                        <span style="color: #EFB928; font-family: 'Oswald';">Luxe</span>
                        <span style="color: #161103; margin-left: -15px; font-family: 'Oswald';">Lane</span>
                    </p>
                    <p style="margin-top: -22px; margin-left: 3.3px; font-size: 18px; text-align: left;">Elegance Defined</p>
                </div>

                <form method="POST" action="login.php">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <p style="text-align: right !important;"><a href="#">Forgot Password?</a></p>

                    <button type="submit" class="login_btn">Login</button>
                </form>

                <hr>

                <p style="font-family: 'Oswald'; " class="p2">Or login using</p>
                <div>
                    <center>
                        <div class="row justify-content-between" style="max-width: 80%;">
                            <div class="alternatives rounded-circle" style="background-image: url(images/Vector.png);"></div>
                            <div class="alternatives rounded-circle" style="background-image: url(images/Vector-1.png);"></div>
                            <div class="alternatives rounded-circle" style="background-image: url(images/Vector-2.png);"></div>
                            <div class="alternatives rounded-circle" style="background-image: url(images/Vector-3.png);"></div>
                        </div>
                    </center>
                </div>
                <div style="display: flex; flex-direction: column; justify-content: space-between; height: auto;">
                    <p style="position: absolute; bottom: 0px; align-self: center; text-align: center">Don't have an acount yet? <a href="signup.html">Register here!</a></p>
                </div>
        </div>
        <div class="col-lg-8 d-none d-lg-block">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/LoginBG.jpg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/LoginBG.jpg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/LoginBG.jpg" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    mysqli_select_db($link, "luxelane") or die(mysqli_error($link));

    $login = mysqli_prepare($link, "SELECT * FROM account WHERE username=? AND password=?");
    mysqli_stmt_bind_param($login, "ss", $username, $password);

    mysqli_stmt_execute($login);

    $result = mysqli_stmt_get_result($login);

    if (mysqli_num_rows($result) == 1) {
        header("Location: index.html");
        exit;
    } else {
        header("Location: login.php?error=1");
        exit;
    }

    mysqli_stmt_close($login);
    mysqli_close($link);
}
?>


</html>
