<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <title></title>
</head>
<div id = "rectangle0">
<body>
<marquee id = "planeimage" direction = "right"><img src="pi5oRMydT.png" width="120" height="80" alt="Natural"/></marquee>
<marquee id = "cloud1" direction = "right" scrollamount="5" ><img src="cartoon_clouds.gif" width="120" height="80" alt="Natural"/></marquee>

</body>


<form id="plane" onsubmit="return false;">
Number of Hours on Plane Travel 
<br>
<input type="text" id="userInput" />
    <input type="submit" id = "PlaneSubmit" onclick="plane();" />
</form>
<marquee id = "cloud2" direction = "right" scrollamount="4" ><img src="cartoon_clouds.gif" width="120" height="80" alt="Natural"/></marquee>

<marquee id = "cloud3" direction = "right" scrollamount="6" ><img src="cartoon_clouds.gif" width="120" height="80" alt="Natural"/></marquee>
</div>


<div id = "rectangle1">

  <form id="Car" onsubmit="return false;">
Number of Hours a week traveling in a Car: 
<br>
<input type="text" id="userInputCar" />
    <input type="submit" id = "CarSubmit" onclick="Car()" />
</form>
<marquee id = "car3" direction = "right" scrollamount="5" ><img src="car3.png" width="120" height="80" alt="Natural"/></marquee>

</div>


<div id = "rectangle2">

  <form id = "Bus" onclick="done()" onsubmit = "return false;">
Number of Hours a week traveling by Bus: 
<br>
<input type="text" id ="userInputBus"/>
  <input type="submit"  id = "BusSubmit" onclick="Bus()"/>
</form>

<marquee id = "bus1" direction = "left" scrollamount="5" ><img src="20787610-School-bus-Stock-Vector-cartoon.png" width="120" height="80" alt="Natural"/></marquee>

</div>


<div id = "rectangle3">
  <div id = "final"></div>
<div id = "final2"></div>
<img src = "outline.png" id = "arctic"width="360" height="240"></img>

<marquee id = "polarbear1" direction = "right" scrollamount="5" ><img src = "http://i706.photobucket.com/albums/ww61/snowball9447/2theworld.gif" id = "PolarBear"></img></marquee>
</div>

<script>

$(function() {
    var state = true;
    $("#PlaneSubmit").click(function() {
      if ( state ) {
        $( "#rectangle0").animate({
          backgroundColor: "#303030 ",
          height: 600,
          color: "#fff",
          width: 1300
        }, 1000 );
      } else {
        $("#rectangle0").animate({
          backgroundColor: "#fff",
          color: "#000",
          width: 400
        }, 1000);
      }
      state = !state;
    });
  });


 $(function() {
    var state = true;
    $("#CarSubmit").click(function() {
      if ( state ) {
        $( "#rectangle1").animate({
          backgroundColor: "#585858 ",
          height: 500,
          color: "#fff",
          width: 1300
        }, 1000 );
      } else {
        $("#rectangle1").animate({
          backgroundColor: "#fff",
          color: "#000",
          width: 400
        }, 1000);
      }
      state = !state;
    });
  });

$(function() {
    var state = true;
    $("#BusSubmit").click(function() {
      if ( state ) {
        $( "#rectangle2").animate({
          backgroundColor: "#505050  ",
          height: 500,
          color: "#fff",
          width: 1300
        }, 1000 );
      } else {
        $("#rectangle2").animate({
          backgroundColor: "#fff",
          color: "#000",
          width: 400
        }, 1000);
      }
      state = !state;
    });
  });


$(function() {
    var state = true;
    $("#arctic").click(function() {
      if ( state ) {
        $( "#rectangle3").animate({
          backgroundColor: "#000000   ",
          height: 500,
          color: "#fff",
          width: 1300
        }, 1000 );
      } else {
        $("#rectangle3").animate({
          backgroundColor: "#fff",
          color: "#000",
          width: 400
        }, 1000);
      }
      state = !state;
    });
  });

$(document).ready(function(){
    $("#arctic").click(function(){
        $("#arctic").hide(10000);
    });
});

$(document).ready(function(){
    $("#polarbear1").click(function(){
        $("#polarbear1").hide(10000);
    });
});

</script>

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

<style>


#rectangle0 {
   width:100%;
  height: 600px;
  background-color: #00CCFF;

 }

#rectangle1 {
  width:100%;
  height: 500px;
  background-color: #0099FF;

  padding-top: 150px;
  
}

#rectangle2 {
  width:100%;
  height: 500px;
  background-color: #0066FF;
  
  padding-top: 150px;
}
#rectangle3 {
  width: 100%;
  height: 100%;
  padding-top: 200px;
  text-align: center;
  font-size: 50px;
    background-color: #00CCFF;
}
#final2 {
  color: red;
}
#final {
  color: red;
}
div {
  color: white;
}
form {
  color: white;
  font-size: 50px;
  text-align:center;
}
#plane {
  margin-top: 150px
}
#Car {
  margin-top: 150px;
}

#Bus {
  margin-top: 150px;
}
#arctic {
  margin-top: auto;
  margin-left: auto;
}


</style>






</html>







