<html>
<head>
<div id = "ShirtsBackground"></div>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <div class="AddBackground"></div>
<div class="MyCollectionBackground"></div> 
<a href ="file:///Users/BrandonFong/Desktop/All%20Test/Outfitter/Add%20Page.html" id = "AddButton"><span>Add</span></a>
<a href ="http://localhost:8888/MyCollection.php" id = "MyCollection"><span>My Collection</span></a>
<div id = "background"></div>

<style>
.AddBackground {
    background-color: #D75C37;
    position: absolute;
    left: 603px;
    margin-left: 350px;
    height: 20px;
    width: 50px;
    top: 13px;
}

#AddButton {
    text-decoration: none;
    font-size: 20px;    
    color: #6991AC;
    position: absolute;
    left: 620px;
    margin-left: 340px;
    top: 13px;
    }

 .MyCollectionBackground {
    background-color: #C3D7DF;
    position: absolute;
    margin-left: 470px;
    height: 20px;
    width: 150px;
    left: 550px;
    top: 13px;
}
#MyCollection {
    text-decoration: none;
    font-size: 20px;    
    color: #67727A;
    position: absolute;
    margin-left: 490px;
    left: 550px;
    top: 13px;

}

</style>
<style>

body {
    background-color: #6991AC;
}
#div1 {
    position: relative;
    width:209px;
    height:418px;
    padding:10px;
    border:1px solid #aaaaaa;
    left:500px;
    top: 80px;

}
#shirts {
    display: block;
    position: fixed;
    top: 100px;
    padding-top: 10px;
}
#pants {
    display: block;
    position: fixed;
    top: 100px;
    left: 750px;
}

</style>
<script>
// draganddrop. N.p., n.d. Web. 4 Jan. 2015. <http://www.w3schools.com/html/ 
     // tryit.asp?filename=tryhtml5_draganddrop>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

function resize() {
    var yourImg = document.getElementById("drag1");
    yourImg.style.height = '209px';
    yourImg.style.width = '209px';

};

function resize2() {
    var yourImg = document.getElementById("drag2");
    yourImg.style.height = '209px';
    yourImg.style.width = '209px';

};

function normal() {
    var shirt = document.getElementById("drag1");
    shirt.style.height = '100px';
    shirt.style.width = '150px';

};

function normal2() {
    var shirt2 = document.getElementById("drag2");
    shirt2.style.height = '100px';
    shirt2.style.width = '150px';

};

function resize3() {
    var shirt3 = document.getElementById("drag4")
    shirt3.style.height = "209px"
    shirt3.style.width = "209px"
};

function normal3() {
    var shirt3 = document.getElementById("drag4")
    shirt3.style.height = "100px"
    shirt3.style.width = "150px"
};

function resizepants() {
    var pants = document.getElementById("drag5");
    pants.style.height = "209px"
    pants.style.width = "209px"
};

function normalpants() {
    var pants = document.getElementById("drag5");
    pants.style.height = "100px"
    pants.style.width = "150px"
};

function resizepants2() {
    var pants = document.getElementById("drag6");
    pants.style.height = "209px"
    pants.style.width = "209px"
};

function normalpants2() {
    var pants = document.getElementById("drag6");
    pants.style.height = "100px"
    pants.style.width = "150px"
};

function resizepants3() {
    var pants = document.getElementById("drag7");
    pants.style.height = "209px"
    pants.style.width = "209px"
};

function normalpants3() {
    var pants = document.getElementById("drag7");
    pants.style.height = "100px"
    pants.style.width = "150px"
}

</script>
</head>
<script src="http://html2canvas.hertzen.com/build/html2canvas.js"></script>

<body>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>

<div id = "shirts">
    <img id="drag1" src="Shirt.png" draggable="true" ondragstart="drag(event)" width = "150" height = "100">

    <img src = "Shirt2.png" id = "drag2" draggable="true" ondragstart="drag(event)"width="150" height="100">


    <img src = "Shirt3.png" id = "drag4" draggable="true" ondragstart="drag(event)"width="150" height="100">
</div>

<div id = "pants">

<img src = "Pants.png" id = "drag5" draggable="true" ondragstart="drag(event)"width="150" height="100">

<img src = "Pants2.png" id = "drag6" draggable="true"ondragstart="drag(event)"width="150" height="100">

<img src ="Pants3.png" id = "drag7" draggable="true"ondragstart="drag(event)"width="150" height="100">


</div>
<div id = "shirtbutton">
<button id = "resize2" onclick = "resize2()">Enlarge Shirt 2</button>
<button id = "resize" onclick = "resize()">Enlarge Shirt 1</button>
<button id = "resize3" onclick = "resize3()">Enlarge Shirt 3</button>
<button id = "normal" onclick = "normal()">Shrink Shirt 1</button>
<button id = "normal2" onclick ="normal2()">Shrink Shirt 2</button>
<button id = "normal3" onclick ="normal3()">Shrink Shirt 3</button>
</div>

<div id = "pantsbutton">
<button id = "pantsresize" onclick="resizepants()">Enlarge Pants 1</button>
<button id = "normalpants" onclick = "normalpants()">Shrink Pants 1</button>
<button id = "pantsresize2" onclick="resizepants2()">Enlarge Pants 2</button>
<button id = "normalpants2" onclick = "normalpants2()">Shrink Pants 2</button>

<button id = "pantsresize3" onclick="resizepants3()">Enlarge Pants 3</button>
<button id = "normalpants3" onclick = "normalpants3()">Shrink Pants 3</button>
</div>


<style>
#resize {
    position: absolute;
    top: 250px;
    left: 30px;
}

#normal {
    position: absolute;
    top: 300px;
    left: 30px;
}

#resize2 {
    position: absolute;
    top: 250px;
    left: 190px;
}
#normal2 {
position: absolute;
    top: 300px;
    left: 190px;
}
#resize3 {
    position: absolute;
    top: 250px;
    left: 345px;
}

#normal3 {
    position: absolute;
    top: 300px;
    left: 345px;
}

#pantsresize {
    position: absolute;
    top: 250px;
    left: 780px;
}
#normalpants {
    position: absolute;
    top: 300px;
    left: 780px;
}

#pantsresize2 {
    position: absolute;
    top: 250px;
    left: 930px;
}

#normalpants2 {
    position: absolute;
    top: 300px;
    left: 930px;
}

#pantsresize3{
    position: absolute;
    top: 250px;
    left: 1090px;
}
#normalpants3 {
    position: absolute;
    top: 300px;
    left: 1090px;
}
</style>



</body>
</html>

