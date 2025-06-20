<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\MainController;

$main = new MainController();
$result = $main->verifyTLS();

?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <div class="container mx-auto mt-14 text-sky-900">
      <?php echo $result ?>
    </div>
  </body>
</html>

