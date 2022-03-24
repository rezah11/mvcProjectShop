<?php
comment();
function comment()
{
    $username = 'root';
    $server = 'localhost';
    $password = '';
    $dbName = 'shop';
    $sql = new PDO('mysql:host=' . $server . ';dbname=' . $dbName, $username, $password);
    $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql->exec('set names utf8');
    $query = $sql->prepare('SELECT * FROM ((`comment` INNER JOIN `users` on `comment`.`userId`=`users`.`id`)INNER JOIN `product` on `comment`.`productId`=`product`.`id`)');
//        $query->bindValue(1,$parentsId);
    $query->execute();
    $comment = $query->fetchAll();
//        foreach ($result as $value):
//            $id=$value['id'];
//            $query=$sql->prepare('SELECT * FROM `menu` WHERE `id`=?');
//            $query->bindValue(1,$id);
//            $query->execute();
//            $result=$query->fetchAll();
////        var_dump($result);
//            $count=$query->rowCount();
    ?>
    <?php foreach ($comment as $key => $value): ?>
    <tr>
        <td class="text-center"><?php echo $value['name']; ?></td>
        <td class="text-center"><?php echo $value['title']; ?></td>
        <td class="text-center"><?php echo $value['description']; ?></td>
        <td class="text-center
        <?php
            if ($value['status']=='confirm'){
                echo 'text-success';
            }else if ($value['status']=='reject'){
                echo 'text-danger';
        }
        ?>
        ">
            <?php echo $value['status']; ?></td>
        <td class="text-center">
            <!--                        afahkjh-->
            <!--                        <a id="reject" href="Admin/deleteSetAdmin/-->
            <?PHP //echo $value['id']?><!--" class="btn btn-danger">رد کامنت</a>-->
            <a id="confirm" href="comment/confirmComment/<?PHP echo $value[0] ?>" class="btn btn-success <?php echo ($value['status']=='confirm') ? 'hide' : ''; ?>">تایید
                کامنت</a>
            <a id="reject" href="comment/confirmComment/<?PHP echo $value[0]; ?>" class="btn btn-danger <?php echo ($value['status']=='reject') ? 'hide' : ''; ?>">رد کامنت</a>

        </td>
    </tr>
<?php endforeach; ?>
<?php } ?>
