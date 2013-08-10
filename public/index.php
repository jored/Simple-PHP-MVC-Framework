<?php

    require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

    // Load Global Classes
    $site = new WEBSITE\Site;
    $template = new RENDER\Template;
    $controller = new RENDER\Controller;

    $controller->load();

?>