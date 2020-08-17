<?php

use App\Router;

/**
 * Pages
 */

Router::get("/", "MainController@mainPage");
Router::get("/notice", "MainController@noticePage");
Router::get("/main-festival", "MainController@mainFestivalPage");
Router::get("/exchange-guide", "MainController@exchangePage");
Router::get("/location.php", "MainController@locationPage");
Router::get("/festivals", "MainController@festivalsPage");
Router::get("/festivals/insert-form", "MainController@insertForm");


/**
 * ACTION
 */

 Router::get("/init/festivals", "ApiController@initFestivals");
 Router::post("/login", "MainController@login");
 Router::get("/logout", "MainController@logout");


/**
 * API
 */
 Router::get("/api/festivals", "ApiController@getFestivals");
 Router::get("/api/current-rate", "ApiController@getCurrentRate");

Router::start();