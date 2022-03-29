<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL ?>">
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

    body {
        font-family: 'Vazir';
    !important;
    }

    .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
        margin-left: unset;
    }

    section.modal {
        direction: ltr;
    !important;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.2);
        position: absolute;
        left: 0;
        top: 0;

        display: none;
    }

    .close {
        position: absolute;
        width: 40px;
        height: 40px;
        background-color: #d43f3a;
    }

    .dropdown-content {
        display: flex;
        flex-direction: column;
        position: absolute;
        background-color: #f6f6f6;
        /*min-width: 230px;*/
        border: 1px solid #ddd;
        z-index: 1;
        padding: 0;
        font-size: 12px;
        cursor: pointer;
    }

    .dropdown-content a {
        color: black;
        /*padding: 12px 16px;*/
        text-decoration: none;
        height: 2em;
        font-family: 'Vazir';
        display: inline-block;
        /*padding-top;*/

    }

    .hidden {
        display: none;
    }

    .dropdown-content a:hover {
        background-color: #c3c3c3
    }

    /*#myInput:focus {outline: 3px solid #ddd;}*/
    /* tag css start*/
    .tag {
        font-size: 14px;
        padding: .3em .4em .4em;
        margin: 0 .1em;
        cursor: context-menu;
        display: flex;
        top: 1%;
    }

    .tag a {
        color: #bbb;
        cursor: pointer;
        opacity: 0.6;
    }

    .tag a:hover {
        opacity: 1.0
    }

    .tag .remove {
        vertical-align: bottom;
        top: 0;
    }

    .tag a {
        margin: 0 0 0 .3em;
    }

    .tag a .glyphicon-white {
        color: #fff;
        margin-bottom: 2px;
    }

    /* tag css end*/
</style>
<body>
<?php require 'view/Admin/menu.php';
if (!empty($data['product'])) {
    $product = $data['product'];
} else {
    Model::backUrl('category/showCategoryAdmin');
}
var_dump($data['tagsProduct']);
?>

<section class="container" style="direction: ltr;">
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="">title</th>
            <th style="">summary</th>
            <th style="">price</th>
            <th style="">discription</th>
            <th style="">imageBig</th>
            <th style="">image1</th>
            <th style="">image2</th>
            <th style="">image3</th>
            <th style="">image4</th>
            <th style="width: 9.09%">meta</th>
            <th style="" class="text-center">oparations</th>
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
                <button class="btn btn-danger" onclick="closeModal()">انصراف</button>
            </section>
            <tr>
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $value['summary']; ?></td>
                <td><?php echo $value['price']; ?></td>
                <td style="overflow-wrap: anywhere"><?php echo $value['discription']; ?></td>
                <td><img src="view/Admin/product/imageBig/<?php echo $value['imageBig']; ?>" width="50px"
                         height="50px"/></td>
                <td><img src="view/Admin/product/fancy/<?php echo $value['image1']; ?>" width="50px" height="50px"/>
                </td>
                <td><img src="view/Admin/product/fancy/<?php echo $value['image2']; ?>" width="50px" height="50px"/>
                </td>
                <td><img src="view/Admin/product/fancy/<?php echo $value['image3']; ?>" width="50px" height="50px"/>
                </td>
                <td><img src="view/Admin/product/fancy/<?php echo $value['image4']; ?>" width="50px" height="50px"/>
                </td>
                <td>
                    <div class="dropdown">
                        <!--                        <button onclick="myFunction()" class="dropbtn">Dropdown</button>-->
                        <input type="text" class="form-control searchTag" placeholder="Search..">
                        <div class="dropdown-content hidden col-xs-12 ">
                            <input type="hidden" class="pId" value="<?php echo $value['id']; ?>">
                            <?php if (!empty($data['tags'])): ?>
                                <?php $tags = $data['tags']; ?>
                                <?php foreach ($tags as $item): ?>
                                    <a class="text-center"><?php echo $item['name']; ?><input type="hidden" class="tId" value="<?php echo $item['id']; ?>"></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--                    tag show-->

                    <!--                    tag show end-->
                </td>
                <td class="text-center" style="display: flex;justify-content: space-evenly;">
                    <!--                    <a href="slider/--><?PHP //echo $value['id'];
                    ?><!--" class="btn btn-success">update</a>-->
                    <!--                        <input type="hidden" value="--><?PHP //echo $value['id'];
                    ?><!--" name="id">-->
                    <!--                        <input type="hidden" value="view/Admin/slider/image/-->
                    <?php //echo $value['image'];
                    ?><!--" name="imagePath">-->
                    <img style="cursor: pointer;" width="50px" height="50px"
                         src="public/images/icon/delete-icon-stock-flat-design-vector-31349816.png"
                         onclick="showModal(<?php echo $value['id'] . ",'view/Admin/product/imageBig/" . $value['imageBig'] . "'" . ",'view/Admin/product/fancy/" . $value['image1'] . "'" . ",'view/Admin/product/fancy/" . $value['image2'] . "'" . ",'view/Admin/product/fancy/" . $value['image3'] . "'" . ",'view/Admin/product/fancy/" . $value['image4'] . "'" . "," . $value['categoryId'] ?>)">
                    <a href="product/index/<?php echo $value['categoryId'] ?>/<?php echo $value['id'] ?>/edit"><img
                                style="cursor: pointer;" width="50px" height="50px"
                                src="public/images/icon/update-icon-png-18.jpg"></a>

                </td>
                <!--                <td></td>-->
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</section>

