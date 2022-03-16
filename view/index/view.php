<?php
$slider = $data['slider'];
$menu = new Model();
$result = $menu->getMenu();
//print_r($result);
Model::initSession();
//var_dump($data['name']);
?>
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
                    <?php if (!empty(Model::getSession('userLogined'))):?>
                        <?php $user=$data['name'];
//                        echo Model::getSession('userLogined');
                        ?>
                        <a href="#" class="mybtn"><i class="fa fa-user-o"></i>عزیز خوش آمدید<?php echo $user;?></a>
                        <a href="loginUsers/logOut" class="mybtn"><i class="fa fa-sign-out"></i>خروج</a>
                        <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                    <?php else:?>
                        <a href="loginUsers/index" class="mybtn"><i class="fa fa-user-plus"></i>ثبت نام</a>
                        <a href="loginUsers/index" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                        <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                    <?php endif;?>
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
<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <?php foreach ($result as $level1): ?>
                        <li>
                            <a href="<?php echo $level1['link'] ?>"><?php echo $level1['title'] ?> </a>
                            <ul>
                                <?php if (!empty($level1['children'])): ?>

                                    <?php $child1 = $level1['children'] ?>
                                    <?php foreach ($child1 as $level2): ?>
                                        <!--                                --><?php //print_r($level2)?>
                                        <li >
                                            <a href="<?php echo $level2['link']; ?>"><?php echo $level2['title'] ?></a>
                                            <?php if (!empty($level2['children'])): ?>
                                                <ul>
                                                    <?php $child2 = $level2['children'] ?>
                                                    <?php foreach ($child2 as $level3): ?>
                                                        <li>
                                                            <a href="<?php echo $level3['link']; ?>"><?php echo $level3['title'] ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
<!---------------------------------->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="slider-box">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-md-6" style="padding-top: 20px;">
                                <h4>Canon 638044</h4>
                                <span>دوربین کانن سری 6</span>
                                <p>دوربین کانن از سری 6 با لنز همراه.قابلیت تصویر برداری اچ دی.قابلیت تنظیم در حالت شب .
                                    دارای دو عدد باتری اضافی</p>
                            </div>
                            <div class="col-md-6">
                                <img src="public/images/template/p20lite-listimage-black.png" class="w-75">
                            </div>
                        </div>
                        <?php foreach ($slider as $item => $value): ?>
                            <div class="carousel-item">
                                <div class="col-md-6" style="padding-top: 20px;">
                                    <h4><?php echo $value['caption'] ?></h4>
                                    <span><a href="<?php echo $value['link'] ?>"><?php echo $value['link'] ?></a></span>
                                    <p>not set</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="view/Admin/slider/image/<?php echo $value['image'] ?>" class="w-75">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!--slider-box-->
        </div>
    </div>
