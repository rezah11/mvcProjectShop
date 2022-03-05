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

    .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{
        margin-left: unset;
    }
</style>
<body>
<?php require 'view/Admin/menu.php';
if (!empty($data['slider'])){
    $slider=$data['slider'];}else{
    Model::backUrl('slider/index');
}
?>
<section class="container" style="direction: ltr;">
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width: 25%;">caption</th>
            <th style="width: 25%;">link</th>
            <th style="width: 25%">image</th>
            <th style="width: 25%" class="text-center">oparations</th>
<!--            <th>oparation</th>-->
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($slider as $value):?>
            <tr>
                <td><?php echo $value['caption'];

                ?></td>

                <td><?php echo $value['link'];?></td>
                <td><img src="view/Admin/slider/image/<?php echo $value['image'];?>" width="50px" height="50px"/></td>
                <td class="text-center"><a href="slider//<?PHP echo $value['id']; ?>" class="btn btn-success">update</a>
                    <a href="slider/deleteSlider/<?PHP echo $value['id']; ?>/<?php echo $value['image'];?>" class="btn btn-danger">delete</a></td>
<!--                <td></td>-->
            </tr>
        <?php endforeach;?>

        </tbody>
    </table>
</section>

</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>