</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>
    function showModal(id, imageBig, image1, image2, image3, image4, catId) {
        var modal = $('.modal');
        console.log(id);
        // console.log(path);
        modal.fadeIn(500);
        $('input[name=id]').attr('value', id);
        $('input[name=imagePathB]').attr('value', imageBig);
        $('input[name=imagePath1]').attr('value', image1);
        $('input[name=imagePath2]').attr('value', image2);
        $('input[name=imagePath3]').attr('value', image3);
        $('input[name=imagePath4]').attr('value', image4);
        $('input[name=catid]').attr('value', catId);
    }

    function closeModal() {
        $('.modal').fadeOut(300);
    }

    $(document).on('keyup', '.searchTag', function () {
        // $(this).css('color','red');
        var input, filter, ul, li, a, i, div;
        input = $(this);
        filter = input.val().toUpperCase();
        div = $(this).parent('.dropdown');
        a = div.children(".dropdown-content").children('a');
        // alert(filter);
        for (i = 0; i < a.length; i++) {
            txtValue = a.eq(i).text();
            // || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a.eq(i).css('display', '');
            } else {
                a.eq(i).css('display', 'none');
            }
        }
    });
    $(document).on('click', '.searchTag', function () {
        $(this).next().toggleClass('hidden');
    });
    $(document).on('click', 'a.remove', function () {
        $(this).parent().remove();
    });
    // function crateTag(name,pId,tId){
    //
    // }
    $(document).on('click', '.dropdown-content a', function () {
        // <span class="tag label label-info">
        //             <span></span>
        //             <a class="remove"><i class="fa fa-remove glyphicon-white"></i></a>
        //         </span>
        // var tId = $(this).attr('id');
        var pId = $(this).parent().children('input.pId').val();
        var tId = $(this).children('input.tId').val();
        var spanTagname = $("<span>").text($(this).text());
        var a = $("<a>", {"class": "remove"}).append($("<i>", {"class": "fa fa-remove glyphicon-white"}));
        var spanParant = $("<span>", {'class': 'tag label label-info'});
        var inputpId=$("<input>",{"class":"pId","value":pId,"type":"hidden"});
        var inputtId=$("<input>",{"class":"tId","value":tId,"type":"hidden"});
        var tag = $(this).text();
        var url='<?php echo URL."product/insertTagPost"?>';
        var data={'pId':pId,'tId':tId};
        console.log(inputpId);
        console.log(inputtId);
        if ($(this).closest('td').children('.tag').length > 0) {
            $(this).closest('td').children('.tag').each(function () {
                if ($(this).text() != tag) {
                    spanParant.append(spanTagname);
                    spanParant.append(a);
                    spanParant.append(inputpId);
                    spanParant.append(inputtId);
                    $(this).closest('td').append(spanParant);
                    $.post(url,data,function (msg){
                        if(msg==1){
                            alert('data sent');
                        }else if(msg==0){
                            alert('sorry you have problem!');
                        }
                    });
                }
            });
        } else {
            spanParant.append(spanTagname);
            spanParant.append(a);
            spanParant.append(inputpId);
            spanParant.append(inputtId);
            // spanParant.append($("input"),{"class":"pId","value":pId,"type":"hidden"});
            $(this).closest('td').append(spanParant);
            $.post(url,data,function (msg){
                if(msg==1){
                    alert('data sent');
                }else if(msg==0){
                    alert('sorry you have problem!');
                }
            });
        }
    });
    // $('a.remove').click(function () {
    // });


    function insertTag(pId, tId) {
        console.log($(this).html());
    }


</script>
</html>