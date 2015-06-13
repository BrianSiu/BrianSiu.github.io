
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

  
