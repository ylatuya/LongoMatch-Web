<?php
$page = 'forum';
include "header.php" ?>

    <div id="content">
      <?php
        define('FORUM_ROOT', './forum/');
        include "forum/index.php" ?>
    </div>

<?php
include "footer.php" ?>
