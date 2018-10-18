<?php
  if(isset($_GET['category']) && !isset($_GET['page'])){
    $category = $_GET['category'];

    echo $category;
  }elseif(isset($_GET['category']) && isset($_GET['page'])){
    $category = $_GET['category'];
    $page = $_GET['page'];

    echo $category . ' ' . 'page' . ' ' . $page;
  }
?>