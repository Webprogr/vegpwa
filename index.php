<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap: content:">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="theme-color" content="#2196f3">
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-tap-highlight" content="no">
      <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="Content-Security-Policy" content="default-src * ;
              script-src * 'unsafe-inline' 'unsafe-eval'
              127.0.0.1:*
              http://*.google.com
              https://*.google.com
              http://*.gstatic.com
              http://*.googleapis.com
              https://*.gstatic.com
              https://*.googleapis.com
              https://googleads.g.doubleclick.net/*
              http://apps.opera.com
              https://market.android.com
              https://www.webprogr.com/*
              http://www.admob.com/*
              http://googleads.g.doubleclick.net/*
              http://www.pushwoosh.com
              https://www.pushwoosh.com
              https://www.admob.com/*
              https://www.webprogr.com/*
              https://plus.google.com/*
              https://www.facebook.com/*
              http://www.scribedoc.com/*
              ;
        img-src * data:
        ;
              style-src  * 'unsafe-inline'
              127.0.0.1:*
              http://*.google.com
              https://*.google.com
              http://*.gstatic.com
              http://*.googleapis.com
              https://*.gstatic.com
              https://*.googleapis
              http://apps.opera.com
              https://market.android.com
              http://www.webprogr.com/*
              ;
              frame-src  *
        gap://ready
              ">
  <title>My App</title>

  <link rel="stylesheet" href="css/framework7.css">
  <link rel="stylesheet" href="css/framework7.min.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/material.css">
</head>
<body>
  <div id="app">
   

    <!-- Your main view, should have "view-main" class -->
    <div class="view view-main ios-edges">
      <!-- Page, data-name contains page name which can be used in callbacks -->
      <div class="page" data-name="home">
        <div class="panel panel-left panel-cover theme-light">
      <div class="view">
        <div class="page">
          <div class="page-content">
          <div class="list links-list">
          <ul>
                <li>
                <a href="/" class="panel-close">Home
                </a>
              </li>
              <li>
                <a href="/account/" class="panel-close">My Profile
                </a>
              </li>
              <li>
                <a href="#" class="panel-close">Statements
                </a>
              </li>
              <li>
                <a href="/events/" class="panel-close">Upcoming Events
                </a>
              </li>
              <li>
                <a href="#" class="panel-close">Dining
                </a>
              </li>
              <li>
                <a href="/makeappointment/" class="panel-close">My Appointment
                </a>
              </li>
              <li>
                <a href="#" class="panel-close">Member Rooster
                </a>
              </li>
              <li>
                <a href="/list/" class="panel-close">Club Activity
                </a>
              </li>
              <li>
                <a href="#" class="panel-close">Settings
                </a>
              </li>
          </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
           <div class="navbar">
    <div class="navbar-inner sliding">
        <div class="left">
          <a href="#" class="link icon-only panel-open">
          <i class="icon f7-icons ios-only">menu</i>
          <i class="icon material-icons md-only">menu</i>
        </a>
        </div>
        <div class="title"> COUNTRY CLUB </div>
      <div class="right">
      </div>
    </div>
  </div>

          <div class="page-content">
<div class="block">
<!-- swiper properties  -->
<div data-pagination='{"el": ".swiper-pagination"}' data-space-between="0" class="swiper-container swiper-init demo-swiper">
  <div class="swiper-pagination"></div>
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
  </div>
</div>
</div>
  <div class="block" >
   
    <div class="row">
              <div class="col">
                <div class="card" style="background: #CAC5C4">
                  <div class="card-content card-content-padding"><i class="icon f7-icons">person_round</i></div>
                  <div class="card-footer" >My Profile</div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background: #CAC5C4">
                  <div class="card-content card-content-padding"><i class="icon f7-icons">placemark_fill</i></div>
                  <div class="card-footer" >Club Activity</div>
                </div>
              </div>
            </div>
</div>
<div class="block" >
  <div class="row">
              <div class="col">
                <div class="card" style="background: #CAC5C4">
                  <div class="card-content card-content-padding"><i class="material-icons">local_dining</i></div>
                  <div class="card-footer" >Dining</div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background: #CAC5C4">
                  <div class="card-content card-content-padding"><i class="icon f7-icons">document_fill</i></div>
                  <div class="card-footer" >Statements</div>
                </div>
              </div>
            </div>
</div>
<div class="block" >
  <div class="row">
              <div class="col">
                <div class="card" style="background: #CAC5C4">
                  <div class="card-content card-content-padding"><i class="icon f7-icons">stopwatch_fill</i></div>
                  <div class="card-footer" >Tea Timer</div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="background: #CAC5C4">
                  <div class="card-content card-content-padding"><i class="icon f7-icons">bell_fill</i></div>
                  <div class="card-footer" >Notifications</div>
                </div>
              </div>
            </div>
</div>
</div>
        </div>
      </div>
    </div>

  <!-- Cordova -->
  <!--
  <script src="cordova.js"></script>
  -->

  <!-- Framework7 library -->
  <script src="js/framework7.js"></script>
  <script src="js/framework7.min.js"></script>
  <!-- App routes -->
  <script src="js/routes.js"></script>

  <!-- Your custom app scripts -->
  <script src="js/app.js"></script>
</body>
</html>
