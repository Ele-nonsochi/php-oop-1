<?php

require_once "data/movieArray.php";
require "classes/Movie.php";

foreach ($movies as $movie) {
  $currentMovie = new Movie($movie);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <?php foreach ($movies as $movie) {
    $currentMovie = new Movie($movie); ?>
    <ul>
      <li><b><?php echo $currentMovie->movieData["title"] ?></b></li>
      <li><?php echo $currentMovie->movieData["director"] ?></li>
      <li>Year: <?php echo $currentMovie->movieData["year"] ?> </li>
      <li>Cast:
        <ul>
          <?php foreach ($currentMovie->movieData["cast"] as $actor) {
            echo "<li>" . $actor["name"] . " " . $actor["surname"] . "  </li>";
          } ?>
        </ul>
      </li>
    </ul>

  <?php } ?>

</body>

</html>