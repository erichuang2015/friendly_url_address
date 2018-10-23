<?php
  if (isset($_GET['category']) && !isset($_GET['page'])) {
    $category = $_GET['category'];

    echo '<span class="body-header-main-h1-span">' . $category . '</span>';
  } elseif (isset($_GET['category']) && isset($_GET['page'])) {
    $category = $_GET['category'];
    $page = $_GET['page'];

    echo '<span class="body-header-main-h1-span">' . $category . '</span>' . ' ' . 'Page' . ' ' . '<span class="body-header-main-h1-span">' . $page . '</span>';
  }
?>