<?php 
$h_today = null; // str
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Today's date</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="grid place-items-center w-screen h-screen">
    <div>
      <p class="sans-serif font-bold text-2xl">
        <?php
        try {
          $h_today = date("H");
          if ($h_today > 18) {
            echo "Buonasera,";
          } else if($h_today>12){
            echo "Buon pomeriggio,";
          } else {
            echo "Buongiorno,";
          }
        } catch (\Throwable $th) {
          echo "Ciao,";
        }
        ?>
      </p>
      <p class="sans-serif">
        Oggi è il <?php echo date("Y-m-d H:i:s"); ?>
      </p>
    </div>
  </div>
</body>

</html>