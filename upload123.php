<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <title></title>
</head>
<body>
<marquee id = "planeimage" direction = "right"><img src="pi5oRMydT.png" width="120" height="80" alt="Natural"/></marquee>
<marquee id = "cloud1" direction = "right" scrollamount="5" ><img src="cartoon_clouds.gif" width="120" height="80" alt="Natural"/></marquee>

</body>

<div id = "rectangle0">
<form id="plane" onsubmit="return false;">
Number of Hours on Plane Travel 
<br>
<input type="text" id="userInput" />
    <input type="submit" id = "PlaneSubmit" onclick="plane();" />
</form>
<marquee id = "cloud2" direction = "right" scrollamount="4" ><img src="cartoon_clouds.gif" width="120" height="80" alt="Natural"/></marquee>

<marquee id = "cloud3" direction = "right" scrollamount="6" ><img src="cartoon_clouds.gif" width="120" height="80" alt="Natural"/></marquee>
</div>

  <style>
  body { 
background-color: #00CCFF;
z-index: -1;
}
    
  </style>
  <script>
  $(function() {
    var state = true;
    $("#PlaneSubmit").click(function() {
      if ( state ) {
        $( "#rectangle0").animate({
          backgroundColor: "#aa0000",
          color: "#fff",
          width: 1000
        }, 500 );
      } else {
        $("#rectangle0").animate({
          backgroundColor: "#fff",
          color: "#000",
          width: 400
        }, 500);
      }
      state = !state;
    });
  });
  </script>

<script>

function plane() {
    var input = document.getElementById("userInput").value;
    var amount = input * 0.137;
    var round = amount.toFixed(3);
    var change = document.getElementById("MetricTons").innerHTML = round + " metric tons a year";
}

function Car() {
    var input = document.getElementById("userInputCar").value;
    var amount = input * 1.114;
    var amount2 = amount * 52
    var amount3 = amount2 / 2000
    var round = amount3.toFixed(3);
    var change = document.getElementById("MetricTonsCar").innerHTML = round + " metric tons a year";
}



function Bus() {
  var input = document.getElementById("userInputBus").value 
  var amount = input * 1.55;
  var amount2 = amount * 52;
  var amount3 = amount2 / 2000;
  var round = amount3.toFixed(3);
  var change = document.getElementById("MetricTonsBus").innerHTML = round + " metric tons a year";
};

function done() {

  /// Plane 
  var inputPlane = document.getElementById("userInput").value;
    var amountPlane = inputPlane * 0.137;
    var roundPlane = amountPlane.toFixed(3);
    var plane = parseInt(roundPlane);
  
  /// Car
    var inputCar = document.getElementById("userInputCar").value;
    var amountCar = inputCar * 1.114;
    var amount2Car = amountCar * 52
    var amount3Car = amount2Car / 2000
    var roundCar = amount3Car.toFixed(3);
    var car = parseInt(roundCar);
   
    
  /// Bus 
  var inputBus = document.getElementById("userInputBus").value 
  var amountBus = inputBus * 1.55;
  var amount2Bus = amountBus * 52;
  var amount3Bus = amount2Bus / 2000;
  var roundBus = amount3Bus.toFixed(3);
  var bus = parseInt(roundBus);
  
  var total = plane + car + bus
  

  var everyone = total * 7000000000;
  var km = everyone / 133333;
  var kmround = km.toFixed(0);
  var years = 14000000 / kmround;
  var roundedYears = parseInt(years.toFixed(0));
  var yearsleft = roundedYears + 2015 

  var increase = Math.pow(1.3,roundedYears)
  var increaseRound = parseInt(increase.toFixed(0));
  var km2 = increaseRound * 133333;
  var years2 = 14000000 / km2;
  var roundedYears2 = parseInt(years2.toFixed(0));
  var yearsleft2 = roundedYears2 + 2015;
  var change2 = document.getElementById("final2").innerHTML = yearsleft2;
};

  


</script>
</head>
<body>

 
 
</body>
</html>