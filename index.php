<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setayesh - Index</title>
    <link href="pack/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="pack/main.css" rel="stylesheet" type="text/css">
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
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-newspaper"></i> اخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-info"></i> درباره هنرستان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-phone"></i> ارتباط با هنرستان</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <?php
                    if ($status == true) {
                        ?>
                        <a class="nav-link active" href="user"><i class="fa fa-dashboard"></i> Go To Panel</a> <a class="nav-link active" href="account/logout.php"><i class="fa fa-sign-out"></i> خروج از حساب</a>
                        <?php
                    }
                    else {
                        ?>
                        <a class="nav-link active" href="account"><i class="fa fa-sign-in"></i> ورود یا ساخت حساب</a>
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
            <div class="col-md-3">
                <div class="text-center">
                    <div class="part">
                        <div class="phead">
                            جستجو
                        </div>
                        <div class="pbody">
                            <form action="index.php">
                                <div class="">
                                    <input type="text" class="inp" placeholder="جستجو">
                                    <br>
                                    <button class="bttn" type="button">جستجو کن</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="part">
                        <div class="phead">
                            سایت های مرتبط
                        </div>
                        <div class="pbody">
                            <form action="index.php">
                                <div class="">
                                    <ul  class="mul">
                                        <li>سایت 1</li>
                                        <li>سایت 2</li>
                                        <li>سایت 3</li>
                                        <li>سایت 4</li>
                                        <li>سایت 5</li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <div class="post">
                        <div class="posthead">
                            تعطیلات
                        </div>
                        <div class="postbody">
                            <h3>سلام!!!!!!!</h3>
                            <h4>بازم تابستون! هورا!</h4>
                        </div>
                        <div class="postfooter">
                            پست شده در ( تاریخ ) ( ساعت )
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="part">
                        <div class="phead">
                            هنرستان ما
                        </div>
                        <div class="pbody">
                            <form action="index.php">
                                <div class="">
                                    توضیحات درباره هنرستان آفرینش
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="part">
                        <div class="phead">
                            فعالیت های ما
                        </div>
                        <div class="pbody">
                            <form action="index.php">
                                <div class="">
                                    فعالیت های هنرستان
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="pack/bootstrap.js"></script>
</body>
</html>