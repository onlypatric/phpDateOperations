<?php
// Imposta la data di oggi
$dataOggi = new DateTime();

// Imposta la data di fine (1 giugno 2025)
$dataTarget = new DateTime('2025-06-07');

// Calcola la differenza in secondi
$diffInSeconds = $dataTarget->getTimestamp() - $dataOggi->getTimestamp();
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Countdown fino al 1 giugno 2025</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    let diffInSeconds = <?php echo $diffInSeconds; ?>;

    function updateCountdown() {
      if (diffInSeconds >= 0) {
        let mesi = Math.floor(diffInSeconds / (60 * 60 * 24 * 30.44));
        let giorni = Math.floor((diffInSeconds % (60 * 60 * 24 * 30.44)) / (60 * 60 * 24));
        let ore = Math.floor((diffInSeconds % (60 * 60 * 24)) / (60 * 60));
        let minuti = Math.floor((diffInSeconds % (60 * 60)) / 60);
        let secondi = Math.floor(diffInSeconds % 60);
        var formattedText = "";
        if (mesi !== 0) {
          formattedText += mesi + " mesi,";
        }
        if (giorni !== 0) {
          formattedText += giorni + " giorni,";
        }
        if (ore !== 0) {
          formattedText += ore + " ore,";
        }
        if (minuti !== 0) {
          formattedText += minuti + " minuti";
        }
        if (secondi !== 0) {
          formattedText += " e " + secondi + " secondi";
        }
        document.getElementById("countdown").innerHTML = formattedText;
        diffInSeconds--;
      }
    }
    setInterval(updateCountdown, 1000);
  </script>
</head>

<body>
  <div class="grid place-items-center w-screen h-screen">
    <div>
      <h1 class="sans-serif text-2xl font-bold">Countdown fino a fine scuola</h1>
      <p id="countdown" class="sans-serif"></p>
    </div>
  </div>

  <script>
    updateCountdown();
  </script>
</body>

</html>