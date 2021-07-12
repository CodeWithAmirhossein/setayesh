<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setayesh - Index</title>
    <link href="pack/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
    <style>
        body {
            padding: 7%;
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
                <div class="navbar-nav">
                    <?php
                    if ($status == true) {
                        ?>
                        <a class="nav-link active" href="user"><i class="fa fa-dashboard"></i> Go To Panel</a> <a class="nav-link active" href="account/logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        <?php
                    }
                    else {
                        ?>
                        <a class="nav-link active" href="account"><i class="fa fa-sign-in"></i> Sign Up or Sign In</a>
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
                    <div class="card border-danger">
                        <div class="card-header border-danger">
                            Search
                        </div>
                        <div class="card-body">
                            <form action="index.php">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-danger" placeholder="Search">
                                    <button class="btn btn-danger" type="button">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="card border-danger">
                        <div class="card-header border-danger">
                            Sites related
                        </div>
                        <div class="card-body">
                            <ul style="text-align: left;">
                                <li>Site 1</li>
                                <li>Site 2</li>
                                <li>Site 3</li>
                                <li>Site 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <div class="card border-info">
                        <div class="card-header border-info">
                            Post 1 Title
                        </div>
                        <div class="card-body border-info">
                            <p>Text</p>
                            <p>Text Text Text</p>
                        </div>
                        <div class="card-footer border-info">
                            Posted in { Date & Time }
                        </div>
                    </div>
                    <br>
                    <div class="card border-info">
                        <div class="card-header border-info">
                            Post 2 Title
                        </div>
                        <div class="card-body border-info">
                            <p>Text Text Text Text Text Text Text Text Text Text Text</p>
                            <p>Text Text Text Text Text Text Text Text</p>
                        </div>
                        <div class="card-footer border-info">
                            Posted in { Date & Time }
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="card border-success">
                        <div class="card-header border-success">
                            School
                        </div>
                        <div class="card-body">
                            Little information of school
                        </div>
                    </div>
                    <br>
                    <div class="card border-success">
                        <div class="card-header border-success">
                            School Activities
                        </div>
                        <div class="card-body">
                            Part for school activities
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