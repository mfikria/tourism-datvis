<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WORLD WAR 2 IN DATA</title>
    <meta name="author" content="Muhamad Fikri Alhawarizmi" />
    <meta name="description" content="Statistic World War 2" />
    <meta name="keywords"  content="WW2, WORLD WAR 2" />
    <meta name="Resource-type" content="Document" />


    <link rel="stylesheet" type="text/css" href="assets/plugins/fullpagejs/jquery.fullpage.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="assets/plugins/fullpagejs/jquery.fullpage.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['transparent', '#999999', '#999999', '#999999'],
                anchors: ['intro', 'timeline', 'statistics', 'final'],
                menu: '#menu',
                navigation: true,
                navigationPosition: 'right',
                afterLoad: function(anchorLink, index){
                    var loadedSection = $(this);

                    //using index
                    if(index == 1){
                        var vid = document.getElementById("bgvid");
                        vid.play();
                    }
                }
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
        <div class="bgvid-wrapper">
            <video class="video" id="bgvid" playsinline autoplay muted loop>
                <source src="assets/video/intro.webm" type="video/webm">
                <source src="assets/video/intro.3gp" type="video/3gp"></video><!-- /video -->
            <div id="intro-desc">
                <h1>WW2</h1>
                <p>
                    The Second World War was arguably the most significant period of the 20th century. It brought about major leaps in technology and laid the groundwork that permitted post-war social changes including the end of European colonialism, the civil rights movement in the United States, and the modern women’s rights movement, as well as the programs for exploring outer space. The primary combatants were the Axis nations (Nazi Germany, Facist Italy, Imperial Japan and their smaller allies) and the Allied nations, led by Britain (and its Commonwealth nations), the Union of Soviet Socialist Republics and the United States of America. The Allies were the victors. Two superpowers, the USA and USSR, emerged from World War II to begin a Cold War with each other that would define much of the rest of the century.
                </p>
            </div>
        </div>

    </div>
    <div class="section active" id="timeline-wrapper">
        <iframe src="http://timemapper.okfnlabs.org/muhamadfikria2/world-war-2-data?embed=1" frameborder="0" style="border: none;" width="100%" height="100%"></iframe>
        <a href="#statistics" class="next-button"><i class="fa fa-2x fa-chevron-down" aria-hidden="true"></i>  Go to Statistics</a>
    </div>
    <div class="section" id="statistics-wrapper">
      <style>
        svg {
          font: 10px sans-serif;
          margin-top: 60px;
        }
      </style>
      <div class="container">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
          <svg width="640" height="480"></svg>
          <form>
            <label><input type="radio" name="mode" value="sumBySize" checked> Total Death</label>
            <label><input type="radio" name="mode" value="sumByCount"> Death Percentage</label>
          </form>
        </div>
      </div>
    </div>
    <div class="section" id="final-wrapper">
        <p class="quote">
            War does not <br>determine who is
        </p>
        <h1>
            RIGHT
        </h1>
        <p class="quote">
            only who is <span style="color: red"> left</span>.
        </p>
        <p class="quote-author">
            ─ Bertrand Russell
        </p>
    </div>
</div>
<script type="text/javascript" src="assets/js/treemap.js"></script>

</body>
</html>
