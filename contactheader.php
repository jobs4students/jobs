<?php include_once("../includes/session.php"); ?>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="css/style4.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/footer_grid.css">
        <link rel="stylesheet" type="text/css" href="css/footer_layout.css">
        <link rel="stylesheet" type="text/css" href="css/map.css">
         <link rel="stylesheet" type="text/css" href="css/contactbanner.css">
         <link rel="stylesheet" type="text/css" href="css/contactstyle.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


		<script src="js/modernizr.custom.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(50.742979, -1.897168),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
        <style>
   #wrapper { position: relative; }
   #over_map { position: absolute; top: 10px; left: 10px; z-index: 99; }
</style>

       <div class="logoutmessage">
        <?php if(isset($_SESSION["username"])) { ?>
            <div class="logout"><p>Welcome, <?php echo $_SESSION["username"]; ?> <a href ="logout.php">Log out</a></p></div>
        <?php } ?></div>

    </head>
    <body>
