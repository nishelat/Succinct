<html>
    <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <title>Succinct</title>
      <link rel="stylesheet" href="css/bootstrap.css">

      <script src="jquery-3.1.1.min.js"></script>
      <script>
          $(document).ready(function(){
            $("buttonB").on('click', function(event) {
              if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                  scrollTop: $(hash).offset().top
                }, 700, function(){
             
                  window.location.hash = hash;
                });
              }
            });
          });
      </script>

      <script src="https://apis.google.com/js/api.js"></script>
      <script src="script.js"></script>


    </head>

    <style>
      body {
        font-family: Futura;
        background-color: #dddddd;
        margin: 20px;
      }
      @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
      }
      footer {
        position: absolute;
        bottom: 10px;
      }

      #inputArea {
        margin: 20px;
      }

      .form-control {
        text-align: center;
        font-size: 14px;
      }

      #slide {
        background-color: white;
        height: 620px;
        padding: 20px 20px;
        margin-top: 100px;
        margin-bottom: 20px;
      }
      #point {
        position: absolute;
        top:850px;
        right: 10%;
        text-align: left;
        width: 38%;
        font-size: 16px;
      }
      #picture {
        background-color: blue;
        position: absolute;
        top: 33%;
        left: 10%;
      }
      .btn {
        width: 100%;
        margin-top: 5px;
      }
      #heading {
        outline: none;
        border: white;
        font-size: 32px;
        text-align: center;
      }

      #imagewrapper {
        float: left;
        width: 40%;
        padding-bottom: 500px;

      }

      #image1 {
        padding: 5px;
        object-fit: cover;
        width: 200px;
        height: 200px;
        
      }
/*      #image2 {
        padding: 5px;
        object-fit: cover;
        width: 200px;
        height: 200px;
      }
      #image3 {
        padding: 5px;
        object-fit: cover;
        width: 200px;
        height: 200px;
      }
      #image4 {
        padding: 5px;
        object-fit: cover;
        width: 200px;
        height: 200px;
      }*/
      #texttitle {
        font-size: 36px;
      }
      #textparagraph {
        padding: 40px 100px;
        text-align: left;
        font-size: 14px;
      }
      .header {
        margin: 0 30px;
      }
      #us {
        text-align: inline-block;
        float: left;
        font-size: 30px;
      }
      a {
        text-align: inline-block;
        float: right;
        margin-left: 10px;
        padding: 4 30px;
        font-size: 18px;
        text-decoration: none;
        color: black;
        transition: .2s;
      }

      a:hover {
        text-decoration: none;
        color: white;
        background-color: black;
      }

    </style>



    <body class="text-center">


<!-- Input bar and slide -->

<div class="header">
  <span id="us">Succinct</span>
  <a href="welcome.php">Home</a>
  <a href="index.php">Reset</a>
</div>

<div id="inputArea" style="animation-name: fadeIn; animation-duration: 0.5s;">
  <div>
    <form id="inputform" action="">
      <textarea id="texttitle" class="form-control" rows="1" type="text" placeholder="Enter title" name="tag"></textarea>
      <input id="button" class="btn btn-success" type="submit" value="Submit">
    </form>
  </div>

  <div>
    <form id="inputParagraph" action="">
      <textarea id="textparagraph" class="form-control" rows="18" type="text" placeholder="Enter essay here..." name="tagB"></textarea>
      <a href="#slide" id="buttonB" class="btn btn-success" type="button" value="Submit">Create slide</a>
    </form>
  </div>

  <div id="slide" class="containter">
    <div>
      <input id="heading" placeholder="Enter title here...">
      <hr>
    </div>
  <div id="point"></div>

  <?php

  if(!empty($_GET['tag'])) {
    $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=eca302393f034b5435dbe39c81103a10&tags=' 
           . urlencode($_GET['tag']) . '&safe_search=1&sort=relevance&format=json&nojsoncallback=1';
    $json = file_get_contents($url);
    $array = json_decode($json, true);

    $loop_counter = 0;
    foreach($array['photos']['photo'] as $_array) {
      if ($loop_counter++ == 4) break;
      $farm_id = $_array['farm'];
      $server_id = $_array['server'];
      $id = $_array['id'];
      $secret = $_array['secret'];

      $image_source = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' . $id . '_' . $secret . '.jpg';
      echo '<div id="imagewrapper"><img id="image1" style="float: left; margin-top: 10px;"height="275" src=' . $image_source . '>';
    }
  }

  /*
  $farm_id = $array['photos']['photo'][0]['farm'];
  $server_id = $array['photos']['photo'][0]['server'];
  $id = $array['photos']['photo'][0]['id'];
  $secret = $array['photos']['photo'][0]['secret'];

  $image_source = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' . $id . '_' . $secret . '.jpg';
  echo '<div id="imagewrapper"><img id="image1" style="float: left; margin-top: 10px;"height="275" src=' . $image_source . '>';

  $farm_id = $array['photos']['photo'][1]['farm'];
  $server_id = $array['photos']['photo'][1]['server'];
  $id = $array['photos']['photo'][1]['id'];
  $secret = $array['photos']['photo'][1]['secret'];

  $image_source = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' . $id . '_' . $secret . '.jpg';
  echo '<img id="image2" style="float: left; margin-top: 10px;"height="275" src=' . $image_source . '>';

  $farm_id = $array['photos']['photo'][2]['farm'];
  $server_id = $array['photos']['photo'][2]['server'];
  $id = $array['photos']['photo'][2]['id'];
  $secret = $array['photos']['photo'][2]['secret'];

  $image_source = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' . $id . '_' . $secret . '.jpg';
  echo '<img id="image3" style="float: left; margin-top: 10px;"height="275" src=' . $image_source . '>';

  $farm_id = $array['photos']['photo'][3]['farm'];
  $server_id = $array['photos']['photo'][3]['server'];
  $id = $array['photos']['photo'][3]['id'];
  $secret = $array['photos']['photo'][3]['secret'];

  $image_source = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' . $id . '_' . $secret . '.jpg';
  echo '<img id="image4" style="float: left; margin-top: 10px;"height="275" src=' . $image_source . '></div>';
  }
  */

  ?>
  </div>        
</div>

<!-- Scripts -->



</body>

<!-- Footer -->

<footer class="text-center">

  <!-- <div>
    <h5 style="margin-left: 40px;">Created at HackUCI by the team: The Visual Basics</h5>
  </div> -->

</footer>

</html>