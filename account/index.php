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
    <style>
        body {
            padding: 7%;
        }
        .dialog {
            padding: 8%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="."><i class="fa fa-bank"></i> High School</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-newspaper"></i> News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-info"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-phone"></i> contact</a>
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
                    <div class="dialog border border-success">
                        <h1 class="display-6 text-success">Create new account</h1>
                        <hr class="border-success border">
                        <br>
                        <form action="index.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="fname" class="form-control text-success border-success inp" placeholder="First Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="lname" class="form-control text-success border-success inp"
                                           placeholder="Last Name">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="phone" class="form-control text-success border-success inp"
                                           placeholder="Phone">
                                </div>
                                <div class="col">
                                    <input type="text" name="email" class="form-control text-success border-success inp" placeholder="E-Mail">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <input type="password" name="pass" class="form-control text-success border-success inp" placeholder="Password">
                                </div>
                                <div class="col">
                                    <input type="password" name="conpass" class="form-control text-success border-success inp"
                                           placeholder="Confirm Password">
                                </div>
                            </div>
                            <br>
                            <button type="submit" id="reg_user" name="reg_user" class="btn btn-success">Create account</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="dialog border border-primary">
                        <h1 class="display-6 text-primary">Login to your account</h1>
                        <hr class="border-primary border">
                        <br>
                        <form action="index.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="email" name="email" class="form-control text-primary border-primary inp" placeholder="E-Mail">
                                </div>
                                <div class="col">
                                    <input type="text" name="password" class="form-control text-primary border-primary inp"
                                           placeholder="Password">
                                </div>
                            </div>
                            <br>
                            <button type="submit" id="log_user" name="log_user" class="btn btn-primary">Login</button>
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