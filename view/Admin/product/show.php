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
if (!empty($data['product'])){
    $product=$data['product'];}else{
    Model::backUrl('category/showCategoryAdmin');
}
?>

<section class="container" style="direction: ltr;">
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width: 25%;">title</th>
            <th style="width: 25%;">summary</th>
            <th style="width: 25%;">price</th>
            <th style="width: 25%;">discription</th>
            <th style="width: 25%">imageBig</th>
            <th style="width: 25%">image1</th>
            <th style="width: 25%">image2</th>
            <th style="width: 25%">image3</th>
            <th style="width: 25%">image4</th>
            <th style="width: 25%" class="text-center">oparations</th>
            <!--            <th>oparation</th>-->
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($product as $value):?>
            <section class="modal">
                <div class="close" onclick="closeModal()">close</div>
                <form action="product/deleteProduct" name="finalDelet" method="post">
                    <input type="hidden" id="id-final" name="id">
                    <input type="hidden" id="path-final" name="imagePathB">
                    <input type="hidden" id="path-final1" name="imagePath1">
                    <input type="hidden" id="path-final2" name="imagePath2">
                    <input type="hidden" id="path-final3" name="imagePath3">
                    <input type="hidden" id="path-final4" name="imagePath4">
                    <input type="hidden" id="catid" name="catid">
                    <input type="submit" class="btn btn-success" value="تایید">

                </form>
                <button  class="btn btn-danger"  onclick="closeModal()">انصراف</button>
            </section>
            <tr>
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $value['summary'];?></td>
                <td><?php echo $value['price'];?></td>
                <td style="overflow-wrap: anywhere"><?php echo $value['discription'];?></td>
                <td><img src="view/Admin/product/imageBig/<?php echo $value['imageBig'];?>" width="50px" height="50px"/></td>
                <td><img src="view/Admin/product/fancy/<?php echo $value['image1'];?>" width="50px" height="50px"/></td>
                <td><img src="view/Admin/product/fancy/<?php echo $value['image2'];?>" width="50px" height="50px"/></td>
                <td><img src="view/Admin/product/fancy/<?php echo $value['image3'];?>" width="50px" height="50px"/></td>
                <td><img src="view/Admin/product/fancy/<?php echo $value['image4'];?>" width="50px" height="50px"/></td>
                <td class="text-center" style="display: flex;justify-content: space-evenly;">
                    <!--                    <a href="slider/--><?PHP //echo $value['id']; ?><!--" class="btn btn-success">update</a>-->
                    <!--                        <input type="hidden" value="--><?PHP //echo $value['id']; ?><!--" name="id">-->
                    <!--                        <input type="hidden" value="view/Admin/slider/image/--><?php //echo $value['image'];?><!--" name="imagePath">-->
                    <img style="cursor: pointer;" width="50px" height="50px" src="public/images/icon/delete-icon-stock-flat-design-vector-31349816.png" onclick="showModal(<?php echo $value['id'].",'view/Admin/product/imageBig/".$value['imageBig']."'".",'view/Admin/product/fancy/".$value['image1']."'".",'view/Admin/product/fancy/".$value['image2']."'".",'view/Admin/product/fancy/".$value['image3']."'".",'view/Admin/product/fancy/".$value['image4']."'".",".$value['categoryId'] ?>)">
                    <a href="product/index/<?php echo $value['categoryId']?>/<?php echo $value['id']?>/edit"><img style="cursor: pointer;" width="50px" height="50px" src="public/images/icon/update-icon-png-18.jpg"></a>

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
    function showModal(id,imageBig,image1,image2,image3,image4,catId){
        var modal=$('.modal');
        console.log(id);
        // console.log(path);
        modal.fadeIn(500);
        $('input[name=id]').attr('value',id);
        $('input[name=imagePathB]').attr('value',imageBig);
        $('input[name=imagePath1]').attr('value',image1);
        $('input[name=imagePath2]').attr('value',image2);
        $('input[name=imagePath3]').attr('value',image3);
        $('input[name=imagePath4]').attr('value',image4);
        $('input[name=catid]').attr('value',catId);
    }
    function closeModal(){
        $('.modal').fadeOut(300);
    }
</script>
</html>