</div>
<!---------------------------------->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="coopen">
                <img src="public/images/template/coopen.png" class="w-100"/>
            </div>
        </div>
        <div class="col-md-9">
            <div class="vizheh">
                <div class="col-md-6">
                    <div class="vizheh-img">
                        <img src="public/images/template/p20lite-listimage-black.png" class="w-100"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vizheh-content">
                        <div>
                            <del>729,000 تومان</del>
                        </div>
                        <h4>685,000 تومان</h4>
                        <h3>Huawei Tab Y300G2</h3>
                        <ul>
                            <li>حافظه داخلی 32 گیگابایت</li>
                            <li>دوربین 13 مگاپیکسل</li>
                        </ul>
                        <hr>
                        <span>زمان باقیمانده تا پایان سفارش</span>
                        <div class="counter" data-minutes-left="1000"></div>
                    </div>
                </div>
                <div class="vizheh-tag">
                    <span>فرصت ویژه</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="one-slider">
                <h4>دوربین عکاسی</h4>
                <div class="owl-carousel owl-theme ov1">
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>canon-ef-50mm</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>canon 55mmSTM</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>canon S-500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Canon_EOS_400D</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>canon d10</h5>
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
            <div class="book-baner">
                <a href="#"><img src="public/images/template/book-baner.jpg" class="w-100"/></a>
                <h4>کتاب های کنکور</h4>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="two-slider">
                <h4>موبایل و تبلت</h4>
                <div class="owl-carousel owl-theme ov2">
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/p20lite-listimage-black.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/p20lite-listimage-black.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/p20lite-listimage-black.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/p20lite-listimage-black.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/p20lite-listimage-black.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/p20lite-listimage-black.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/p20lite-listimage-black.png" class="w-100"/></a>
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
            <div class="bodybulding-baner">
                <a href="#"><img src="public/images/template/bodybulding-baner.jpg" class="w-100"/></a>
                <h4>مکمل های ورزشی</h4>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="three-slider">
                <h4>محصولات پر بازدید</h4>
                <div class="owl-carousel owl-theme ov3">
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>کیبورد ایسوس50</h5>
                        <span>85.000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Adata d5-32G</h5>
                        <span>112.000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Verity 16G</h5>
                        <span>65.000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>کفش چرمی نئو</h5>
                        <span>75.000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Sony PS4</h5>
                        <span>4,200,000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>پاوربانک آداتا</h5>
                        <span>145.000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Dlink 54-65-3</h5>
                        <span>117.000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>میز تلوزیون چوبی</h5>
                        <span>357.000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>Samsung Led HD</h5>
                        <span>3.850.000 تومان</span>
                    </div>
                    <div class="item">
                        <figure>
                            <a href=""><img src="public/images/template/Canon_EOS_400D.png" class="w-100"/></a>
                        </figure>
                        <h5>گارد آیفون</h5>
                        <span>39.000 تومان</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------->
<?php $category = $data['category'] ?>
<div class="container">
    <div class="row">
        <?php foreach ($category as $value): ?>
            <div class="col-md-4">
                <div class="blog-content">
                    <figure>
                        <img src="view/Admin/category/image/<?php echo $value['image'] ?>" class="w-100" height="300px">
                    </figure>
                    <h5><i class="fa fa-title"></i><?php echo $value['title'] ?></h5>
                    <ul>
                        <li><i class="fa fa-bars"></i>دسته بندی : <?php echo $value['title'] ?></li>
                    </ul>
                    <a href="index/products/<?php echo $value['id'] ?>/<?php echo $value['title'] ?>" class="mybtn"><i
                                class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!---------------------------------->
<div class="tab-box">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#watch"><i class="fa fa-gift"></i>ساعت مچی</a></li>
        <li><a data-toggle="tab" href="#badaligat"><i class="fa fa-gift"></i>بدلیجات</a></li>
        <li><a data-toggle="tab" href="#behdashti"><i class="fa fa-gift"></i>آرایشی و بهداشتی</a></li>
        <li><a data-toggle="tab" href="#bazi"><i class="fa fa-gift"></i>اسباب بازی</a></li>
        <li><a data-toggle="tab" href="#varzesh"><i class="fa fa-gift"></i>تجهیزات ورزشی</a></li>
        <li><a data-toggle="tab" href="#lebas"><i class="fa fa-gift"></i>لباس فصل</a></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="tab-content">
                <div id="watch" class="tab-pane fade">
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/watch/1.jpg" class="w-100"/></a>
                    </div>
                </div>
                <div id="badaligat" class="tab-pane fade">
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/lebas/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/lebas/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/lebas/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/lebas/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/lebas/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/lebas/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/lebas/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/lebas/1.jpg" class="w-100"/></a>
                    </div>
                </div>
                <div id="behdashti" class="tab-pane fade">
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/behdashti/1.jpg" class="w-100"/></a>
                    </div>
                </div>
                <div id="bazi" class="tab-pane fade">
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/bazi/1.jpg" class="w-100"/></a>
                    </div>
                </div>
                <div id="varzesh" class="tab-pane fade">
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/varzesh/8.jpg" class="w-100"/></a>
                    </div>
                </div>
                <div id="lebas" class="tab-pane fade">
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="public/images/template/off/badal/1.jpg" class="w-100"/></a>
                    </div>
                </div>
            </div>
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