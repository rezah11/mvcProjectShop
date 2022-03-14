<!doctype html>
<html>
<head>
    <?php

    $meta=$data['meta'];
//    var_dump($meta);
    ?>
    <base href="<?php echo URL?>">
    <meta charset="utf-8">
    <title><?php echo $meta['title'];?></title>
    <meta name="description" content="<?php echo $meta['discription'];?>">
    <meta name="keywords" content="<?php echo $meta['keywords'];?>">
    <meta name="author" content="<?php echo $meta['author'];?>">
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
    /**{*/
    /*    margin: 0px;*/
    /*    padding: 0px;*/
    /*}*/
    .slider-box{
        background:url(public/images/template/slider-cover.jpg);
        width:100%;
        min-height:200px;
        color:#fff;
        padding:20px;
        text-align:center;
        background-size:cover;
        position:relative;
        margin-bottom:40px;
        line-height: 2.5;
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
    /*#menu ul{*/
    /*    width: 100%;*/
    /*    height: 50px;*/
    /*    position: relative;*/
    /*    !*background-color: #fdfbdisplay:*!*/
    /*    !*background-colo r: #d43    f3a;*!*/
    /*}*/
    /*#menu ul li{*/
    /*    width: 150px;*/
    /*    height: 50px;*/
    /*    float: right;*/
    /*    text-align: center;*/
    /*    background-color: #d43f3a;*/
    /*    cursor: pointer;*/
    /*    !*background-color: #0b2e13;*!*/

    /*}*/

    /*#menu ul ul{*/
    /*    display: none;*/
    /*    !*position: relative;*!*/
    /*    background-color: #0000cc;*/
    /*    float: right;*/
    /*    !*position: relative;*!*/
    /*    top: 50px;*/
    /*}*/
    /*!*#menu ul ul li{*!*/
    /*!*    !*position: absolute;*!*!*/
    /*!*    top: 50px;*!*/
    /*!*    z-index: 1;*!*/
    /*!*}*!*/

    /*#menu ul ul ul{*/
    /*    margin-right: 150px;*/
    /*}*/
    /*#menu ul li:hover{*/
    /*    opacity: .7;*/
    /*}*/
    /*#menu ul li:hover > ul{*/
    /*    display: block;!important;*/
    /*}*/
    /*.ul2{*/
    /*    display: block;*/
    /*}*/
    /*.ul2 li{*/
    /*    position: absolute;z-index: 1;*/
    /*    top: 50px;*/
    /*    display: none;!important;*/
    /*}*/
    /*.ul2:hover +li{*/
    /*    display: block;*/
    /*}*/
    /*.ul2 ul{*/
    /*    display: none;*/
    /*}*/
    /*.li1:hover > .ul2 li{*/
    /*    display: block;*/
    /*}*/
    /*.li1 ul{*/
    /*    position: absolute;*/

    /*}*/
</style>
<body>