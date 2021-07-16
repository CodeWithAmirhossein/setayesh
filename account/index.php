<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setayesh - Account</title>
    <link href="../pack/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <link href="../pack/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-light bg-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../"><i class="fa fa-bank"></i> هنرستان آفرینش</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pages/news.php"><i class="fa fa-newspaper"></i> اخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pages/about.php"><i class="fa fa-info"></i> درباره هنرستان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pages/contact.php"><i class="fa fa-phone"></i> ارتباط با هنرستان</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-md-5">
                    <div class="">
                        <h1 class="titleaccount">ساخت حساب جدید</h1>
                        <hr class="lineaccount">
                        <br>
                        <form action="index.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="fname" class="accountinp" placeholder="نام">
                                </div>
                                <div class="col">
                                    <input type="text" name="lname" class="accountinp" placeholder="نام خانوادگی">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="phone" class="accountinp" placeholder="شماره همراه">
                                </div>
                                <div class="col">
                                    <input type="text" name="email" class="accountinp" placeholder="ایمیل">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <input type="password" name="pass" class="accountinp" placeholder="رمز">
                                </div>
                                <div class="col">
                                    <input type="password" name="conpass" class="accountinp" placeholder="تایید رمز">
                                </div>
                            </div>
                            <br>
                            <button type="submit" id="reg_user" name="reg_user" class="accountbtn">ساخت حساب</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="">
                        <h1 class="logintitle">ورود به حساب</h1>
                        <hr class="loginline">
                        <br>
                        <form action="index.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="email" class="logininp" placeholder="ایمیل">
                                </div>
                                <div class="col">
                                    <input type="password" name="pass" class="logininp" placeholder="رمز">
                                </div>
                            </div>
                            <br>
                            <button type="submit" id="log_user" name="log_user" class="loginbtn">ورود</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../pack/bootstrap.js"></script>
</body>
</html>