<?php
namespace WEBSITE;

class Error {

    public $errorCode = '';
    private $codes = array(
               400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
               403 => array('403 Forbidden', 'The server has refused to fulfil your request.'),
               404 => array('404 Not Found', 'The page you requested was not found on this server.'),
               405 => array('405 Method Not Allowed', 'The method specified in the request is not allowed for the specified resource.'),
               408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
               500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
               502 => array('502 Bad Gateway', 'The server received an invalid response while trying to carry out the request.'),
               504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
    );

    function __construct() {

    }

    public function report( $type=null ){
        if ( isset( $type ) ){
            $this->errorCode = $type;
            $this->header();
        }else{
            $this->blanket();
        }
    }

    private function header( ){
        header('HTTP/1.0 ' . $this->codes[$this->errorCode][0]);
        $this->blanket();
    }

    private function blanket( ){
        $status = $this->errorCode;

        if ( !$this->errorCode ){
            $status = $_SERVER['REDIRECT_STATUS'];
        }

        $title = $this->codes[$status][0];
        $message = $this->codes[$status][1];
        if ($title == false || strlen($status) != 3) {
            $message = 'Please supply a valid HTTP status code.';
        }

        echo '<h1>Bummer! '.$title.' detected</h1><p>'.$message.'</p>';
    }

}
?>