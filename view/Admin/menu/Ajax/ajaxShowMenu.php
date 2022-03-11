<ul>

<?php
menu();
function menu($parentsId=0){
    $username='root';
    $server='localhost';
    $password='';
    $dbName='shop';
    $sql=new PDO('mysql:host='.$server.';dbname='.$dbName,$username,$password);
    $sql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql->exec('set names utf8');
    $query=$sql->prepare('SELECT * FROM `menu` WHERE `parentId`=?');
    $query->bindValue(1,$parentsId);
    $query->execute();
    $result=$query->fetchAll();
    foreach ($result as $value):
        $id=$value['id'];
        $query=$sql->prepare('SELECT * FROM `menu` WHERE `id`=?');
        $query->bindValue(1,$id);
        $query->execute();
        $count=$query->rowCount();
?>
    <li><?php echo $value['title']?></li>
    <?php if($count>0):?>
    <ul>
        <?php menu($value['id'])?>
    </ul>
    <?php endif;?>
    <?php endforeach;?>
<?php }?>
</ul>