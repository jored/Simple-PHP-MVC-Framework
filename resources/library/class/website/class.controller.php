<?php

/**
* Code for the render/Controller class
*
* @category Render
* @package  Controller
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

namespace WEBSITE;

/**
* Controller Class
*
* @category Render
* @package  Controller
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

class Controller
{
    public $template = '';
    public $method = '';

    /**
     * Contruct Function
     */
    public function __construct( )
    {
        global $config;

        // Get Controller
        if ( empty($_GET['page']) ) {
            $this->template = $config['site']['landing_page'];
        } else {
            $this->template = $_GET['page'];
        }

        // Get Method
        if ( empty($_GET['method']) ) {
            $this->method = $this->template;
        } else {
            $this->method = $_GET['method'];
        }

    }

    /**
     * Load Page/Controller
     *
     * @param [String] $override Name of a controller
     */
    public function load( $override=null )
    {
        global $error;

        if ( isset($override) ) {
            $this->template = $override;
        }

        $className = "controller\\".$this->template;
        $method = $this->method;

        $myInstance = new $className;

        if ( method_exists($myInstance, $method) ) {
            return $myInstance->$method( );
        } else {
            $error->report('404');
        }

    }

}
