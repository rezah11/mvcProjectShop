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
<?php
//echo $sliderEditId;
?>
<?php if (empty($data)): ?>
<section class="container" style="direction: ltr;">
    <form action="slider/insertSlider" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="caption">caption:</label>
            <input type="text" class="form-control" id="caption" name="caption" required>
        </div>
        <div class="form-group">
            <label for="link">link:</label>
            <input type="text" class="form-control" id="link" name="link" required>
        </div>
        <div class="form-group">
            <label for="image">image:</label>
            <input  class="form-control" id="image" name="image" type="file" required/>
        </div>
        <button type="submit" class="btn btn-success btn-block">Submit</button>
    </form>
</section>
<?php elseif($data['edit']=='edit'):?>
<?php
    $sliderEdit=$data['slider'];
    $sliderEditId=$data['id'];
    ?>
    <section class="container" style="direction: ltr;">
        <form action="slider/updateSlider" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="caption">caption:</label>
                <input type="text" class="form-control" id="caption" value="<?php echo $sliderEdit['caption']?>" name="caption" required>
            </div>
            <div class="form-group">
                <label for="link">link:</label>
                <input type="text" class="form-control" id="link" value="<?php echo $sliderEdit['caption']?>" name="link" required>
                <input type="hidden" name="sliderUpdateId"  value="<?php echo $sliderEditId?>">
            </div>
            <div class="form-group">
                <label for="image">image:</label>
                <input  class="form-control" id="image" name="image" type="file" />
            </div>
            <button type="submit" class="btn btn-success btn-block">Submit</button>

        </form>
    </section>

<?php endif; ?>
</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>