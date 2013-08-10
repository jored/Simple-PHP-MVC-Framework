<?php
namespace RENDER;

class Controller {

    public $template = '';

    function __construct( ){

        global $config;
        if ( empty($_GET['page']) ){
            $this->template = $config['site']['landing_page'];
        }else{
            $this->template = $_GET['page'];
        }

    }

    public function load( $override=null ) {

        global $error;
        if ( isset($override) ){
            $this->template = $override;
        }

        $result = @include( CONTROLLER_PATH . '/' . $this->template . '.php');
        if ($result === false) {
            $error->report( '404' );
        }

    }

}
?>