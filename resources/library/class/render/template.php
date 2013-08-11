<?php

/**
* Code for the render/Template class
*
* @category Render
* @package  Template
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

namespace render;

/**
* Template Class
*
* @category Render
* @package  Template
* @author   Neil Barton <neil@roughcoder.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://roughcoder.com
*/

class Template
{

    /**
     * The default template being used
     * @var string
     */
    private $_defaultTemplate = '';

    /**
     * Function to load a view
     *
     * @param [String] $filename View Name
     *
     * @access private
     */
    private function _loadView( $filename, $variables )
    {

        // making sure passed in variables are in scope of the template
        // each key in the $variables array will become a variable
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        global $site;

        include VIEW_PATH . "/" . $filename . ".php" ;

    }

    /**
     * Function to set the variable $_defaultTemplate
     *
     * @param [String] $templated Template Name
     *
     * @access private
     */
    private function _setTemplate( $templated )
    {
        global $templates;

        if ($templated !== 'default') {
            if ( isset( $templates[$templated] ) ) {
                if ( is_array($templates[$templated]) ) {
                    $this->_defaultTemplate = $templated;
                }
            }
        }
        $this->_defaultTemplate = 'default';
    }

    /**
     * Function to load views from the template
     *
     * @param [String] $set Template Set
     *
     * @access private
     */
    private function _loadTemplates( $set,$variables )
    {
        global $templates;

        $loadTemplates = $templates[$this->_defaultTemplate][$set];

        $this->_loadView($loadTemplates, $variables);

    }

    /**
     * Function to render the main view and append/prepend template views.
     *
     * @param string $contentFile The Main View
     * @param array  $variables   Variables to pass to views
     * @param string $template    Template to use
     */
    public function render( $contentFile, $variables = array(), $template = 'default' )
    {

        $this->_setTemplate($template);

        $this->_loadTemplates('prepend', $variables);

        $this->_loadView($contentFile, $variables);

        $this->_loadTemplates('append', $variables);
    }

}
