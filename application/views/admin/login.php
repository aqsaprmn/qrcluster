<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?= base_url() ?>asset/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>asset/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.css">

    <title><?= $title ?> - Akses Prima Indonesia</title>

    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("<?= base_url() ?>asset/img/earthline.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="row justify-content-center p-4 h-100 m-0">
        <div class="col-lg-5 col-md-6 col-xxl-3 col-sm-7 p-4 align-self-center">
            <div class="text-center mb-4">
                <img class="" style="width: 200px;" src="<?= base_url() ?>asset/img/logoapi.png" alt="">
            </div>
            <div class="text-center mb-4">
                <h2 style="color: #9B9A9A;">Login</h2>
            </div>
            <div class="mb-4"><?= $this->session->flashdata('message'); ?></div>
            <form class="border border-gray shadow-lg rounded p-2" action="<?= base_url() ?>login/go" method="POST">
                <div class="mb-3">
                    <input type="text" required class="form-control p-3 rounded" name="username" placeholder="Username">
                </div>
                <div class="mb-2">
                    <input type="password" required class="form-control p-3 rounded" name="password" placeholder="Password">
                </div>
                <div class="row m-0">
                    <button class="btn btn-danger p-3">Masuk</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>