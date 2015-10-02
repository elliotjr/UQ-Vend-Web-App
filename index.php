<!DOCYTPE HTML>
<?php
  include('connection.php');
 ?>
<html>
  <head>
    <title>UQ Vend</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="gmaps.js"></script>
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
      $(document).ready(function(){
      var map;
          map = new GMaps({
          div: '#map',
          lat: -27.4986,
          lng: 153.0155,
          zoom: 17
        });


      function addMarkers(title, info, lat, long) {
        map.addMarker({
        lat: lat,
        lng: long,
        title: title,
        infoWindow: {
        content: info
        }
      });
      }

        map.setOptions({draggable: false, zoomControl: false, scrollwheel: false, disableDoubleClickZoom: true});

        var json = <?php echo json_encode($array); ?>;
        for(var i = 0; i < json.length; i++) {
          var obj = json[i];
          var long = obj.long;
          var lat = obj.lat;
          var id = obj.id;
          var contains = "Contains: \n".concat(obj.contains);
          var name = obj.name;
          addMarkers(name, contains, long, lat);
          console.log(i);
        }

      });
    </script>


  </head>
  <body>
    <div class="headContainer">
      <div class="header">
        <nav id="navi">
          <ul>
            <li>About</li>
            <li>Map</li>
          </ul>
        </nav>
        <h1>Hungry?</h1>
      </div>
    </div>

    <div class="main">
      <div id='map'></div>
      <div class="message">
        <h1>Welcome to UQ Vend</h1>
        <p>
          It's a god damn hassle finding vending machines with the food that you want.
          I know that during my first year I was limited to drinking mountain dew and coke
          because that's all they really had in GP South. The worst part was - that I was spending
          $3 for a can.
        </p>
        <p>
          We want to help you find the tastiest and cheapest food their is on campus! This is a collaborative
          effort. Tell us about all the vending hotspots, and share the discounts. We also have great upcoming plans -
          a scoring system for discounts on food and other great giveaways. Nothing beats a nice, cold, refreshing and crowd sourced
          soda.
        </p>
        <h2>Search for a Machine</h2>
        <form method="POST" action="">
          <input class="box1" type="text" name="message" placeholder="Search For An Item">
          <input type="submit" value="search" name="search">
        </form>
      </div>
    </div>
    <div style="clear: both;"></div>
    <div class="enterWrap">
    <div class="enterMachine">
      <h1>Enter a new Machine</h1>
      <p>We might have missed some vending machines! Or maybe we just haven't updated them! If you think that a vending machine
      menu has changed or if a new vending machine has been installed just fill out the form below. Having access to a
      vending machine isn't a privlage, it's a god danm right.</p>
      <form method="POST" action="">
        <input class="box1" type="text" name="name" placeholder="Building Name">
        <input class="box1" type="text" name="level" placeholder="Level">
        <br><br>
        <input class="box1" type="text" name="lat" placeholder="Latitude">
        <input class="box1" type="text" name="long" placeholder="Longitute">
        <br><br>
        <textarea class="box2" name="contains" rows="10" cols="30">coke, mountain dew, carrots, etc..
        </textarea>
        <br><br>
        <input type="submit" value="submit" name="newMachine">
      </form>
    </div>

    <div class="imageList">
      <ul class="img-list">
        <li>
        <img src="Resources/b4.jpg" width="600px" height="300px" alt="History Chain Screen Shot">
              <span class="text-content"><span>Other Vend Sites</span></span>
        </li>

        <li>
        <img src="Resources/b6.jpg" width="600px" height="300px" alt="History Chain Screen Shot">
              <span class="text-content"><span>Support Us</span></span>
        </li>


      </ul>
    </div>
  </div>
    <footer>

    </footer>
  </body>

</html>
