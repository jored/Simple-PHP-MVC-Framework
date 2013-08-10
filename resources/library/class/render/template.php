<?php
namespace RENDER;

class Template {

    private function loadView( $filename ){
        $result = @include( $filename );
        if ($result === false) {
            echo "View not available: $filename";
        }
    }

    function render( $contentFile, $variables = array() )
    {
        $contentFileFullPath = VIEW_PATH . "/" . $contentFile . '.php';

        // making sure passed in variables are in scope of the template
        // each key in the $variables array will become a variable
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        $this->loadView( VIEW_PATH . "/header.php" );

        echo "<div id=\"container\">\n"
           . "\t<div id=\"content\">\n";

        if (file_exists($contentFileFullPath)) {
            $this->loadView( $contentFileFullPath );
        } else {
            /*
                If the file isn't found the error can be handled in lots of ways.
                In this case we will just include an error template.
            */
            $this->loadView( VIEW_PATH . "/error.php" );
        }

        // close content div
        echo "\t</div>\n";

        $this->loadView( VIEW_PATH . "/rightPanel.php" ) ;

        // close container div
        echo "</div>\n";

        $this->loadView( VIEW_PATH . "/footer.php" );
    }

}
?>