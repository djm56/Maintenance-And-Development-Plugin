<?php
/**
 * Maintenance mode template this is what non logged in users see.
 *
 * @package   ng-maintenance-mode
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<!-- WPZA Website Maintenance Services -->
<!-- https://wpza.co.za -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo plugins_url('default/assets/css/style.css', dirname(__FILE__)); ?>">
        <title>Maintenance & Development Mode | <?php echo esc_html(get_bloginfo('name')); ?></title>
        <meta name=”robots” content=”noindex,nofollow,noodp” />
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <header>
                        <h1><strong><?php echo get_site_url(); ?></strong> <small>is coming soon.</small></h1>
                        <hr> 
                    </header>
                </div>
                <div class="col-sm-6">
                    <main>
                        <h3><?php echo get_site_url(); ?> is being hosted by WPZA.</h3>                       
                        <p>WPZA specializes is hosting and maintaining WordPress Websites. Have a look at our specialized WordPress Maintenance Services at <br>
                            <a href="https://wpza.co.za" target="_blank"><strong>https://wpza.co.za</strong></a></p>   
                        <h4>WPZA keep's your WordPress site: secure, maintained, recoverable and up to date.</h4>
                        <!-- Place this tag where you want the button to render. -->
                        <a class="github-button" href="https://github.com/WPZA/Maintenance-And-Development-Plugin" data-size="large" data-show-count="true" aria-label="Star WPZA/Maintenance-And-Development-Plugin on GitHub">Star</a>
                    </main>
                </div>
                <div class="col-sm-6">
                    <img src="<?php echo plugins_url('default/assets/img/WPZA-Logo-Colour.png', dirname(__FILE__)); ?>" alt="WPZA Logo" class="wpza-logo img-responsive"><br>
                </div>
                <div class="col-sm-12">
                    <footer>
                        <hr>
                        <p><small>&copy; <?php echo date("Y"); ?> WPZA Website Maintenance Services</small></p>
                    </footer> 
                </div>
            </div>
        </div>
    </body>
</html>
<!-- WPZA Website Maintenance Services -->