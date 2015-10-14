<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>

<footer>
    <?php if ($displayFirstSection) { ?>
        <section class="ui stackable grid container">
            <div class="twelve wide column">
                <?php
                $a = new GlobalArea('Footer Site Title');
                $a->display();
                ?>
            </div>
            <div class="four wide column">
                <?php
                $a = new GlobalArea('Footer Social');
                $a->display();
                ?>
            </div>
        </section>
    <?php } ?>
    <section class="ui stackable grid container">
        <div class="eight wide column">
            <?php
            $a = new GlobalArea('Footer Legal');
            $a->display();
            ?>
        </div>
        <div class="four wide column">
            <?php
            $a = new GlobalArea('Footer Navigation');
            $a->display();
            ?>
        </div>
        <div class="four wide column">
            <?php
            $a = new GlobalArea('Footer Contact');
            $a->display();
            ?>
        </div>
    </section>
    <section class="ui stackable grid container">
        <div class="eight wide column">
            <?php echo t('Built with <a href="http://www.concrete5.org" class="concrete5">concrete5</a> CMS.')?>
        </div>
        <div class="eight wide column">
            <?php echo Core::make('helper/navigation')->getLogInOutLink()?>
        </div>
    </section>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>
