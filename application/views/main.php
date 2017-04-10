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
                sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                menu: '#menu',
                navigation: true,
                navigationPosition: 'right',
            });
        });
    </script>

</head>
<body>

<ul id="menu">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First slide</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
</ul>


<div id="fullpage">
    <div class="section " id="section0">
        <h1>Visdat</h1>
        <p>project</p>
    </div>
    <div class="section active" id="section1">
        <div class="slide" id="slide1">
            <div class="intro">
                <h1>Around the world scrolling</h1>
                <p>Go to the first section and scroll up or to the last one and scroll down to see how it works.</p>
            </div>
        </div>
        <div class="slide active" id="slide2">
            <h1>Slide 2</h1>
        </div>
        <div class="slide" id="slide3">
            <h1>Slide 3</h1>
        </div>

    </div>
    <div class="section" id="section2">
        <div class="intro">
            <h1>Slide 3</h1>
        </div>
    </div>
</div>

</body>
</html>
