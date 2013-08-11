<?php

/**
* Code for the website/Site class
*
* @category Website
* @package  Site
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

namespace website;

/**
* Site Class
*
* @category Website
* @package  Site
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

class Site {

    private $data = array();

    function __construct() {
        global $config;
        $this->data = $config['site'];
    }

    public function __set($variable, $value){
        $this->data[$variable] = $value;
    }

    public function __get($variable){
        if(isset($this->data[$variable])){
            return $this->data[$variable];
        }else{
            die('Unknown variable.');
        }
    }

}
?>