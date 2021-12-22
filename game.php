<?php

if(!defined('IsIndex')) die('Direct access not permitted');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--

JavaScript Snake
By Patrick Gillespie
http://patorjk.com/games/snake

Source code is available here: https://github.com/patorjk/JavaScript-Snake

-->
    <meta charset="utf-8">
    <title>JavaScript Snake</title>
    <link rel=stylesheet id="style" type="text/css" href="./css/main-snake.css" />
    <link rel="shortcut icon" href="css/images/favicon.png" />
    <style>
      .snake-toolbar {
        position: absolute;
        top: 0;
        left: 0;
        z-index:10000;
        padding: 5px;
      }
    </style>
<script>

function getTheme () {
    function changeTheme(themeUrl) {
      var elm = document.getElementById("style");
      elm && elm.remove();

      var newCss = document.createElement("link");
      newCss.id = "style";
      newCss.rel = "stylesheet";
      newCss.type = "text/css";
      newCss.href = themeUrl;
      document.head.appendChild(newCss);
    }
    var index = document.getElementById("select").selectedIndex;
    switch (index) {
        case 0: 
          changeTheme('css/light-snake.css?' + Math.random());
          break;
        case 1: 
          changeTheme('css/main-snake.css?' + Math.random());
          break;
        case 2: 
          changeTheme('css/dark-snake.css?' + Math.random());
          break;
        case 3: 
          changeTheme('css/green-snake.css?' + Math.random());
          break;
        case 4: 
          changeTheme('css/matrix-snake.css?' + Math.random());
          break;
        case 5: 
          changeTheme('css/Senura-snake.css?' + Math.random());
          break;
        default:
          changeTheme('css/main-snake.css?' + Math.random());
          break;
    }
    setTimeout(function() {
        document.getElementById('game-area').focus();
    }, 10);
}

</script>
</head>
<body>
    <div class="snake-toolbar">
      <div style="display:inline-block;margin-right:10px;">
        <span>Theme:</span>
        <select onchange="getTheme()" id="select">
            <option>Light Theme by yokesharun</option>
            <option selected>Main Theme by patorjk</option>
            <option>Dark Theme by KenyStev</option>
            <option>Green Theme by CoffeeCatDE</option>
            <option>Matrix Theme by Geahad Haymor</option>
            <option>Theme by Senura Ratnayake</option>
        </select>
      </div>
      <!-- TODO: Get rid of mode in javascript -->
      <div style="display:none;">
        <span>Mode:</span>
        <select id="selectMode">
            <option value="100">Easy</option>
            <option value="75" selected>Medium</option>
            <option value="50">Hard</option>
            <option value="25">Impossible</option>
            <option value="110">Rush</option>
        </select>
      </div>
      <br />
    </div>

    <div id="mode-wrapper" style="display: inline; width: auto;">
    </div>

    <div id="game-area" tabindex="0">
    </div>
    <script type="module" src="./js/snake.js" ></script>
    <script>
      function go_full_screen() {
        var elem = document.documentElement;
        try {
            if (elem.requestFullscreen) {
              elem.requestFullscreen();
            } else if (elem.msRequestFullscreen) {
              elem.msRequestFullscreen();
            } else if (elem.mozRequestFullScreen) {
              elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
              elem.webkitRequestFullscreen();
            }
        } catch(err) {
          console.error(err);
          alert("Sorry, fullscreen won't work in this setup.");
        }
      }
  </script>
</body>
</html>
