<!doctype html>
<html>
<head>
    <?php
    $catTitle = $data['catTitle'];
    $products = $data['products'];
    //    print_r($data['catId']);
    //    var_dump($meta);
    //    print_r($data['products']);
    //    print_r($data['catTitle']);
    ?>
    <base href="<?php echo URL ?>">
    <meta charset="utf-8">
    <title><?php echo $catTitle; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link href="public/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="public/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="public/css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
    <link href="public/css/toastr.min.css" rel="stylesheet" type="text/css">
</head>
<style>
    @font-face {
        font-family: 'Vazir';
        src: url('public/fonts/Vazir-Medium-FD.woff') format('woff');
        font-weight: normal;
    }

    .slider-box {
        background: url(public/images/template/slider-cover.jpg);
        width: 100%;
        min-height: 200px;
        color: #fff;
        padding: 20px;
        text-align: center;
        background-size: cover;
        position: relative;
        margin-bottom: 40px;
        line-height: 2.5;
    }
    a{
        text-decoration: none;
        color: inherit;
    }
    a:hover{
        /*text-decoration: none;*/
        color: inherit;
    }
    .main-menu ul li a:hover{
        background-color:rgba(255,255,255,.7);
        transition:all 0.2s;
        -webkit-transition:all 0.2s;
        -moz-transition:all 0.2s;
        -o-transition:all 0.2s;
    }

    .main-menu ul li ul{
        position:absolute;
        width:200px;
        color:#616161;
        background-color: #fffbfb;
        z-index:100;
        top:45px;
        opacity:0;
        visibility:hidden;
        transition:all 0.2s;
        -webkit-transition:all 0.2s;
        -moz-transition:all 0.2s;
        -o-transition:all 0.3s;
    }
</style>
<body>
<div class="social">
    <ul>
        <li><a href=""><i class="fa fa-instagram"></i></a></li>
        <li><a href=""><i class="fa fa-send"></i></a></li>
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
    </ul>
</div>
<!---------------------------------->
<div class="top2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login">
                    <a class="mybtn" href="<?= URL?>">????????</a>
                    <?php if (!empty(Model::getSession('userLogined'))):?>
                        <?php $user=Model::getSession('userName');
//                        echo Model::getSession('userLogined');
                        ?>
                        <a href="user/index" class="mybtn"><i class="fa fa-user-o"></i>???????? ?????? ??????????<?php echo $user;?></a>
                        <a href="loginUsers/logOut" class="mybtn"><i class="fa fa-sign-out"></i>????????</a>
                        <a href="cart/index" class="mybtn"><i class="fa fa-cart-arrow-down"></i>??????</a>
                    <?php else:?>
                        <a href="loginUsers/index" class="mybtn"><i class="fa fa-user-plus"></i>?????? ??????</a>
                        <a href="loginUsers/index" class="mybtn"><i class="fa fa-user-o"></i>????????</a>
                        <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>??????</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-6">
                <form action="<?= URL.'search/index'?>" method="post">
                    <input type="text" name="textSearch" placeholder="?????????? ???????? ?????? ???? ?????????? ????????">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
</div><!--top2-->
<!---------------------------------->
<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <a href="#">?????????? ??????????????</a>
                        <ul>
                            <li><a href="#">???????? ????????????</a></li>
                            <li><a href="#">????????</a></li>
                            <li><a href="#">???? ??????</a></li>
                            <li><a href="#">??????????????</a></li>
                            <li><a href="#">???????????? ??????????</a></li>
                            <li><a href="#">?????????? ?????????? ????????????</a></li>
                            <li><a href="#">?????????? ?????????? ????????????</a></li>
                            <li><a href="#">????????</a></li>
                        </ul>
                    </li>
                    <li><a href="#">???????????? ?? ??????????????</a></li>
                    <li>
                        <a href="#">???? ?? ??????????</a>
                        <ul>
                            <li><a href="#">???????? ??????</a></li>
                            <li><a href="#">???????? ??????</a></li>
                            <li><a href="#">??????????????</a></li>
                        </ul>
                    </li>
                    <li><a href="#">???????? ?? ????????????????</a></li>
                    <li><a href="#">?????????? ??????????</a></li>
                    <li><a href="#">?????????? ????????</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="pages-bnaer text-center">
    <div class="container">
        <span><?php echo $catTitle ?></span>
    </div>
