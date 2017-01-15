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
        background-color: #dddddd;
        margin: 20px;
      }

      #main {
        margin-top:180px;
      }
      #title {
        font-size: 50px;
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
        font-size:50px;
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

      <div id="main" class="container">
          <h1 id="title">Welcome to Succinct</h1>

          <div id="startbutton">
              <a href="index.php"><button class="text-center createPresentation">Create presentation</button></a>
          </div>
      </div>

<!-- Scripts -->

      <script src="jquery-3.1.1.min.js"></script>


    </body>

</html>