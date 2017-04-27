<html>

  <head>
    <link rel="stylesheet" media="screen and (max-device-width: 700px)" href="smallscreen.css" />
    <link rel="stylesheet" media="screen and (max-device-width: 1024px)" href="mediumscreen.css" />
    <link rel="stylesheet" media="screen and (min-device-width: 1025px)" href="bigscreen.css" />
    <meta charset="utf-8"/>
    <style>
      form {
        width:50%;
        margin:auto;
        background: #FFF4F4;
        display:flex;
        flex-direction:column;
        border-radius: 10px;
        font-family: 'logisosomedium';
        margin-top: 10px;
        padding: 15px;
      }

      .titre {
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        color: #F072A9;
        font-weight: bold;
        position:inherit;
      }




      input {
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border: 1px solid #ffc2dc;
        outline: 0;
        color: #f072a9;
        padding: 0 8px 0 8px;
        box-shadow: inset 1px 1px 4px #ffd5e7;
        -moz-box-shadow: inset 1px 1px 4px #ffd5e7;
        -webkit-box-shadow: inset 1px 1px 4px #ffd5e7;
        background: #ffeff6;
        width: 50%;
        font-size: 14px;
        height: 25px;
      }

      textarea {
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border: 1px solid #ffc2dc;
        outline: 0;
        color: #f072a9;
        padding: 0 8px 0 8px;
        box-shadow: inset 1px 1px 4px #ffd5e7;
        -moz-box-shadow: inset 1px 1px 4px #ffd5e7;
        -webkit-box-shadow: inset 1px 1px 4px #ffd5e7;
        background: #ffeff6;
        width: 50%;
        font-size: 14px;
        height: 100px;
      }

      .envoyer {
        background: #eb3b88;
        border: 1px solid #c94a81;
        padding: 0 15px 0 15px;
        color: #ffcbe2;
        box-shadow: inset -1px -1px 3px #ff62a7;
        -moz-box-shadow: inset -1px -1px 3px #ff62a7;
        -webkit-box-shadow: inset -1px -1px 3px #ff62a7;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        font-weight: bold;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      form > * {
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        margin:5px;
      }

      .error {
        text-align:center;
        color:red;
      }

    </style>

  </head>

  <body>
    <div class="hack">
    <h1>hack </h1>
  </div>

    <div class="wrapper">
      <img id="img" src="Robot.png" />
      <div class="overlay">
        <div id="head" class="part">
          <a href="activité/head.html" class="part-link"><span>ACTIVITÉS</span></a>
        </div>
        <div id="body" class="part">
          <a href="bds.html" class="part-link"><span>BDS/JEUX</span></a>
        </div>
        <div id="foot" class="part">
          <a href="blog.html" class="part-link"><span>BLOG</span></a>
        </div>
      </div>
    </div>

    <aside>
      <input id="ole" type="checkbox">
      <label class="menu_ole" for="ole">
      </label>
      <nav>
        <div class="menu_d">
          <h3> Bienvenue au Hack du Garage Numérique </h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </nav>
    </aside>

    <section>
      <input id="yolo" type="checkbox">
      <label class="menu_contact" for="yolo">
      </label>
      <nav>
        <div class="contact">
          <h3> Nous contacter: </h3>

          <?php require('mail.php'); ?>
          <p> ASSOCIATION LE GARAGE NUMÉRIQUE</p>
          <p>4, PLACE HENRI MATISSE 75020 PARIS</p>
          <p>01.71.28.99.46</p>
          <p>CONTACT@LEGARAGENUMERIQUE.FR</p>
        </div>
      </nav>
    </section>
    <!-- SCRIPTS -->
    <script type="text/javascript">
      var img = document.getElementById('img');
      document.getElementById('head').addEventListener('mouseenter', function() {
        img.src = 'gifTete.gif';
      });
      document.getElementById('head').addEventListener('mouseleave', function() {
        img.src = 'gifTete_envers.gif';
      });
      document.getElementById('body').addEventListener('mouseover', function() {
        img.src = 'gifBuste.gif';
      });

      document.getElementById('body').addEventListener('mouseout', function() {
        img.src = 'gifBuste_envers.gif';
      });
    </script>

    <script type="text/javascript">

    function toogleMenu(selector, show) {
      var menu = document.querySelector(selector);
      var cb = menu.querySelector('input[type="checkbox"]');
      cb.checked = show;
    }

    document.getElementById('ole').addEventListener('click', function() {
      toogleMenu('section', false);
    });

    document.getElementById('yolo').addEventListener('click', function() {
      toogleMenu('aside', false);
    });

  </script>
  </body>





</html>
