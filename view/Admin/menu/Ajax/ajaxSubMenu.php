<?php
$username='root';
$server='localhost';
$password='';
$dbName='shop';
$sql=new PDO('mysql:host='.$server.';dbname='.$dbName,$username,$password);
$sql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql->exec('set names utf8');
$query=$sql->prepare('SELECT * FROM `menu`');
$query->execute();
$menu=$query->fetchAll();
?>
<select class="form-control" name="parentId" id="parentId">
    <option value="0">بدون دسته:</option>
    <?php foreach ($menu as $values):?>
        <option value="<?php echo $values['id']?>"><?php echo $values['title']?></option>
    <?php endforeach;?>
</select>
