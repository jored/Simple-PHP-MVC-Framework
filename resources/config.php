<?php

/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/

$config = array(
    "site" => array(
        "id" => "HOST",
        "name" => "Hosting Control Panel",
        "domain" => "Hosting Control Panel",
        "mode" => "dev",
        "version" => "0.1",
        "landing_page" => "home"
    ),
    "db" => array(
        "dev" => array(
            "dbname" => "database1",
            "username" => "dbUser",
            "password" => "pa$$",
            "host" => "localhost"
        ),
        "live" => array(
            "dbname" => "database2",
            "username" => "dbUser",
            "password" => "pa$$",
            "host" => "localhost"
        )
    )
);

/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

defined("VIEW_PATH")
    or define("VIEW_PATH", realpath(dirname(__FILE__) . '/library/view'));

defined("MODEL_PATH")
    or define("MODEL_PATH", realpath(dirname(__FILE__) . '/library/model'));

defined("CLASS_PATH")
    or define("CLASS_PATH", realpath(dirname(__FILE__) . '/library/class'));

defined("CONTROLLER_PATH")
    or define("CONTROLLER_PATH", realpath(dirname(__FILE__) . '/library/controller'));

defined("ERROR_PATH")
    or define("ERROR_PATH", realpath(dirname(__FILE__) . '/library/view/error'));

/*
    Auto Load Class
*/
spl_autoload_register(function($class){

    $namespace = strpos($class, '\\');
    if ($namespace) {
        $path = explode("\\", $class);
        if ( $path[0] === 'controller') {
            $result = @include( CONTROLLER_PATH . '/' . $path[1] . '.php');
        } else {
            $result = @include( CLASS_PATH . '/' . $path[0] . '/' . $path[1] . '.php');
        }
    } else {
        $result = @include( CLASS_PATH . '/' . $class . '.php');
    }
    if ($result === false) {
        die("Unable to find the class file: $class ");
    }

});

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
