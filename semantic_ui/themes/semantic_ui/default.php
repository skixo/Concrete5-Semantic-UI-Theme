<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
    <section class="ui page header">
        <?php
        $a = new Area('Page Header');
        $a->enableGridContainer();
        $a->display($c);
        ?>
    </section>

    <section class="ui page content container">
        <?php
        $a = new Area('Main');
        $a->enableGridContainer();
        $a->display($c);
        ?>
    </section>

    <section class="ui page footer container">
        <?php
        $a = new Area('Page Footer');
        $a->enableGridContainer();
        $a->display($c);
        ?>
    </section>
</main>

<?php  $this->inc('elements/footer.php'); ?>
