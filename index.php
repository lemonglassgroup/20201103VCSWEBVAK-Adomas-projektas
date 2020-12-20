<?php
require __DIR__ . '/src/app.php';
?>


<!DOCTYPE html>
<html lang="lt">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Teatro terminų žodynas</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/normalize.css" />
  <link rel="stylesheet" href="styles/main.css" />
  <script src="https://kit.fontawesome.com/e1084618a2.js" crossorigin="anonymous" defer></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
  <script src="scripts/search.js" defer></script>
  <script src="scripts/accordion.js" defer></script>
  <script src="scripts/totop.js" defer></script>
</head>

<body>
  <?php
  include('views/content.php');
  ?>
</body>

</html>