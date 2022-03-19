<?php
$menu = new Model();
$result = $menu->getMenu();
?>
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
