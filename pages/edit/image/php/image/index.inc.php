<?php
  if (isset($_GET['image'])) {
    $image = $_GET['image'];

    echo '<span class="body-header-main-h1-span">' . $image . '</span>';
  }
?>