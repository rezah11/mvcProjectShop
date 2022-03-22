<!doctype html>
<html>
<head>
    <?php
    if (!empty($data['product'])) {
        $product = $data['product'];
    }
    $catTitle = $data['catTitle'];
    //    var_dump($meta);
    ?>
    <base href="<?php echo URL ?>">
    <meta charset="utf-8">
    <title><?php echo $product['title']; ?></title>
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
    /*@font-face {*/
    /*    font-family: 'Vazir';*/
    /*    src: url('public/fonts/Vazir-Medium-FD.woff') format('woff');*/
    /*    font-weight: normal;*/
    /*}*/
    /*.slider-box{*/
    /*    background:url(public/images/template/slider-cover.jpg);*/
    /*    width:100%;*/
    /*    min-height:200px;*/
    /*    color:#fff;*/
    /*    padding:20px;*/
    /*    text-align:center;*/
    /*    background-size:cover;*/
    /*    position:relative;*/
    /*    margin-bottom:40px;*/
    /*    line-height: 2.5;*/
    /*}*/
    .main-menu ul li a:hover {
        background-color: rgba(255, 255, 255, .7);
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
    }

    .main-menu ul li ul {
        position: absolute;
        width: 200px;
        color: #616161;
        background-color: #fffbfb;
        z-index: 100;
        top: 45px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.3s;
    }
