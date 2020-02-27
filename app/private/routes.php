<?php

require_once('./private/core/Router.php');

Router::add('index.php', function() {
    require_once('./private/controllers/Home.php');
    new Home;
});

Router::add('home', function() {
    require_once('./private/controllers/Home.php');
    new Home;
});

Router::add('about', function() {
    require_once('./private/controllers/Home.php');
    new Home;
});

Router::addFallback(function() {
    require_once('./private/controllers/NotFound.php');
    new NotFound;
});
