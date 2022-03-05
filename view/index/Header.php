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
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="public/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="public/css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
</head>
<style>
    @font-face {
        font-family: 'Vazir';
        src: url('public/fonts/Vazir-Medium-FD.woff') format('woff');
        font-weight: normal;
    }
</style>
<body>