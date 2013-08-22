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



        $form = new \PFBC\Form("login");

        $form->addElement(new \PFBC\Element\HTML('<legend>Login</legend>'));
        $form->addElement(new \PFBC\Element\Hidden("form", "login"));
        $form->addElement(new \PFBC\Element\Email("Email Address:", "Email", array(
            "required" => 1
        )));
        $form->addElement(new \PFBC\Element\Password("Password:", "Password", array(
            "required" => 1
        )));
        $form->addElement(new \PFBC\Element\Checkbox("", "Remember", array(
            "1" => "Remember me"
        )));
        $form->addElement(new \PFBC\Element\Button("Login"));
        $form->addElement(new \PFBC\Element\Button("Cancel", "button", array(
            "onclick" => "history.go(-1);"
        )));


        // Create an array of the variables that
        // will be passed for use within the view
        $variables = array(
            'page_title' => "Welcome to my PHP site.",
            'form' => $form
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
