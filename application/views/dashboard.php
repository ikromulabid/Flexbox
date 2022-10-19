<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?> ">
</head>
<body class="container">
    <form action="" class="form_login">
        <h1>Login Akun</h1>
        <div class="flex-input">
        <label for="">Username</label>
        <input type="text" name="" id="">
        </div>
        <div class="flex-input">
        <label for="">Password</label>
        <input type="password" name="" id="">
        </div>
        <div>
        <input type="button" href="<?= base_url() ?>index.php/home" value="login">
        </div>
        <div class="flex-container">
            <div>
        <input type="checkbox" name="" id="">
        <span>Remember me</span>
        </div>
        <div align="right">
        <a href="#">lupa password</a>
        </div>
        </div>
    </form>    

</body>
</html>