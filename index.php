<?php
require_once __DIR__ . './db.php';

?>

<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <!-- Bootstrap CSS link -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>

  <!-- Fontawesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

  <!-- CSS link -->
  <link href='./assets/css/style.css' rel='stylesheet'>

  <title>php-oop-1</title>
</head>

<body>

  <div id='app'>

    <!-- Movies list -->
    <div class="container my-4">
      <h1 class="display-4 fw-bold">Movie list</h1>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5">
        <?php foreach ($movie_list as $key => $movie) : ?>
          <div class="col">
            <div class="card">

              <div class="card-header">
                <h4><strong> <?php echo $movie->title; ?> </strong></h4>
              </div>

              <div class="card-body d-flex flex-column justify-content-between">
                <p>
                  <strong> Description: </strong>
                  <br>
                  <?php echo $movie->genre->description; ?>
                </p>

                <p><strong> Profit: </strong> <?php echo $movie->profit; ?></p>

                <p><strong> Duration: </strong> <?php echo $movie->duration; ?> min</p>

              </div>

              <div class="card-footer">

                <p><strong> Language: </strong> <?php echo $movie->language; ?></p>


                <p class="genre m-0"><strong> Genre: </strong>

                  <?php foreach ($movie->genre->names as $key => $genre) : ?>

                    <!-- Print a comma for every genre in the array but the least -->
                    <?php if ($key != (sizeof($movie->genre->names) - 1)) : ?>
                      <span> <?php echo $genre; ?>, </span>
                    <?php else : ?>
                      <span> <?php echo $genre; ?> </span>
                    <?php endif; ?>

                  <?php endforeach; ?>

                </p>

                <div class="d-flex justify-content-between align-items-center">

                  <p class="vote m-0"><strong> Vote: </strong> <?php echo $movie->vote; ?>/10</p>

                  <button class="btn badge not_seen">Not seen</button>

                </div>

              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>

    <!-- TV Series list -->
    <div class="container my-4">
      <h1 class="display-4 fw-bold">TV Series list</h1>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5">
        <?php foreach ($tvSerie_list as $key => $tvSerie) : ?>
          <div class="col">
            <div class="card">

              <div class="card-header">
                <h4><strong> <?php echo $tvSerie->title; ?> </strong></h4>
              </div>

              <div class="card-body d-flex flex-column justify-content-between">
                <p>
                  <strong> Description: </strong>
                  <br>
                  <?php echo $tvSerie->genre->description; ?>
                </p>

                <p><strong> Number of seasons: </strong> <?php echo $tvSerie->numberOfSeasons; ?></p>

              </div>

              <div class="card-footer">

                <p><strong> Language: </strong> <?php echo $tvSerie->language; ?></p>


                <p class="genre m-0"><strong> Genre: </strong>

                  <?php foreach ($tvSerie->genre->names as $key => $genre) : ?>

                    <!-- Print a comma for every genre in the array but the least -->
                    <?php if ($key != (sizeof($tvSerie->genre->names) - 1)) : ?>
                      <span> <?php echo $genre; ?>, </span>
                    <?php else : ?>
                      <span> <?php echo $genre; ?> </span>
                    <?php endif; ?>

                  <?php endforeach; ?>

                </p>

                <div class="d-flex justify-content-between align-items-center">

                  <p class="vote m-0"><strong> Vote: </strong> <?php echo $tvSerie->vote; ?>/10</p>

                  <button class="btn badge not_seen">Not seen</button>

                </div>

              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>

  </div>






  <!-- VueJs link -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

  <!-- Bootstrap JS link -->
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</body>

</html>