/**********Comments*************/
    body{
        margin-top:20px;
        background:#eee;
    }
    @media (min-width: 0) {
        .g-mr-15 {
            margin-right: 1.07143rem !important;
        }
    }
    @media (min-width: 0){
        .g-mt-3 {
            margin-top: 0.21429rem !important;
        }
    }

    .g-height-50 {
        height: 50px;
    }

    .g-width-50 {
        width: 50px !important;
    }

    @media (min-width: 0){
        .g-pa-30 {
            padding: 2.14286rem !important;
        }
    }

    .g-bg-secondary {
        background-color: #fafafa !important;
    }

    .u-shadow-v18 {
        box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
    }

    .g-color-gray-dark-v4 {
        color: #777 !important;
    }

    .g-font-size-12 {
        font-size: 0.85714rem !important;
    }

    .media-comment {
        margin-top:20px
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
                    <a href="#" class="mybtn"><i class="fa fa-user-plus"></i>ثبت نام</a>
                    <a href="#" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                    <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                </div>
            </div>
            <div class="col-md-6">
                <form action="">
                    <input type="text" placeholder="کالای مورد نظر را جستجو کنید">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
</div><!--top2-->
<!---------------------------------->
<?php require 'view/menuIndex.php'; ?>
<!---------------------------------->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="single-box">
                <div class="row">
                    <div class="col-md-7">
                        <h5><?php echo $product['title'] ?></h5>
                        <h6><?php echo $product['summary'] ?></h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="single-content-right">
                                    <ul class="brand-ul">
                                        <!--                                        <li>برند : <a href="#">هوآوی</a></li>-->
                                        <li>دسته بندی : <a href="#"><?php echo $catTitle ?></a></li>
                                    </ul>
                                    <br>
                                    <span>مشخصات  محصول :</span><br>
                                    <ul class="product-ul">
                                        <li style="overflow-wrap: break-word">
                                            <?php echo $product['discription'] ?>
                                        </li>
                                        <!--                                        <li>اندازه نمایشگر 10 اینچ</li>-->
                                        <!--                                        <li>دارای شبکه 4G</li>-->
                                        <!--                                        <li>دارای دو سیم کارت</li>-->
                                        <!--                                        <li>حافظه داخلی 32G</li>-->
                                        <!--                                        <li>دارای بدنه فلزی در عین حال سبک</li>-->
                                        <!--                                        <li>درای تنوع رنگ</li>-->
                                    </ul>
                                </div>
                            </div>
                            <!--                            <div class="col-md-5">-->
                            <!--                                <div class="single-content-left">-->
                            <!--                                    <ul>-->
                            <!--                                        <span>وضعیت : موجود در انبار</span><br><br>-->
                            <!--                                        <li>گارانتی : Huawei</li>-->
                            <!--                                        <br>-->
                            <!--                                        <li>-->
                            <!--                                            رنگ بندی :-->
                            <!--                                            <ul>-->
                            <!--                                                <li><i class="fa fa-square white"></i>سفید</li>-->
                            <!--                                                <li><i class="fa fa-square black"></i>مشکی</li>-->
                            <!--                                                <li><i class="fa fa-square silver"></i>نقره ای</li>-->
                            <!--                                                <li><i class="fa fa-square gold"></i>طلایی</li>-->
                            <!--                                            </ul>-->
                            <!--                                        </li>-->
                            <!--                                    </ul>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        </div>
                        <hr>
                        <h3><?php echo $product['price'] ?></h3>
                        <div style="display: flex;align-items: center;flex-direction: row-reverse;">
                            <div class="btn-single">
                                <a href="#" style="font-size: 15px"><i class="fa fa-money"></i>خرید آنلاین</a>
                            </div>
                            <form action="cart/insertCart" name="insertCart" method="post">
                                <div class="btn-single">
                                    <input type="hidden" name="productId" value="<?php echo $product['id']?>"/>
                                    <a href="" style="font-size: 15px" id="insertCart" ><i class="fa fa-cart-plus"></i>اضافه کردن به سبد
                                        خرید</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="single-img">
                            <figure>
                                <img src="view/Admin/product/imageBig/<?php echo $product['imageBig'] ?>"
                                     class="w-100 s-img" data-zoom-image="img/single-tablet.jpg">
                            </figure>
                        </div>
                        <div class="single-img-slider">
                            <div class="owl-carousel owl-theme ov-single">
                                <div class="item">
                                    <a data-fancybox="gallery"
                                       href="view/Admin/product/fancy/<?php echo $product['image1'] ?>"><img
                                                src="view/Admin/product/fancy/<?php echo $product['image1'] ?>"
                                                class="w-100"></a>
                                </div>
                                <div class="item">
                                    <a data-fancybox="gallery"
                                       href="view/Admin/product/fancy/<?php echo $product['image2'] ?>"><img
                                                src="view/Admin/product/fancy/<?php echo $product['image2'] ?>"
                                                class="w-100"></a>
                                </div>
                                <div class="item">
                                    <a data-fancybox="gallery"
                                       href="view/Admin/product/fancy/<?php echo $product['image3'] ?>"><img
                                                src="view/Admin/product/fancy/<?php echo $product['image3'] ?>"
                                                class="w-100"></a>
                                </div>
                                <div class="item">
                                    <a data-fancybox="gallery"
                                       href="view/Admin/product/fancy/<?php echo $product['image4'] ?>"><img
                                                src="view/Admin/product/fancy/<?php echo $product['image4'] ?>"
                                                class="w-100"></a>
                                </div>
                                <!--                                <div class="item">-->
                                <!--                                    <a data-fancybox="gallery"  href="img/single-tablet.jpg"><img src="img/single-tablet.jpg" class="w-100"></a>-->
                                <!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
<div class="container">
    <span class="releated-products">محصولات مرتبط</span>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="single-two-slider">
                <div class="owl-carousel owl-theme ov-single-two">
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="img/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="single-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#one"><i class="fa fa-file"></i>مشخصات فنی</a></li>
                    <li><a data-toggle="tab" href="#two"><i class="fa fa-pencil"></i>نظرات کاربران</a></li>
                </ul>
                <div class="tab-content">
                    <div id="one" class="tab-pane fade">
                        <p class="bg-light"><span>شرکت سازنده:</span>هوآوی</p>
                        <p class="bg-light"><span>مدل:</span>Tab G6</p>
                        <p class="bg-light"><span>گارانتی:</span>Huawei</p>
                        <p class="bg-light"><span>شبکه های تلفن:</span>4G-3G-LTE</p>
                        <p class="bg-light"><span>تعداد سیمکارت:</span>2</p>
                        <p class="bg-light"><span>حافظه داخلی:</span>32G</p>
                        <p class="bg-light"><span>پشتیبانی از کارت sd:</span>بله</p>
                        <p class="bg-light"><span>باتری:</span>1300 میلی آمپر</p>
                        <p class="bg-light"><span>باتری اضافی:</span>ندارد</p>
                        <p class="bg-light"><span>جک هدفون:</span>دارد</p>
                        <p class="bg-light"><span>گارد:</span>ندارد</p>
                    </div>
                    <div id="two" class="tab-pane fade">
                        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="media g-mb-30 media-comment">
                                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
                                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                                            <div class="g-mb-15">
                                                <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                                                <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
                                            </div>

                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                                            <ul class="list-inline d-sm-flex my-0">
                                                <li class="list-inline-item g-mr-20">
                                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                        <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                                                        178
                                                    </a>
                                                </li>
                                                <li class="list-inline-item g-mr-20">
                                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                        <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                                                        34
                                                    </a>
                                                </li>
                                                <li class="list-inline-item ml-auto">
                                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                        <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                                                        Reply
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="media g-mb-30 media-comment">
                                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Image Description">
                                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                                            <div class="g-mb-15">
                                                <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                                                <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
                                            </div>

                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                                            <ul class="list-inline d-sm-flex my-0">
                                                <li class="list-inline-item g-mr-20">
                                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                        <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                                                        178
                                                    </a>
                                                </li>
                                                <li class="list-inline-item g-mr-20">
                                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                        <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                                                        34
                                                    </a>
                                                </li>
                                                <li class="list-inline-item ml-auto">
                                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                        <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                                                        Reply
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
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
                &copy;&nbsp;&nbsp;طراحی و کدنویسی سئو 90&nbsp;&nbsp;&nbsp;&nbsp;
                <span>info@seo90.ir</span>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
<!--lorem-->
<!--<div>i</div>-->
</body>

<script src="<?php echo URL;?>public/javaScript/jquery-3.3.1.js" type="text/javascript"></script>
<script src="<?php echo URL;?>public/javaScript/jquery.simple.timer.js" type="text/javascript"></script>
<script src="<?php echo URL;?>public/javaScript/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo URL;?>public/javaScript/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo URL;?>public/javaScript/js.js" type="text/javascript"></script>
<script src="<?php echo URL;?>public/javaScript/toastr.min.js" type="text/javascript"></script>
<script>

    // $(document).on('click', '#insertCart', function(e) {
    //     $('form[name=insertCart]').submit();
    //     // e.preventDefault();
    //
    // });
    $(document).ready(function (){
        $('#regEmail').submit(function (e) {
            e.preventDefault();
            var url = $(this).attr('action');
            var email = $('input[name=email]').val();
            var data = {'email': email};
            // alert(data['email']);
            $.post(url, data, function (msg) {
                if (msg == 1) {
                    // email = '';
                    // console.log(mag);
                    toastr.success('شما عضو شدید');
                } else if (msg == 2) {
                    toastr.warning('این ایمیل قبلا ثبت شده است');
                } else {
                    toastr.error('عضویت موفقیت آمیز نبود');
                }
            })
        });
        $('#insertCart').click(function (e){
            e.preventDefault();
            var idproduct=$('input[name=productId]').val();
            console.log(idproduct);
            var url="<?php echo URL.'cart/insertCart'?>";
            console.log(url);
            var data = {'productId': idproduct};
            $.post(url, data, function (msg){
                if (msg == 1) {
                    // console.log('true');
                    toastr.success('محصول به سبد اضافه شد');
                }else if(msg == 0) {
                    // console.log('false');
                    toastr.warning('عملیات ناموفق بود');
                }else {
                    toastr.error('test');
                }
            });
            //     .done(function( msg ) {
            //     alert( "Data Loaded: " + msg );
            //
            // });
            // $('form[name=insertCart]').submit();
        });
    });


    // function formInsert(e){
    //     e.preventDefault();
    //     $('#insertCart').submit();
    // }
</script>
</html>