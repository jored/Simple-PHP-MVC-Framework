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


        // Create an array of the variables that
        // will be passed for use within the view
        $variables = array(
            'page_title' => "Welcome to my PHP site."
        );

        // Call the view
        $template->render("home", $variables, 'default');

    }

    /**
     * About Page
     */
    public function about( )
    {
        global $template;

        // Must pass in variables (as an array) to use in template
        $variables = array(
            'page_title' => "This is the about us page"
        );

        $template->render("home", $variables, 'dashboard');
    }

}
