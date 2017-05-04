<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Continuous scrolling - fullPage.js</title>
    <meta name="author" content="Matthew Howell" />
    <meta name="description" content="fullPage continuous scrolling demo." />
    <meta name="keywords"  content="fullpage,jquery,demo,scroll,loop,continuous" />
    <meta name="Resource-type" content="Document" />


    <link rel="stylesheet" type="text/css" href="/assets/plugins/fullpagejs/jquery.fullpage.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="/assets/plugins/fullpagejs/jquery.fullpage.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#999999', '#999999', '#999999', '#999999'],
                anchors: ['intro', 'timeline', 'statistics', 'final'],
                menu: '#menu',
                navigation: true,
                navigationPosition: 'right',
            });
        });
    </script>

</head>
<body>

<ul id="menu">
    <li data-menuanchor="firstPage" class="active"><a href="#intro">INTRO</a></li>
    <li data-menuanchor="secondPage"><a href="#timeline">TIMELINE</a></li>
    <li data-menuanchor="3rdPage"><a href="#statistics">STATISTICS</a></li>
    <li data-menuanchor="3rdPage"><a href="#final">FINAL</a></li>
</ul>


<div id="fullpage">
    <div class="section " id="intro-wrapper">
        <h1>Visdat</h1>
        <p>project</p>
    </div>
    <div class="section active" id="timeline-wrapper">
        <iframe src="http://timemapper.okfnlabs.org/muhamadfikria2/world-war-2-data?embed=1" frameborder="0" style="border: none;" width="100%" height="100%"></iframe>
        <a href="#statistics" class="next-button"><i class="fa fa-2x fa-chevron-down" aria-hidden="true"></i>  Go to Statistics</a>
    </div>
    <div class="section" id="statistics-wrapper">

    </div>
    <div class="section" id="final-wrapper">

    </div>
</div>

</body>
</html>
