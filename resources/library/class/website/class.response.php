<?php

/**
* Code for the website/Resonse class
*
* @category Render
* @package  Response
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

namespace WEBSITE;

/**
* Response Class
*
* @category Render
* @package  Response
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

class Response
{
    public $form_submission = false;
    public $method = '';

    /**
     * Contruct Function
     */
    public function __construct( )
    {
        global $page;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->form_submission = true;
        }else{
            $this->form_submission = false;
        }

        $page->form_submission = $this->form_submission;

    }

    /**
     * Return a form value
     *
     * @param [String] $override Name of a controller
     */
    public function get( $value )
    {
        $post = $_POST[ $value ];
        return $post;
    }


}
