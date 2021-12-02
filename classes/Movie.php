<?php

class Movie
{
  public $movieData = [
    "title" => "",
    "director" => "",
    "year" => "",
    "cast" => []
  ];

  function __construct($_movieData)
  {
    $this->movieData["title"] = $_movieData["title"];
    $this->movieData["director"] = $_movieData["director"];
    $this->movieData["year"] = $_movieData["year"];
    $this->movieData["cast"] = $_movieData["cast"];
  }

  public function getMovieTitle()
  {
    return $this->movieData["title"];
  }
  public function getMovieDirector()
  {
    return $this->movieData["director"];
  }
  public function getMovieYear()
  {
    return $this->movieData["year"];
  }
  public function getMovieCast()
  {
    return $this->movieData["cast"];
  }
}