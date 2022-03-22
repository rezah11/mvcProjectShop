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
<?php require 'view/index/Users/menu.php';
//if (!empty($data['paid'])){
$Npaid=$data['Npaid'];
$id=$data['id'];
//    var_dump($Npaid);
//    var_dump($id);
//}
//else{
//    Model::backUrl('slider/index');
//}
?>
<h1 class="h5"> سفارشات پرداخت نشده</h1>
<section class="container" style="direction: rtl;">
    <table class="table table-striped">
        <thead >
        <tr class="">
            <th class="text-center">نام کالا</th>
            <th class="text-center">تعداد</th>
            <th class="text-center">عکس</th>
            <th class="text-center">قیمت</th>
            <th class="text-center">تاریخ</th>
            <!--            <th style="width: 25%" class="text-center">oparations</th>-->
            <!--            <th>oparation</th>-->
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($Npaid as $value):?>
            <section class="modal">
                <div class="close" onclick="closeModal()">close</div>
                <form action="slider/deleteSlider" name="finalDelet" method="post">
                    <input type="hidden" id="id-final" name="id">
                    <input type="hidden" id="path-final" name="imagePath">
                    <input type="submit" class="btn btn-success" value="تایید">
                </form>
                <button  class="btn btn-danger"  onclick="closeModal()">انصراف</button>
            </section>
            <tr>
                <td class="text-center">
                    <?php echo $value['title'];?>
                </td>

                <td class="text-center">
                    <?php echo $value['count'];?>
                </td>
                <td class="text-center">
                    <img src="view/Admin/product/imageBig/<?php echo $value['imageBig'];?>" width="50px" height="50px"/>
                </td>
                <td class="text-center"><?php echo $value['price'];?></td>
                <td class="text-center"><?php echo $value['updated_at'];?></td>

                <!--                <td class="text-center" style="display: flex;justify-content: space-evenly;">-->
                <!--                                        <a href="slider/--><?PHP ////echo $value['id']; ?><!--" class="btn btn-success">update</a>-->
                <!--                                            <input type="hidden" value="--><?PHP ////echo $value['id']; ?><!--" name="id">-->
                <!--                                           <input type="hidden" value="view/Admin/slider/image/--><?php ////echo $value['image'];?><!--" name="imagePath">-->
                <!--                    <img style="cursor: pointer;" width="50px" height="50px" src="public/images/icon/delete-icon-stock-flat-design-vector-31349816.png" onclick="showModal(--><?php //echo $value['id'].",'view/Admin/slider/image/".$value['image']."'" ?>
                <!--                    <a href="slider/index/--><?php ////echo $value['id']?><!--/edit"><img style="cursor: pointer;" width="50px" height="50px" src="public/images/icon/update-icon-png-18.jpg"></a>-->
                <!---->
                <!--                </td>-->
                <!--                <td></td>-->
            </tr>
        <?php endforeach;?>

        </tbody>
    </table>
    <div class="text-center" style="width: 100%"><a href="<?php echo URL?>cart/index" class="btn btn-success" >عملیات خرید</a></div>
</section>

</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>
    function showModal(id,path){
        var modal=$('.modal');
        console.log(id);
        console.log(path);
        modal.fadeIn(500);
        $('input[name=id]').attr('value',id);
        $('input[name=imagePath]').attr('value',path);
    }
    function closeModal(){
        $('.modal').fadeOut(300);
    }
</script>
</html>