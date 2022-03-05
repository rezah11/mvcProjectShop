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
<?php require 'view/Admin/menu.php';
if (!empty($data['meta'])){
$meta=$data['meta'];}else{
    Model::backUrl('Admin/index');
}
?>
<section class="container" style="direction: ltr;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>title</th>
                <th>author</th>
                <th>discription</th>
                <th>keywords</th>
                <th>oparation</th>
            </tr>
            </thead>
            <tbody>

                <?php
                foreach ($meta as $value):?>
                <tr>
                     <td><?php echo $value['title'];?></td>

                <td><?php echo $value['author'];?></td>
                <td><?php echo $value['discription'];?></td>
                <td><?php echo $value['keywords'];?></td>
                    <td><a href="Admin/deleteSetAdmin/<?PHP echo $value['id']; ?>" class="btn btn-danger">delete</a></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
</section>

</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>