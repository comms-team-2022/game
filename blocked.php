<?php

if(!defined('IsIndex')) die('Direct access not permitted');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            background-color: #000000;
        }
        h1 {
            text-align: center;
            color: #ffffff;
            height: 100%;
            width: 100%;
            font-size: 50px;
        }

        p {
            text-align: center;
            font-size: 60px;
             margin-top: 0px;
             color: white;
        }   
        
    </style>
    <title>Game Blocked</title>
</head>
<body>
    <h1>
        Game will be available at 3:15pm
    </h1>
    <p id="demo"></p>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCMv4JWf7oDUaqAA-TmDxyZLIn4RgA7uePcA:https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/70b40647-089a-4fc0-8166-428ec7f458dc/deluov2-65dc481a-10c6-4f38-8c97-c7b229e533ee.png%3Ftoken%3DeyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzcwYjQwNjQ3LTA4OWEtNGZjMC04MTY2LTQyOGVjN2Y0NThkY1wvZGVsdW92Mi02NWRjNDgxYS0xMGM2LTRmMzgtOGM5Ny1jN2IyMjllNTMzZWUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.KgULdvKEI_oP4RmJi6Z3d3Jzs4SOpSbAom793zwBuGA&usqp=CAU">
</body>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 10, 2021 15:15:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
 
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML =  hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</html>