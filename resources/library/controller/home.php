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

class Home extends Base_Controller
{

    /**
     * Home Page
     */
    public function home( )
    {

        global $template;

        // Must pass in variables (as an array) to use in template
        $variables = array(
            'title' => "This is the home page"
        );

        $template->render("home", $variables);

    }

    /**
     * About Page
     */
    public function about( )
    {
        global $template;

        // Must pass in variables (as an array) to use in template
        $variables = array(
            'title' => "This is the about us page"
        );

        $template->render("home", $variables);
    }

}
