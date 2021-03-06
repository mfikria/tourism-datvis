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


    <link rel="stylesheet" type="text/css" href="/assets/plugins/fullpagejs/jquery.fullpage.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600" rel="stylesheet">

    <link href="/assets/css/statistics.css" rel="stylesheet" type="text/css" />
    <!-- Map Section -->
    <link href="/assets/css/map.css" rel="stylesheet" type="text/css" />

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="/assets/plugins/fullpagejs/jquery.fullpage.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['transparent', '#999999', '#003337', '#999999'],
                anchors: ['intro', 'timeline', 'statistics', 'final'],
                menu: '#menu',
                autoScrolling: true,
                fitToSection: false,
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

    <!-- Map -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
    <script src="/assets/js/mapael/jquery.mapael.js" charset="utf-8"></script>
    <script src="https://rawgit.com/aterrien/jQuery-Knob/master/dist/jquery.knob.min.js" charset="utf-8"></script>

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
            <source src="/assets/video/intro.webm" type="video/webm">
            <source src="/assets/video/intro.3gp" type="video/3gp"></video><!-- /video -->
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
    <div class="slide" id="slide-1" data-anchor="slide1">
      <div class="container">
        <p id="stat-title"> World War II Power </p>
        <br>
        <div class="col-md-4" id="piepower">
          <div id="pieChart"></div>
        </div>
        <div class="col-md-4">
          <div id="barChart"></div>
        </div>
        <div class="col-md-4 white">
          <p style="font-size: 1.2em; text-align: left; padding-left: 120px; padding-top: 30px;">In World War II the chief Allied powers were Great Britain, France (except during the German occupation, 1940–44), the Soviet Union (after its entry in June 1941), the United States (after its entry on December 8, 1941), and China.
            Whilst the Axis Power, also known as the Rome-Berlin-Tokyo Axis, were the nations that fought in WWII against the Allied Powers.
          </p>
        </div>
      </div>
    </div>
    <div class="slide" id="slide-2" data-anchor="slide2">
      <style>
        svg {
          font: 10px sans-serif;
        }
      </style>
      <div class="container">
        <div class="col-md-3 white" id="war-power">
          <p> World War II was the deadliest military conflict in history in absolute terms of total casualties. Over 60 million people were killed, which was about 3% of the 1940 world population (est. 2.3 billion). </p>
        </div>
        <div class="col-md-9">
          <p id="stat-title"> Total Casualties of World War II per Country </p>
          <svg width="640" height="480"></svg>
          <form>
            <label class="label-treemap"><input type="radio" name="mode" value="sumBySize" checked> Total Death</label>
            <label class="label-treemap"><input type="radio" name="mode" value="sumByCount"> Death Percentage</label>
          </form>
        </div>
      </div>
    </div>
    <div class="slide" id="slide-3" data-anchor="slide3">
      <div class="container">
        <p id="stat-title"> Casualties Detail per Country </p>
        <div class="world">
          <div class="rightPanel">
              <h2 class="white">Select Casualties Detail</h2>
              <div class="knobContainer">
                  <!-- <input class="knob white" data-width="80" data-height="80" data-min="Military Deaths" data-max="Civilian Deaths" data-cursor=true
                         data-fgColor="#858585" data-thickness=.45 value="Military Deaths" data-bgColor="#c7e8ff"/> -->
                <form>
                  <label class="white"><input type="radio" name="casualties-detail" value="Military Deaths" checked>Military Deaths</label>
                  <label class="white"><input type="radio" name="casualties-detail" value="Civilian Deaths">Civilian Deaths</label>
                  <label class="white"><input type="radio" name="casualties-detail" value="Famine and Disease">Famine and Disease</label>
                </form>
              </div>
              <div class="areaLegend"></div>
          </div>
          <div class="map"></div>
          <div style="clear: both;"></div>
        </div>
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

<!-- Map Section -->
<script src="/assets/js/mapael/maps/world_countries.js" charset="utf-8"></script>
<script src="/assets/js/map.js" charset="utf-8"></script>

<script type="text/javascript" src="/assets/js/treemap.js"></script>
<script type="text/javascript" src="/assets/js/simple-dashboard.js"></script>

</body>
</html>
