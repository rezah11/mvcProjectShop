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
    <link rel="stylesheet" href="public/css/toastr.min.css">
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
    textarea.form-control{
        height: 200px;!important;
        resize: none;
    }
    .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{
        margin-left: unset;
    }
</style>
<body>
<?php require 'view/Admin/menu.php';
//if (!empty($data['comments'])){
//    $meta=$data['meta'];}else{
//    Model::backUrl('Admin/index');
//}
//$comment=$data['comments'];
//print_r($data['comments']);
//var_dump($comment[0][0]);
?>
<section class="container" style="direction: rtl;">
    <table class="table table-striped">
        <thead style="">
        <tr style="">
            <th class="text-center">نام کاربر</th>
            <th class="text-center">پست</th>
            <th class="text-center">کامنت</th>
            <th class="text-center">وضعیت</th>
            <th class="text-center">عملیات</th>
        </tr>
        </thead>
        <tbody id="contentLoad">


        </tbody>
    </table>
</section>

</body>
<script src="public/javaScript/jquery-3.3.1.js" type="text/javascript"></script>
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>-->
<script src="public/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<script src="public/javaScript/toastr.min.js" type="text/javascript"></script>
<script>
    //$('#contentLoad').load(" //echo URL.'view/Admin/comment/Ajax/showComment.php';//");
    $(document).on('click','#confirm',function (e){
        e.preventDefault();
        var url='<?php echo URL;?>'+$(this).attr('href');
        var data={'oparation':'confirm'}
        // alert(url);
        $.post(url,data,function (msg){
            if(msg==1){
                toastr.success('این کامنت تایید شد');
                // toastr.success('شما عضو شدید');

            }else if(msg==0){
                toastr.error('عملیات ناموفق بود');
            }
            $('#contentLoad').load("<?php echo URL.'view/Admin/comment/Ajax/showComment.php';?>");
        })
    });
    $(document).on('click','#reject',function (e){
        e.preventDefault();
        var url='<?php echo URL;?>'+$(this).attr('href');
        var data={'oparation':'reject'}
        // alert(url);
        $.post(url,data,function (msg){
            if(msg==1){
                toastr.success('این کامنت رد شد');
            }else if(msg==0){
                toastr.error('عملیات ناموفق بود');
            }
            $('#contentLoad').load("<?php echo URL.'view/Admin/comment/Ajax/showComment.php';?>");
        })
    });
    $(document).ready(function (){
        $('#contentLoad').load("<?php echo URL.'view/Admin/comment/Ajax/showComment.php';?>");

    });
</script>
</html>