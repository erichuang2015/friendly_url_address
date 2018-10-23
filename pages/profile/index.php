<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php include $_SERVER['DOCUMENT_ROOT'] . '/server/configuration/index.inc.php'; echo $website_address; ?>/pages/profile/css/index.css">
    <title>Profile <?php include 'php/title/index.inc.php'; ?></title>
  </head>
  <body id="body">
    <header id="body-header">
      <main id="body-header-main">
        <h1>Profile <?php include 'php/profile/index.inc.php'; ?></h1>
        <p>visit other people profiles to add them to friends</p>
      </main>
      <nav id="body-header-nav">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu/index.inc.php'; ?>
      </nav>
    </header>
  </body>
</html>