<?php
  if (isset($_GET['profile'])) {
    $profile = $_GET['profile'];

    echo '<span class="body-header-main-h1-span">' . $profile . '</span>';
  }
?>