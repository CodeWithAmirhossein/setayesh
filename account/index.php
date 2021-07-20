<?php
session_start();

$status = $_SESSION['status'];

include("../pack/config.php");

if ($status) {
    ?>
    <script>
        window.location.replace("../user");
    </script>
    <?php
}

$errors = array();

if (isset($_POST["logging"])) {
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $admin = $_POST["checkbox"];

    if (empty($email)) {
        array_push($errors, "ایمیل را وارد کنید");
    }
    if (empty($password)) {
        array_push($errors, "رمز را وارد کنید");
    }

    if (isset($admin)) {
        if (count($errors) == 0) {
            $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) == 1) {
                $admin = mysqli_fetch_assoc($result);
                $_SESSION['status'] = true;
                $_SESSION['type'] = "admin";
                $_SESSION['id'] = $admin['id'];
                ?>
                <script>
                    window.location.replace("../admin");
                </script>
                <?php
            }
            else {
                array_push($errors, "ایمیل یا رمز اشتباه است");
            }
        }
    }
    else {
        if (count($errors) == 0) {
            $sql = "SELECT * FROM students WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) == 1) {
                $user = mysqli_fetch_assoc($result);
                $_SESSION['status'] = true;
                $_SESSION['type'] = "student";
                $_SESSION['id'] = $user["id"];
                ?>
                <script>
                    window.location.replace("../student");
                </script>
                <?php
            }
            else {
                array_push($errors, "ایمیل یا رمز اشتباه است");
            }
        }
    }
}

if (isset($_POST['registering'])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $mail = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];

    if ($password == $confirm) {
        $name = $firstname . " " . $lastname;
        $id = rand(111111111, 999999999);

        $insert = "INSERT INTO students (`email`, `password`, `id`, `name`) VALUES ('$mail', '$password', '$id', '$name')";
        if (mysqli_query($connection, $insert)) {
            ?>
            <script>
                window.alert("حساب شما ساخته شد");
                window.location.replace('../student');
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
}

?>

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
    <style>
        .errors {
            border: solid 1px red;
            background: tomato;
            border-radius: 5px;
            color: white;
            font-size: 20px;
            padding: 2%;
        }
    </style>
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
                                    <input type="password" name="password" class="accountinp" placeholder="رمز">
                                </div>
                                <div class="col">
                                    <input type="password" name="confirm" class="accountinp" placeholder="تایید رمز">
                                </div>
                            </div>
                            <br>
                            <button type="submit" id="register" name="registering" class="accountbtn">ساخت حساب</button>
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
                                <div>
                                    <br>
                                    <input type="checkbox" name="checkbox" id="check">
                                    <label class="logintitle" for="check">ورود به عنوان مدیر</label>
                                </div>
                            </div>
                            <br>
                            <button type="submit" id="log_user" name="logging" class="loginbtn">ورود</button>
                        </form>
                    </div>
                    <br>
                    <?php
                    if (count($errors) > 0) {
                        ?>
                        <div class="errors">
                            <h4>ارور ها!</h4>
                            <?php
                            foreach ($errors as $error) {
                                echo "<span class='error'>" . $error . "</span>";
                                echo "<br>";
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../pack/bootstrap.js"></script>
</body>
</html>