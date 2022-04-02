<!doctype html>
<html>
<head>
    <?php
//    $catTitle = $data['catTitle'];

    //    print_r($data['catId']);
    //    var_dump($meta);
    //    print_r($data['products']);
    //    print_r($data['catTitle']);
    ?>
    <base href="<?=URL ?>">
    <meta charset="utf-8">
    <title><?php ?></title>
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
                    <a class="mybtn" href="<?= URL?>">خانه</a>
                    <?php if (!empty(Model::getSession('userLogined'))):?>
                        <?php $user=Model::getSession('userName');
//                        echo Model::getSession('userLogined');
                        ?>
                        <a href="user/index" class="mybtn"><i class="fa fa-user-o"></i>عزیز خوش آمدید<?php echo $user;?></a>
                        <a href="loginUsers/logOut" class="mybtn"><i class="fa fa-sign-out"></i>خروج</a>
                        <a href="cart/index" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                    <?php else:?>
                        <a href="loginUsers/index" class="mybtn"><i class="fa fa-user-plus"></i>ثبت نام</a>
                        <a href="loginUsers/index" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                        <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-6">
                <form action="">
                    <form action="<?= URL.'search/index'?>" method="post">
                        <input type="text" name="textSearch" placeholder="کالای مورد نظر را جستجو کنید">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
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
                        <a href="#">کالای دیجیتال</a>
                        <ul>
                            <li><a href="#">گوشی موبایل</a></li>
                            <li><a href="#">تبلت</a></li>
                            <li><a href="#">لپ تاپ</a></li>
                            <li><a href="#">نمایشگر</a></li>
                            <li><a href="#">دوربین عکاسی</a></li>
                            <li><a href="#">لوازم جانبی رایانه</a></li>
                            <li><a href="#">لوازم جانبی موبایل</a></li>
                            <li><a href="#">سایر</a></li>
                        </ul>
                    </li>
                    <li><a href="#">آرایشی و بهداشتی</a></li>
                    <li>
                        <a href="#">مد و پوشاک</a>
                        <ul>
                            <li><a href="#">لباس فصل</a></li>
                            <li><a href="#">ساعت مچی</a></li>
                            <li><a href="#">بدلیجات</a></li>
                        </ul>
                    </li>
                    <li><a href="#">خانه و آشپزخانه</a></li>
                    <li><a href="#">ابزار اداری</a></li>
                    <li><a href="#">اسباب بازی</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="pages-bnaer text-center">
    <div class="container">
        <span><?php  ?></span>
    </div>
</div>
<div class="container" style="direction: rtl;">
    <div class="row" style="">
        <?php if(!empty($data['result'])):?>
<!--        --><?php
$result=$data['result'];
        foreach ($result as $value):?>
            <div class="col-md-4">
                <div class="blog-content">
                    <figure>
                        <img height="300px" src="view/Admin/product/imageBig/<?php
                        echo $value['imageBig']
                        ?>"
                             class="w-100">
                    </figure>
                    <h5><i class="fa fa-title"></i><?php
                        echo $value['title']
                        ?></h5>
                    <p><?php
                        echo $value['summary']
                        ?></p>
                    <ul>
                        <li><i class="fa fa-bars"></i>دسته بندی :
<!--                            --><?= $value['title'] ?>
                        </li>
                        <!--                    <li><i class="fa fa-calendar-o"></i></li>-->
                        <!--                    <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>-->
                    </ul>
                    <a href="index/showProduct/<?php echo $value['productId'] ?>/<?=$value['title'] ?>" class="mybtn"><i
                            class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else:?>
        <h5 class="h5">متاسفانه موردی یافت نشد.</h5>
<?php   endif;?>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer-description">
                    <ul>
                        <li>تضمین اصالت کالاهای فروخته شده</li>
                        <li>فروش برند های معتبر</li>
                        <li>پاسخگویی 24 ساعته</li>
                        <li>امکان پرداخت آنلاین با کارت بانکی و پرداخت در محل</li>
                        <li>امکان بازگشت تا یک هفته در صورت عدم رضایت مشتری</li>
                        <li>خرید آسان و مطمئن</li>
                        <li>قیمت های مناسب</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-description2">
                    <ul>
                        <li><i class="fa fa-truck"></i>تحویل پستی سریع</li>
                        <li><i class="fa fa-plane"></i>ارسال با پست پیشتاز و سفارشی</li>
                        <li><i class="fa fa-cart-arrow-down"></i>خرید آسان و راحت</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-form">
                    <h5>در خبرنامه عضو شوید</h5>
                    <form action="registerNews/insertEmail" method="post" name="regEmail" id="regEmail">
                        <input type="email" placeholder="ایمیل خود را وارد کنید" name="email" REQUIRED>
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
                <span>info@seo90.ir</span>
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
                toastr.success('شما عضو شدید');
            } else if (msg == 2) {
                toastr.warning('این ایمیل قبلا ثبت شده است');
            } else {
                toastr.error('عضویت موفقیت آمیز نبود');
            }
        })
    })
</script>
</html>
<?php