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
        font-family: futuracustom;
        background-color: #dddddd;
        margin: 20px;
        cursor: default;
      }
      @font-face {
        font-family: futuracustom;
        src: url('fonts/futuracustom.ttf');
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
        height: 660px;
        padding: 20px 20px;
        margin-top: 65px;
        margin-bottom: 20px;
      }
      #point {
        position: absolute;
        top:835px;
        right: 10%;
        text-align: left;
        width: 38%;
        font-size: 19px;
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
        width: 50%;
        padding: 80px 75px;


      }
      .image {
        padding: 5px;
        object-fit: cover;
        width: 200px;
        height: 200px;
        float: left;
        
      }
      #texttitle {
        font-size: 24px;
      }
      #textparagraph {
        padding: 40px 100px;
        text-align: left;
        font-size: 20px;
      }
      .header {
        margin: 0 30px;
        padding-bottom: 40px;
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

      .titleStyle {
        font-size: 50px;
        margin: 30px 30px -10px 30px;
      }
      hr {
        width: 500px;
        color: blue;
      }
      #logo {
        position: absolute;
        top: 20px;
        left: 60px;
        height: 42px;
      }
      #succinct {
        position: absolute;
        top: 25px;
        font-size: 24px;
        left: 155px;
      }


    </style>



    <body class="text-center">


<!-- Input bar and slide -->

<div class="header">
  <img id="logo" src="succinctlogo.png">
  <span id="succinct">Succinct</span>
  <a href="welcome.php">Home</a>
  <a href="index.php">Reset</a>
</div>

<div id="inputArea" style="animation-name: fadeIn; animation-duration: 0.5s;">
  <div>
    <form id="inputform" action="">
      <textarea id="texttitle" class="form-control" rows="1" type="text" placeholder="Enter a specific title! Submitting 'Cowboys' will not as accurate as 'American Cowboys,' for example." name="tag"></textarea>
      <input id="button" href="#inputParagraph" class="btn btn-success" type="submit" value="Submit">
    </form>
  </div>



  <div>
    <form id="inputParagraph" action="">
      <textarea id="textparagraph" class="form-control" rows="13" type="text" placeholder="Enter essay here..." name="tagB"></textarea>
      <a href="#slide" id="buttonB" class="btn btn-success" type="button" value="Submit">Create slide</a>
    </form>
  </div>

  <div id="slide" class="containter">
  <div id="point"></div>

  <?php

  if(!empty($_GET['tag'])) {
    $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=eca302393f034b5435dbe39c81103a10&tags=' 
           . urlencode($_GET['tag']) . '&safe_search=1&sort=relevance&format=json&nojsoncallback=1';
    $json = file_get_contents($url);
    $array = json_decode($json, true);

    echo '<div id="imagewrapper">';
    $loop_counter = 0;
    foreach($array['photos']['photo'] as $_array) {
      if ($loop_counter++ == 4) break;
      $farm_id = $_array['farm'];
      $server_id = $_array['server'];
      $id = $_array['id'];
      $secret = $_array['secret'];

      $image_source = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' . $id . '_' . $secret . '.jpg';
      echo '<img class="image" style="float: left; margin-top: 10px;"height="275" src=' . $image_source . '>';
    }
    echo '</div>';
    echo '<div class="titleStyle">' . $_GET['tag'] . '</div>';
  }
  ?>

  <hr>

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