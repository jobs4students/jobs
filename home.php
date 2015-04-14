
<?php include_once("../includes/templates/header.php"); ?>
<?php include_once("../public/home_nav.php"); ?>
    
 <div id="typer">jobs4students</div>
              
     
     <div id="buttons">
        <button class="btns" onclick="window.location.href='signup_index.php'">Sign Up</button> 
        <button class="btns" onclick="window.location.href='login_index.php'">Log In</button>
     </div>
     
        <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
        <script src='js/jquery.typer.js'></script>
        <script>
            var win = $(window),
                jobs4students = $('#typer');

            jobs4students.typer(['<i>Hello....</i>', 'This is <span>our</span> group website.', 'Welcome to jobs<span>4</span>students']);

            // unneeded...
            win.resize(function(){
                var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

                jobs4students.css({
                    fontSize: fontSize * .3 + 'px'
                });
            }).resize();
        </script>  
</div>

<div id="map-title" >
<h1>Jobs Available in Bournemouth</h1>
</div>

<div id="map-canvas">
           
     <script type="text/javascript">
        var locations = [
          ['Sainsburys', 50.744903, -1.878044, 1],
          ['lidl', 50.741434, -1.879711, 2],
          ['Pizza Hut', 50.739985, -1.879077, 3],
          ['Scissors', 50.739662, -1.8799, 4],
          ['Waitrose', 50.740864, -1.87912, 5],
          ['Boots', 50.741124, -1.879534, 6],
          ['The Larkrise', 50.744481, -1.878202, 7],
         
        ];

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          zoom: 15,
          center: new google.maps.LatLng(50.739888, -1.879381),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
          });
         

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
      </script>
    
    </div>


        

<?php include_once("../includes/templates/footer.php"); ?>
