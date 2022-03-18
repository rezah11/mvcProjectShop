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

    textarea.form-control {
        height: 200px;
    !important;
        resize: none;
    }

    .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
        margin-left: unset;
    }
</style>
<body>
<?php require 'view/Admin/menu.php'; ?>
<?php
//echo $sliderEditId;
//var_dump($data['category']);
?>
<?php if (empty($data['edit'])): ?>
    <section class="container" style="direction: ltr;">
        <form action="product/insertProduct" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="summary">summary:</label>
                <input type="text" class="form-control" id="summary" name="summary" required>
            </div>
            <div class="form-group">
                <label for="price">price:</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="discription">discription:</label>
                <textarea style="max-height: 500px" class="form-control editor" id="discription" name="discription" required></textarea>
            </div>

            <div class="form-group">
                <label for="imageBig">imageBig:</label>
                <input class="form-control" id="imageBig" name="imageBig" type="file" required/>
            </div>
            <div class="form-group">
                <label for="image1">image1:</label>
                <input class="form-control" id="image1" name="image1" type="file" required/>
            </div>
            <div class="form-group">
                <label for="image2">image2:</label>
                <input class="form-control" id="image2" name="image2" type="file" required/>
            </div>
            <div class="form-group">
                <label for="image3">image3:</label>
                <input class="form-control" id="image" name="image3" type="file" required/>
            </div>
            <div class="form-group">
                <label for="image4">image:</label>
                <input class="form-control" id="image4" name="image4" type="file" required/>
            </div>
            <select name="categoryId" class="form-control">
                <?php $category=$data['category'];?>
<!--                --><?php //foreach ($category as $value):?>
                <option value="<?php echo $category['id']?>"><?php echo $category['title']?></option>
<!--                --><?php //endforeach;?>
            </select>
            <br>
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
    </section>
<?php elseif ($data['edit'] == 'edit'): ?>
    <?php
    $productEdit = $data['product'];
    $productEditId = $data['id'];
//    var_dump($data['categories']);
    ?>
    <section class="container" style="direction: ltr;">
        <form action="product/updateProduct" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" name="title" required value="<?php echo $productEdit['title'];?>">
            </div>
            <div class="form-group">
                <label for="summary">summary:</label>
                <input type="text" class="form-control" id="summary" name="summary" required value="<?php echo $productEdit['summary'];?>">
            </div>
            <div class="form-group">
                <label for="price">price:</label>
                <input type="text" class="form-control" id="price" name="price" required value="<?php echo $productEdit['price'];?>">
            </div>
            <div class="form-group">
                <label for="discription">discription:</label>
                <textarea style="max-height: 500px" class="form-control editor" id="discription" name="discription" required><?php echo $productEdit['discription'];?></textarea>
            </div>

            <div class="form-group">
                <label for="imageBig">imageBig:</label>
                <input class="form-control" id="imageBig" name="imageBig" type="file" />
            </div>
            <div class="form-group">
                <label for="image1">image1:</label>
                <input class="form-control" id="image1" name="image1" type="file" />
            </div>
            <div class="form-group">
                <label for="image2">image2:</label>
                <input class="form-control" id="image2" name="image2" type="file" />
            </div>
            <div class="form-group">
                <label for="image3">image3:</label>
                <input class="form-control" id="image" name="image3" type="file" />
            </div>
            <div class="form-group">
                <label for="image4">image:</label>
                <input class="form-control" id="image4" name="image4" type="file" />
            </div>
            <select name="categoryId" class="form-control">
                <?php $category=$data['category'];
                      $categories=$data['categories'];
                ?>
                                <?php foreach ($categories as $value):?>
                <option value="<?php echo $value['id']?>" <?php if($value['id']==$category['id']){echo 'selected';}?>><?php echo $value['title']?></option>
                                <?php endforeach;?>
            </select>
            <br>
            <input type="hidden" value="<?php echo $productEdit['id']?>" name="id">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
    </section>

<?php endif; ?>
</body>
<script src="public/javaScript/jquery-3.6.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="public/ckeditor/ckeditor.js"></script>
<script src="public/ckeditor/adapters/jquery.js"></script>
<script>
    // $( 'textarea.editor' ).ckeditor();
    $( 'textarea.editor' ).ckeditor();
</script>
</html>