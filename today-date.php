<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Today's date</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <p class="sans-serif">
    <?php
    if (date("H") > 12) {
      echo "Buonasera,";
    } else {
      echo "Buongiorno,";
    }
    ?>
  </p>
  <p class="sans-serif">
    Oggi è il <?php echo date("Y-m-d H:i:s"); ?>
  </p>
</body>

</html>