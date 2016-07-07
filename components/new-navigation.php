<div class="header">
  <div class="top-stripe">
    <div class="title pointer">
      <a href="index.php">
        4W-RENTAL
      </a>
    </div>
    <div class="">
      <?php
        $filepath = dirname(__FILE__);
        if (isset($_SESSION['user'])) {
          if ($_SESSION['type'] == 'user') {
            include($filepath . '/bar-logged.php');
          } else  if ($_SESSION['type'] == 'admin'){
            include($filepath . '/navigation-admin.php');
          }
        } else {
          include($filepath . '/bar-unlogged.php');
        }
      ?>
    </div>
  </div>
</div>
