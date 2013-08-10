<?php

    global $template;

    $setInIndexDotPhp = "Hey! I was set in the index.php file.";

    // Must pass in variables (as an array) to use in template
    $variables = array(
        'setInIndexDotPhp' => $setInIndexDotPhp
    );

    $template->render( "home", $variables);

?>