        <meta charset="utf-8"/>
        <meta name="HandheldFriendly" content="true"/>
        <meta name="MobileOptimized" content="320"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="/img/favicon.ico"/>
        <link rel="apple-touch-icon" href="/img/logo-57.png"/>
        <link rel="apple-touch-icon" href="/img/logo-72.png"/>
        <link rel="apple-touch-icon" href="/img/logo-114.png"/>
        <link rel="apple-touch-startup-image" href="/img/splash-touch.png"/>
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300" rel="stylesheet" type="text/css"/>
<?php
if(preg_match('/iUI/', $_SERVER['REQUEST_URI'])):
?>
        <script src="/iUI/iui/iui.js"></script>
<?php
endif;
?>
<?php
if(preg_match('/jqm/', $_SERVER['REQUEST_URI'])):
?>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="http://jquery-ui-map.googlecode.com/svn/trunk/ui/min/jquery.ui.map.full.min.js"></script>
<?php
endif;
?>
        <link rel="stylesheet" type="text/css" href="/jss/<?=(preg_match('/iUI/', $_SERVER['REQUEST_URI'])) ? 'style-iui.css' : (preg_match('/jqm/', $_SERVER['REQUEST_URI']) ? 'style-jqm.css' : 'style.css')?>"/>
        <script src="/jss/lib.js"></script>