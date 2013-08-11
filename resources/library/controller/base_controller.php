<?php

/**
* Home Controller Class
*
* @category Controller
* @package  Home_Controller
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

namespace controller;

/**
* Home Controller Class
*
* @category Controller
* @package  Home_Controller
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

class Base_Controller
{

    public $page = '';

    /**
     * Construct Function
     */
    public function __construct( )
    {
        $this->page = $_SERVER['REQUEST_URI'];
    }

}
