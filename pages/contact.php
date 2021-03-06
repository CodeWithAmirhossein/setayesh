<?php
session_start();

$status = $_SESSION['status'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setayesh - Contact</title>
    <link href="../pack/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../pack/main.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="."><i class="fa fa-bank"></i> هنرستان آفرینش</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="news.php"><i class="fa fa-newspaper"></i> اخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php"><i class="fa fa-info"></i> درباره هنرستان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php"><i class="fa fa-phone"></i> ارتباط با هنرستان</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <?php
                    if ($status) {
                        if ($_SESSION['person'] == "admin") {
                            ?>
                            <a class="nav-link active" href="../admin"><i class="fa fa-dashboard"></i> ورود به پنل</a>
                            <a class="nav-link active" href="../account/logout.php"><i class="fa fa-sign-out"></i> خروج از حساب</a>
                            <?php
                        }
                        else {
                            ?>
                            <a class="nav-link active" href="../student"><i class="fa fa-dashboard"></i> ورود به پنل</a>
                            <a class="nav-link active" href="../account/logout.php"><i class="fa fa-sign-out"></i> خروج از حساب</a>
                            <?php
                        }
                    }
                    else {
                        ?>
                        <a class="nav-link active" href="../account"><i class="fa fa-sign-in"></i> ورود یا ساخت حساب</a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>ارتباط با ما</h3>
                <p>ارتباط با هنرستان آفرینش!</p>
            </div>
        </div>
    </div>
</div>
<script src="../pack/bootstrap.js"></script>
</body>
</html>