</div>
<div class="container" style="direction: ltr;">
    <div class="row" style="">
        <?php foreach ($products as $value): ?>
            <div class="col-md-4">
                <div class="blog-content">
                    <figure>
                        <img height="300px" src="view/Admin/product/imageBig/<?php echo $value['imageBig'] ?>"
                             class="w-100">
                    </figure>
                    <h5><i class="fa fa-title"></i><?php echo $value['title'] ?></h5>
                    <p><?php echo $value['summary'] ?></p>
                    <ul>
                        <li><i class="fa fa-bars"></i>???????? ???????? : <?php echo $catTitle ?></li>
                        <!--                    <li><i class="fa fa-calendar-o"></i></li>-->
                        <!--                    <li><i class="fa fa-user-o"></i>?????????????? : ?????? 90</li>-->
                    </ul>
                    <a href="index/showProduct/<?php echo $value['id'] ?>/<?php echo $catTitle ?>" class="mybtn"><i
                                class="fa fa-continuous"></i>?????????? ????????&raquo;</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div>

        <ul style="display: flex; width:20%;justify-content: space-between;margin-left: 15px; ">
            <?php $totalPages = $data['totalPages'];
            //            var_dump($products['id']);
            $catId = $data['catId'];
            $pageOn = $data['pageOn'];
            $prev=$pageOn-1;
            $next=$pageOn+1;
            ?>
            <ul>
                <?php if($prev<1):?>
                <li style=" text-align: center;color:#9d9d9d;">
                    <a>prev</a>
                </li>
                <?php else:?>
                    <li style=" text-align: center;color:#2e9ad0;">
                        <a href="index/products/<?php echo $catId ?>/<?php echo $catTitle ?>/<?php echo $prev ?>">prev</a>
                    </li>
                <?php endif;?>
            </ul>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <?php if ($i == $pageOn):?>
                    <li style="border: black solid 1px; width:20px; text-align: center;color:black;background-color: #3c763d">
                    <a href="index/products/<?php echo $catId ?>/<?php echo $catTitle ?>/<?php echo $i ?>"><?php echo $i ?></a>
                </li>
                <?php else:?>
                <li style="border: black solid 1px; width:20px; text-align: center">
                    <a href="index/products/<?php echo $catId ?>/<?php echo $catTitle ?>/<?php echo $i ?>"><?php echo $i ?></a>
                </li>
                <?php endif; ?>
            <?php endfor; ?>
            <ul>
                <?php if($next>$totalPages):?>
                    <li style=" text-align: center;color:#9d9d9d;">
                        <a>next</a>
                    </li>
                <?php else:?>
                    <li style=" text-align: center;color:#2e9ad0;">
                        <a href="index/products/<?php echo $catId ?>/<?php echo $catTitle ?>/<?php echo $next ?>">next</a>
                    </li>
                <?php endif;?>
            </ul>
        </ul>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer-description">
                    <ul>
                        <li>?????????? ?????????? ?????????????? ???????????? ??????</li>
                        <li>???????? ???????? ?????? ??????????</li>
                        <li>???????????????? 24 ??????????</li>
                        <li>?????????? ???????????? ???????????? ???? ???????? ?????????? ?? ???????????? ???? ??????</li>
                        <li>?????????? ???????????? ???? ???? ???????? ???? ???????? ?????? ?????????? ??????????</li>
                        <li>???????? ???????? ?? ??????????</li>
                        <li>???????? ?????? ??????????</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-description2">
                    <ul>
                        <li><i class="fa fa-truck"></i>?????????? ???????? ????????</li>
                        <li><i class="fa fa-plane"></i>?????????? ???? ?????? ???????????? ?? ????????????</li>
                        <li><i class="fa fa-cart-arrow-down"></i>???????? ???????? ?? ????????</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-form">
                    <h5>???? ?????????????? ?????? ????????</h5>
                    <form action="registerNews/insertEmail" method="post" name="regEmail" id="regEmail">
                        <input type="email" placeholder="?????????? ?????? ???? ???????? ????????" name="email" REQUIRED>
                        <button type="submit"><i class="fa fa-envelope-o"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
<div class="copy-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

            </div>
        </div>
    </div>
</div>
</body>
<script src="public/javaScript/jquery-3.3.1.js" type="text/javascript"></script>
<script src="public/javaScript/jquery.simple.timer.js" type="text/javascript"></script>
<script src="public/javaScript/bootstrap.js" type="text/javascript"></script>
<script src="public/javaScript/owl.carousel.min.js" type="text/javascript"></script>
<script src="public/javaScript/js.js" type="text/javascript"></script>
<script src="public/javaScript/toastr.min.js" type="text/javascript"></script>
<script>
    $('#regEmail').submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var email = $('input[name=email]').val();
        var data = {'email': email};
        // alert(data['email']);
        $.post(url, data, function (msg) {
            if (msg == 1) {
                email = '';
                toastr.success('?????? ?????? ????????');
            } else if (msg == 2) {
                toastr.warning('?????? ?????????? ???????? ?????? ?????? ??????');
            } else {
                toastr.error('?????????? ???????????? ???????? ????????');
            }
        })
    })
</script>
</html>