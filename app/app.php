<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Allergies.php";

    session_start();
    if (empty($_SESSION['collection'])) {
        $_SESSION['collection'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

  //loads actual twig file
    $app->get("/", function() use ($app) {

      return $app['twig']->render("home.html.twig");
    });
    $app->post("/results", function() use ($app) {
        $newAllergies = new Allergies;
        $newAllergies->start($_POST['input']);
      return $app['twig']->render("results.html.twig");
    });

  //loads basic php

    return $app;
?>
