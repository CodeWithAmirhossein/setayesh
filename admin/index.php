<?php
session_start();

$status = $_SESSION['status'];

if (!$status) {
    ?>
    <script>
        window.location.replace("../");
    </script>
    <?php
}

$id = $_SESSION['id'];

$server = "localhost";
$username = "setayesh";
$password = "setayesh";
$database = "setayesh";

$connection = mysqli_connect($server, $username, $password, $database);

$get_user_data_query = "SELECT * FROM `admin` WHERE id = '$id'";
$get_ser_data_result = mysqli_query($connection, $get_user_data_query);
$admin = mysqli_fetch_assoc($get_ser_data_result);

if (isset($_POST["newpost"])) {
    $title = $_POST['posttitle'];
    $text = $_POST['posttext'];
    $datetime = date("M d, Y H:i:s");;

    $insert = "INSERT INTO posts (`title`, `txt`, `datetime`) VALUE ('$title', '$text', '$database')";
    if (mysqli_query($connection, $insert)) {
        ?>
        <script>
            window.alert("پست شما ثبت شد");
            window.location.replace('.');
        </script>
        <?php
    }
    else {
        ?>
        <script>
            window.alert("<?php echo mysqli_error($connection); ?>");
            window.location.replace('.');
        </script>
        <?php
    }
}

if (isset($_POST["newnews"])) {
    $title = $_POST['newstitle'];
    $news = $_POST['newstext'];
    $datetime = date("M d, Y H:i:s");;

    $insert = "INSERT INTO news (`title`, `news`, `datetime`) VALUE ('$title', '$news', '$database')";
    if (mysqli_query($connection, $insert)) {
        ?>
        <script>
            window.alert("خبر شما ثبت شد");
            window.location.replace('.');
        </script>
        <?php
    }
    else {
        ?>
        <script>
            window.alert("<?php echo mysqli_error($connection); ?>");
            window.location.replace('.');
        </script>
        <?php
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setayesh - About</title>
    <link href="../pack/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="../pack/main.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
<div>
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
                <div class="navbar-nav">
                    <a class="nav-link active" href="../account/logout.php"><i class="fa fa-sign-out"></i> خروج از حساب</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>خوش آمدید <span><?php echo $admin['name']; ?> !</span></h3>
                <p>شما میتوانید پست یا خبر جدید را در سایت قرار دهید!</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="newpost">
                    <h4>گذاشتن پست جدید</h4>
                    <br>
                    <form action="index.php" method="post">
                        <div class="">
                            <label>موضوع پست</label>
                            <input type="text" name="posttitle" class="postinp" placeholder="موضوع پست">
                            <br>
                            <label>متن پست</label>
                            <textarea type="text" name="posttext" class="postinp" rows="5" placeholder="متن پست"></textarea>
                            <br>
                            <button class="postbtn" type="submit" name="newpost">پست کردن</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newnews">
                    <h4>گذاشتن خبر جدید</h4>
                    <br>
                    <form action="index.php" method="post">
                        <div class="">
                            <label>موضوع خبر</label>
                            <input type="text" name="newstitle" class="newsinp" placeholder="موضوع خبر">
                            <br>
                            <label>متن خبر</label>
                            <textarea type="text" name="newstext" class="newsinp" rows="5" placeholder="متن خبر"></textarea>
                            <br>
                            <button class="newsbtn" type="submit" name="newnews">گذاشتن خبر</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../pack/bootstrap.js"></script>
</body>
</html>