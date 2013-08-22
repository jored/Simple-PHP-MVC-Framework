<?php
    session_start();

    $page = ( object )array(
    );

    require_once realpath(dirname(__FILE__) . "/../resources/config.php") ;

    // Load Global Classes
    $site = new WEBSITE\Site;
    $error = new WEBSITE\Error;
    $template = new WEBSITE\Template;
    $controller = new WEBSITE\Controller;


    $page->site = "Page SIte";
    echo $page->site;
    $controller->load();

?>