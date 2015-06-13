<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  

<div id="MyCollectionBackground">
<div id ="MyCollectionButton"><a href ="http://localhost:8888/MyCollection.php" id = "MyCollection">My Collection</a></div> 
</div> 

<div id ="Background"></div> 
<div id ="Outfitter">Outfitter</div> 
<div class="CreateBackground"></div> 
<div class="ShareBackground"></div>
<div id ="CreateButton"></div> 


<div id ="ShareButton"></div> 

<div id="AddBackground">
  <a href ="http://localhost:8888/AddPage.php" id = "AddButton">Add</a>
</div>


<a href ="http://localhost:8888/Create.php" id = "Create"><span>Create</span></a> 

<img src = "https://www.facebook.com/images/fb_icon_325x325.png" id = "share">


  <style>
 #MyCollectionBackground {
  background-color: #C3D7DF;
  position: absolute;
  top: 300px;
  margin-left: 470px;
  height: 110px;
  width: 390px;
}
#MyCollection{
  text-decoration: none;
  font-size: 60px;  
  color: #67727A;
 text-align:center;
}
#Background {
  background-color: #D75C37;
  height: 768px;
  width: 100%;
  
}
#Outfitter {
  font-size: 150px;
  color: #F5F5F5;
  position: absolute;
  top: 150px;
  margin-left: 350px;
  
}
#AddBackground {
  background-color: #6991AC;
  position: absolute;
  top: 300px;
  margin-left: 350px;
  height: 250px;
  width: 100px;
}
 #MyCollectionBackground {
  background-color: #C3D7DF;
  position: absolute;
  top: 300px;
  margin-left: 470px;
  height: 110px;
  width: 390px;
}

.ShareBackground {
  background-color: #67727A;
  position: absolute;
  top: 440px;
  margin-left: 470px;
  height: 110px;
  width: 97.5px;
}
#share {
  position: absolute;
  top: 440px;
  margin-left: 470px;
  height: 110px;
  width: 97.5px;
}
.CreateBackground {
  background-color: #F5F5F5;
  position: absolute;
  top: 440px;
  margin-left: 590px;
  height: 110px;
  width: 270px;
}

#AddButton {
  text-decoration: none;
  font-size: 70px;  
  color: #D75C37;
  transform: rotateX(270deg);

}

#MyCollection{
  text-decoration: none;
  font-size: 60px;  
  color: #67727A;
 text-align:center;
}

#Create {
  text-decoration: none;
  font-size: 60px;  
  color: #6991AC;
  position: absolute;
  top: 460px;
  margin-left: 640px;
}
  </style>
  <script>
  $(function() {
    $( "#MyCollectionBackground").draggable({
        cancel: false
    });
  });
  $(function() {
    $( "#AddBackground").draggable({
        cancel: false
    });
  });

  </script>
</head>
<body>
 

</div>
 
 
</body>
</html>
