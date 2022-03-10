<section class="container-fluid">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">نمایش وبسایت</a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                <li><a href="login/logout"><span class="fa fa-sign-out"></span> خروج</a></li>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a class=""  href="menu/index">نمایش منو</a>

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="slider/index"> دسته بندی محصولات
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL ?>category/index">وارد کردن اطلاعات دسته بندی محصولات</a></li>
                        <li><a href="<?php echo URL ?>category/showCategoryAdmin">نمایش جزئیات دسته بندی محصولات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="slider/index"> اسلایدر
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL ?>slider/index">وارد کردن اطلاعات اسلایدر</a></li>
                        <li><a href="<?php echo URL ?>slider/showSliderAdmin">نمایش جزئیات اسلایدر</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="index/index">صفحه مدیریت
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL ?>admin/index">وارد کردن اطلاعات صفحه مدیریت</a></li>
                        <li><a href="<?php echo URL ?>admin/showSetAdmin">نمایش جزئیات صفحه مدیریت</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</section>
