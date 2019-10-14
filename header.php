<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Belgium</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-sm-12 m-0 p-0">
                <nav class="navbar navbar-expand-sm navbar-light bg-light border-bottom">
                    <a class="navbar-brand" href="index.php">
                        <img src="res/logo_belgium_text.png" class="img-fluid" alt="logo_belgium" style="height: 5vh;">
                    </a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapse_About" aria-controls="collapse_About"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapse_About">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item <?php
                                if($_GET['page'] == 'news') {
                                    echo 'active';
                                }
                            ?>">
                                <a class="nav-link lead" href="index.php?page=news">News</a>
                            </li>
                            <li class="nav-item <?php
                                if($_GET['page'] == 'about') {
                                    echo 'active';
                                }
                            ?>">
                                <a class="nav-link lead" href="index.php?page=about">About</a>
                            </li>
                            <li class="nav-item <?php
                                if($_GET['page'] == 'tour') {
                                    echo 'active';
                                }
                            ?>">
                                <a class="nav-link lead" href="index.php?page=tour">Take a Tour</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>