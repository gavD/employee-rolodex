<?php
use lithium\core\Libraries;
$path = Libraries::get(true, 'path');
?>
<?= $this->_render('element', 'header'); ?>
    <div class="content">
        <h2>Something went wrong!</h2>
        <?php echo $this->content(); ?>
    </div>
<?= $this->_render('element', 'footer'); ?>