<?php

    require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

    // Load Global Classes
    $site = new WEBSITE\Site;
    $error = new WEBSITE\Error;
    $template = new render\Template;
    $controller = new render\Controller;

    $controller->load();

?>