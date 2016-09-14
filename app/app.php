<?php
  require_once __DIR__ ."/../vendor/autoload.php";
  require_once __DIR__ ."/../src/RockPaperScissors.php";

  session_start();
  if (empty($_SESSION["rock_paper_scissors"])){
    $_SESSION["rock_paper_scissors"] = array();
  }

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'

    ));

  $app->get("/", function() use ($app) {
      return $app["twig"]->render("rps.html.twig");
  });

  $app->get("/result", function () use ($app){
      $new_RockPaperScissors = new RockPaperScissors;
      $winner = $new_RockPaperScissors->playGame($_GET['player1'], $_GET['player2']);


      return $app["twig"]->render("result.html.twig", array('result' => $winner));

  });


  return $app;


?>
