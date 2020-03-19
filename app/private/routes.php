<?php

require_once('./private/core/Router.php');

Router::add('index.php', function() {
    require_once('./private/controllers/User.php');
    new User;
});

Router::add('user', function() {
    require_once('./private/controllers/User.php');
    new User;
});

Router::add('about', function() {
    require_once('./private/controllers/Home.php');
    new User;
});

Router::addFallback(function() {
    require_once('./private/controllers/NotFound.php');
    new NotFound;
});
