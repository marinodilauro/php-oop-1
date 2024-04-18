<?php
require_once __DIR__ . './db.php';


// var_dump($productionInstance_1);

// var_dump($productionInstance_2);

// var_dump($productionInstance_3);

// var_dump($production_list);

/* $productionInstance_1->playPause();
echo '<br>';
$productionInstance_1->playPause();
echo '<br>';
$productionInstance_1->playPause();
echo '<br>';
$productionInstance_1->playPause(); */

?>

<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <!-- Bootstrap CSS link -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>

  <title>php-oop-1</title>
</head>

<body>

  <div id='app'>

    <div class="container">
      <h1>Movie list</h1>

      <div class="table-responsive">

        <table class="table table-striped table-light table-hover">

          <thead class="table-dark">
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Language</th>
              <th scope="col">Vote</th>
            </tr>
          </thead>

          <tbody>

            <?php foreach ($production_list as $movie) : ?>

              <tr>

                <td> <?php echo $movie->title; ?> </td>
                <td> <?php echo $movie->language; ?> </td>
                <td> <?php echo $movie->vote; ?>/10 </td>

              </tr>

            <?php endforeach; ?>

          </tbody>

        </table>

      </div>

    </div>
  </div>
  </div>






  <!-- VueJs link -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

  <!-- Bootstrap JS link -->
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</body>

</html>