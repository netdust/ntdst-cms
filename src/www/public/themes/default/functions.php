<?php

use \helpers\Page;
use \helpers\Location;

function script_tag( ) {
ob_start(); ?>
<script type="text/javascript">
        $(document).ready(function() {
            $("nav").navigation();
        });
    </script>
    <?php return ob_get_clean();
}

function include_scripts( ) {

    global $app;

    if( $app->getMode() != 'production' ) {
ob_start(); ?>
    <script type="text/javascript" src="<?php echo Location::js('vendor/jquery.js'); ?>" ></script>
    <script type="text/javascript" src="../bower_components/formstone/src/js/core.js" ></script>
    <script type="text/javascript" src="../bower_components/formstone/src/js/mediaQuery.js" ></script>
    <script type="text/javascript" src="../bower_components/formstone/src/js/swap.js" ></script>
    <script type="text/javascript" src="../bower_components/formstone/src/js/navigation.js" ></script>
    <?php return ob_get_clean();
    }
    else {
ob_start(); ?>
    <script type="text/javascript" src="<?php echo Location::js('build.min.js'); ?>" ></script>
    <?php return ob_get_clean();
    }

}

function include_style( ) {
    global $app;

    if( $app->getMode() != 'production' ) {
ob_start(); ?>
<!-- stylesheets, development mode -->
    <link rel="stylesheet" href="../bower_components/basscss/src/basscss.css">
    <link rel="stylesheet" href="../bower_components/formstone/dist/css/navigation.css">
    <?php return ob_get_clean();
    }
    else {
ob_start(); ?>
<!-- stylesheet, minified build -->
    <link rel="stylesheet" href="<?php echo Location::css('style.min.js'); ?>" >
    <?php return ob_get_clean();
    }
}

$app->hook('header', function() {
    echo include_style();
});

$app->hook('script', function() use ( $app ) {
    echo include_scripts( );
    echo script_tag();
});

