<?php

require "app.php";

require "database/QueryBuilder.php";

require "database/connection.php";

require "router.php";

require "request.php";

require "controllers/PagesController.php";

require "controllers/UserController.php";

//App::bind("config", require "config.php");

//App::bind("database", new QueryBuilder(
//    Connection::make(App::get("config")["database"])
//s));

function view($name, $data = [], $data2= [])
{
    extract($data);

    return require "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /HSR/{$path}");
}

function showseason($season)
{
    return require "views/seasons/{$season}.php";
}

function showvideo($video)
{
    return require "views/media/{$video}.php";
}