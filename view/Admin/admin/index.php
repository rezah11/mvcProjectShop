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
    textarea.form-control{
        height: 200px;!important;
        resize: none;
    }
    .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{
        margin-left: unset;
    }
</style>
<body>
<?php require 'view/Admin/menu.php';?>
<section class="container" style="direction: ltr;">
    <form action="Admin/insertSetAdmin" method="post">
        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="author">author:</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="discription">discription:</label>
            <textarea  class="form-control" id="discription" name="discription"></textarea>
        </div>
        <div class="form-group">
            <label for="keywords">keywords:</label>
            <textarea class="form-control" id="keywords" name="keywords"></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block">Submit</button>
    </form>
</section>
<br>
<br>
</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>