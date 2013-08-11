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

        $setInIndexDotPhp = "Hey! I was set in the index.php file.";

        // Must pass in variables (as an array) to use in template
        $variables = array(
            'setInIndexDotPhp' => $setInIndexDotPhp
        );

        $template->render("home", $variables);

    }

    /**
     * About Page
     */
    public function about( )
    {
        echo "about".$this->page;
    }

}
