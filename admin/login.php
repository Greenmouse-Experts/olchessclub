<?php session_start(); ?>
<?php include "header.php" ?>
<?php include "../includes/alerts.php"; ?>

<title> Admin | Dashboard </title>
</head>

<body class="bg-brand">
    <div class="container-fluid">

        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="card card-body access">
                    <h2 class="text-center text-brand">Admin</h2>
                    <form action="../process/processlogin.php" class="access-form" method="post">

                        <div class="row">
                            <div class="col-md-4 offset-md-4 mb-2">
                                <img src="../img/logo.png" alt="" class="img-fluid center">
                            </div>
                            <div class="col-md-8 offset-md-2 mb-1">
                                <div class="flash"><?php error_alert(); ?></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="username" class="form-control" Placeholder="User name">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" Placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-brand" style="float:right;color:#f7f7f7 !important;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php session_start(); ?>
<?php include "../includes/alerts.php"; ?>

<title> Admin | Dashboard </title>
</head>

<body class="bg-brand">
    <div class="container-fluid">

        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="card card-body access">
                    <h2 class="text-center text-brand">Admin</h2>
                    <form action="../process/processlogin.php" class="access-form" method="post">

                        <div class="row">
                            <div class="col-md-4 offset-md-4 mb-2">
                                <img src="../img/logo.png" alt="" class="img-fluid center">
                            </div>
                            <div class="col-md-8 offset-md-2 mb-1">
                                <div class="flash"><?php error_alert(); ?></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="username" class="form-control" Placeholder="User name">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" Placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-brand" style="float:right;color:#f7f7f7 !important;">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>