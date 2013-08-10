<?php
namespace WEBSITE;

class Site {

    public $siteID = '';
    public $siteName = '';
    public $siteDomain = '';
    public $siteMode = '';
    public $siteVersion = '';

    function __construct() {
        global $config;
        $this->siteID = $config['site']['id'];
        $this->siteName = $config['site']['name'];
        $this->siteDomain = $config['site']['domain'];
        $this->siteMode = $config['site']['mode'];
        $this->siteMode = $config['site']['version'];
    }

}
?>