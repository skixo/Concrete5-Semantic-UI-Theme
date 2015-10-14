<?php

defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();

?>

<header class="ui stackable grid container">
    <div class="four wide column">
        <?php
        $a = new GlobalArea('Header Site Title');
        $a->display();
        ?>
    </div>
    <div class="<?php if ($displayThirdColumn) { ?>eight wide<?php } else { ?>four wide<?php } ?> column">
        <?php
        $a = new GlobalArea('Header Navigation');
        $a->display();
        ?>
    </div>
    <?php if ($displayThirdColumn) { ?>
        <div class="four wide column"><?php $as->display(); ?></div>
    <?php } ?>
</header>