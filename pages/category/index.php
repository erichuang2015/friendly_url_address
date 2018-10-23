<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php include $_SERVER['DOCUMENT_ROOT'] . '/server/configuration/index.inc.php'; echo $website_address; ?>/pages/category/css/index.css">
    <title>Category <?php include 'php/title/index.inc.php'; ?></title>
  </head>
  <body id="body">
    <header id="body-header">
      <main id="body-header-main">
        <h1>Category <?php include 'php/category/index.inc.php'; ?></h1>
        <p>you slected specific category of images</p>
      </main>
      <nav id="body-header-nav">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu/index.inc.php'; ?>
      </nav>
    </header>
  </body>
</html>