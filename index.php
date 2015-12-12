<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width" />
    <title>Mobile</title>
    <link data-require="ionic@1.0.0-beta.1" data-semver="1.0.0-beta.1" rel="stylesheet" href="http://code.ionicframework.com/1.0.0-beta.1/css/ionic.css" />
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style.css" />
    <script data-require="ionic@1.0.0-beta.1" data-semver="1.0.0-beta.1" src="http://code.ionicframework.com/1.0.0-beta.1/js/ionic.bundle.js"></script>
    <!-- cordova script (this will be a 404 during development) -->
    <script src="cordova.js"></script>
    <script src="app.js"></script>
    <script src="controllers.js"></script>
    <script src="services.js"></script>
  </head>

  <body ng-app="starter" animation="slide-left-right-ios7">
    <!-- 
      The nav bar that will be updated as we navigate between views.
    -->
    <ion-nav-bar class="bar-stable nav-title-slide-ios7">
      <ion-nav-back-button class="button-icon icon ion-arrow-left-b">
      </ion-nav-back-button>
    </ion-nav-bar>
    <!-- 
      The views will be rendered in the <ion-nav-view> directive below
      Templates are in the /templates folder (but you could also
      have templates inline in this html file if you'd like).
    -->
    <ion-nav-view></ion-nav-view>
  </body>

</html>
