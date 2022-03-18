<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="public/css/font-awesome.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/admin.css">
</head>
<style>

    @font-face {
        font-family: 'Vazir';
        src: url('public/fonts/Vazir-Medium-FD.woff') format('woff');
        font-weight: normal;
    }
    body{
        font-family: 'Vazir';!important;

    }
    .rtl-d{
        direction: rtl;!important;
    }
    textarea.form-control{
        height: 200px;!important;
        resize: none;
    }
    .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{
        margin-left: unset;
    }
</style>
<body>
<?php require 'view/index/Users/menu.php';
//var_dump($data['user']);
$user=$data['user'];
?>
<section class="container" style="direction: ltr;">
    <form class="rtl-d" action="user/update" method="post">
        <div class="form-group">
            <label for="name">نام و نام خانوادگی:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']?>">
        </div>
        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']?>">
        </div>
        <div class="form-group">
            <label for="tel">تلفن:</label>
            <input type="number" class="form-control" id="tel" name="tel" value="<?php echo $user['tel']?>">
        </div>
        <div class="form-group">
            <label for="passCurent">رمز عبور فعلی:</label>
            <input type="password" class="form-control" id="passCurent" name="passCurent" value="111111">
        </div>
        <div class="form-group">
            <label for="pass">رمز عبور جدید:</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <div class="form-group">
            <label for="rePass">تکرار رمزعبور:</label>
            <input type="password" class="form-control" id="rePass" name="rePass">
        </div>
        <button type="submit" class="btn btn-success btn-block">ویرایش</button>
    </form>
</section>
<br>
<br>
</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>
