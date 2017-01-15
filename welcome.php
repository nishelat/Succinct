<html>
    <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <title>Succinct</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <script src="https://apis.google.com/js/api.js"></script>
      <script src="script.js"></script>
    </head>

    <style>
      body {
        font-family: Futura;
        /*background-color: #dddddd;*/
        background-image: url("bg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        margin: 20px;
      }

      #main {
        /*margin-top: 40px;*/
      }
      #title {
        font-size: 70px;
      }

      /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
       background-color: #3e8e41;
    }

      .createPresentation {
        background-color:#7F7979;
        opacity: 0.7;
        -moz-border-radius:8px;
        -webkit-border-radius:8px;
        border-radius:8px;
        display:inline-block;
        cursor:pointer;
        color: white;

        font-family: Futura;
        font-size:30px;
        padding:13px 32px;
        text-decoration: none;
        
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
      }

      .createPresentation:hover {
          -webkit-transform: scale(1.01);
          -moz-transform: scale(1.01);
          -ms-transform: scale(1.01);
          -o-transform: scale(1.01);
          transform: scale(1.01);
          background-color: black;
          color: white;
          text-decoration: none;
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

    </style>

    <body class="text-center">

<!-- Welcome page -->

<div class="dropdown">
  <input type = "image" style = "float: left;" src="hamburger.png" width = 40px height = 40px>
  <div class="dropdown-content">
    <a href="#">About</a>
    <a href="#">Forums</a>
    <a href="#">Contact</a>
  </div>
</div>
<div id="main" class="container">
  <h1 id="title">Welcome to Succinct</h1>
</div>
<div id="startbutton">
  <a href="index.php"><button class="text-center createPresentation">Click to Get Started!</button></a>
</div>

    

<!-- Scripts -->

      <script src="jquery-3.1.1.min.js"></script>

    </body>

</html>