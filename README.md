Simple PHP MVC Framework 
========================
This is my basic template that I use when starting a PHP project and am not wanting to use a popular MVC framework like CodeIgnitor.

This is a work in progress and will get expanded on overtime.

# Basic Features
will be updated soon
# Model
will be updated soon
# Views
The views are used store/build the final HTML that your visitor sees.  Views can be called from within controllers or views them selves.  If you view needs variables then you need to pass them into the view when its being created as an array.  You can pass as many variables as you need.

There are two ways that you can load a view.  Directly `loadView` or through a template `render` (a collection of other views that are appended or prepended to your main view). 

## Load a view directly using `loadView`

To load a view directly you can use `$template->loadView( $view, $variables );`

### `$template->loadView( $view, $variables )` Arguments

#### $view
Type: `String`
Default value: ``

A string type variable of the name of the view you want to load.  For example to load '/views/home.php' then you would pass 'home'

#### $variables
Type: `Array`
Default value: `array()`

An array type type variable containing all the variables you want available within your view.

### `$template->loadView( args )` Example 

The following PHP will load and pass the variable page_title to the `home` view. This view would be located at `/views/home.php`.

        <?php
        // Create an array of the variables that 
        // will be passed for use within the view
        $variables = array(
            'page_title' => "Welcome to my PHP site."
        );

        // Call the view
        $template-> loadView("home", $variables);
        ?>

The following view stored at `/views/home.php` will output the variable page_title

        <!-- home content -->
        <h2><?php echo $title ?></h2>
        You can have any content here
        

## Load the view with a template using `render`

You can load a view into a template, that will prepend or append other more common views, like a header, footer or side menu create a view using `$template->render( $view_name, $variables, $template )`.

### `$template->render( $view, $variables, $template )` Arguments

#### $view
Type: `String`
Default value: ``

A string type variable of the name of the view you want to load.  For example to load '/views/home.php' then you would pass 'home'

#### $variables
Type: `Array`
Default value: `array()`

An array type type variable containing all the variables you want available within your view.

#### $template
Type: `String`
Default value: `default`

The template that should be used with this view. If non is supplied then it will load the default template setup within your `config.php` file.

### `$template->render( args )` Example 

The following PHP will load and pass the variable page_title to the `home` view. This view would be located at `/views/home.php`.

        <?php
        // Create an array of the variables that 
        // will be passed for use within the view
        $variables = array(
            'page_title' => "Welcome to my PHP site."
        );

        // Call the view
        $template->render("home", $variables);
        ?>
The following view stored at `/views/home.php` will output the variable page_title

        <!-- header content -->
        <div>This is your header</div>

        <!-- home content -->
        <h2><?php echo $title ?></h2>
        You can have any content here

        <!-- footer content -->
        <div>This is your footer</div>
        
# Controller
The controllers are where you join together the models and views for the page that is being visited.

The framework employs a pretty simple url rewrite formula.  The following url `/company/about` is intreated as `?page=company&method=about`

This would load up the controller class called `company` located within your controller folder, for example `controller/company.php`.

It would then run the method `about`.  If no method is available then a `404 error` will be shown.

### Controller Example

namespace controller;

class Company extends Base_Controller
{

    /**
     * Main Company Page
     * http://domain.com/company
     */
    public function company( )
    {
        // Code for page content and view for go here
    }

    /**
     * About Page
     * http://domain.com/company/about
     */
    public function about( )
    {
        // Code for page content and view for go here
    }

}

# Themes
will be updated soon

# Templates
Templates are basically bundles of views. You choose what views to append and prepend within a template.  The templates are stored within the `config.php` file.

$config["templates"] = array(
    "default" => array(
        "prepend" => "header",
        "append" => "footer"
    ),
    "dashboard" => array(
        "prepend" => "header",
        "append" => "footer"
    )
);

### Email Helper
will be updated soon

### Database Helper
will be updated soon

### Crud Helper
will be updated soon

### Error Helper
will be updated soon

### Logging Helper
will be updated soon

## Structure
will be updated soon
