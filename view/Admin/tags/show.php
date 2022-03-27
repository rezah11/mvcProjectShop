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
    section.modal{
        direction: ltr;!important;
        width: 100%;
        height: 100vh;
        background-color: rgba(0,0,0,0.2);
        position: absolute;
        left:0;
        top: 0;

        display: none;
    }
    .close{
        position: absolute;
        width: 40px;
        height: 40px;
        background-color: #d43f3a;
    }
</style>
<body>
<?php require 'view/Admin/menu.php';
if (!empty($data['tags'])){
    $tags=$data['tags'];}else{
    Model::backUrl('tags/index');
}
?>

<section class="container" style="direction: rtl;">
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width: 50%; " class="text-center">نام</th>

            <th style="width: 50%" class="text-center">عملیات</th>
            <!--            <th>oparation</th>-->
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($tags as $value):?>
            <section class="modal">
                <div class="close" onclick="closeModal()">close</div>
                <form action="tags/deleteTag" name="finalDelet" method="post">
                    <input type="number" id="id-final" name="id">
                    <input type="submit" class="btn btn-success" value="تایید">
                </form>
                <button  class="btn btn-danger"  onclick="closeModal()">انصراف</button>
            </section>
            <tr>
                <td class="text-center"><?php echo $value['name'];

                    ?></td>

                <td class="text-center" style="display: flex;justify-content: space-evenly;">
                    <!--                    <a href="slider/--><?PHP //echo $value['id']; ?><!--" class="btn btn-success">update</a>-->
                    <!--                        <input type="hidden" value="--><?PHP //echo $value['id']; ?><!--" name="id">-->
                    <!--                        <input type="hidden" value="view/Admin/slider/image/--><?php //echo $value['image'];?><!--" name="imagePath">-->
                    <img style="cursor: pointer;" width="50px" height="50px" src="public/images/icon/delete-icon-stock-flat-design-vector-31349816.png" onclick="showModal(<?php echo $value['id'] ?>)">
                    <a href="tags/index/<?php echo $value['id']?>/edit"><img style="cursor: pointer;" width="50px" height="50px" src="public/images/icon/update-icon-png-18.jpg"></a>

                </td>
                <!--                <td></td>-->
            </tr>
        <?php endforeach;?>

        </tbody>
    </table>
</section>

</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>
    function showModal(id){
        var modal=$('.modal');
        console.log(id);
        modal.fadeIn(500);
        $('input[name=id]').attr('value',id);
    }
    function closeModal(){
        $('.modal').fadeOut(300);
    }
</script>
</html>