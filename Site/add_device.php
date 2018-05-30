<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Rounded-Slider-with-Label.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch.css">
</head>

<body>
    <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">ioT Control Board</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Groups&nbsp;</a>
								<div class="dropdown-menu" role="menu">
							<?php
								require_once('assets/php/modele/types.php');
								showTypes();
							?>
								</div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"></label></div>
                        </form><span class="navbar-text"><a href="#" class="login">Log In</a></span></div>
                </div>
            </nav>
            <div class="container d-flex hero" style="background-color:#ffffff;padding:0px;">
                <ul class="list-group">
                    <li class="list-group-item"><a href="settings.php">Settings</a></li>
                    <li class="list-group-item"><span>Add device</span></li>
                </ul>
                <div class="d-flex flex-column flex-fill" style="padding:10px;">
                    <h2 class="justify-content-center">Add device</h2>
                    <form>
                        <div class="d-flex"></div>
                    </form>
                    <form method="post" action="assets/php/changepwd.php">
                        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control" type="text" name="description" placeholder="Description"></div>
                        <div class="form-group">
                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Location</button>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Type&nbsp;</button>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" action="assets/php/changepwd.php">Add device</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>