<?php
/**
 * Maintenance mode template that's shown to logged out users.
 *
 * @package   ng-maintenance-mode
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo plugins_url('default/assets/css/style.css', dirname(__FILE__)); ?>">

        <title>Maintenance & Development Mode | <?php echo esc_html(get_bloginfo('name')); ?></title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
            <header>
                <img src="<?php echo plugins_url('default/assets/img/wpza_small.jpeg', dirname(__FILE__)); ?>" width="150" height="150" alt="WPZA Logo"><br>
                <h1><strong><?php echo get_site_url(); ?></strong></h1>
                
                <hr>
                <h1>Hosted by <strong>WPZA</strong>.</h1>
            </header>
            
            <main>
                <p>WPZA specializes is hosting and maintaining WordPress Websites. Have a look at our specialized WordPress Maintenance Services at <br>
                    <a href="https://wpza.co.za" target="_blank"><strong>https://wpza.co.za</strong></a></p>
            </main>
                    <footer>
                        <hr>
                        <p><small>&copy; WPZA Maintenance Services</small></p>
                    </footer>
                </div></div>
        </div>

    </body>
</html>
