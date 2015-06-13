
<!DOCTYPE html>
<style>
        video { 
            border: 1px solid #ccc; 
            display: block; 
            margin: 0 0 20px 0; 
            
        }

        #canvas { 
            position: relative;
            left: 650px; 
           margin-top: -502px;
            border: 1px solid #ccc; 
            display: block; 
            
        }
        body {
            background-color:#67727A;
            z-index: -1;
        }
        #snap {
             color:#6991AC;
             background-color:#6991AC;
             width: 100px;
             height: 100px;
             position: absolute;
            left: 200px;
            top: 500px;
        }
        #Retake {
            color:#D75C37;
            background-color:#D75C37;
            width: 100px;
            height: 100px;
            position: absolute;
            left: 300px;
            top: 500px;
        }
        #download {
            color:#F5F5F5;
            position: absolute;
            left: 900px;
            font-size: 50px;
            top: 520px;
        }
        #triangle {
            width: 0;
            height: 0;
            border-top: 40px solid transparent;
            border-left: 80px solid;
            border-bottom: 40px solid transparent;
            color: #F5F5F5;
            position: absolute;
            left: 1150px;
            top: 505px;
        }


</style>
</head>
<body>
    <video id="video" width="640" height="480" autoplay></video>
    
    <button id="snap" class="sexyButton" onclick="myFunction()">Snap Photo</button>

    <input type="button" id="Retake" value="Retake">

    <canvas id="canvas" onclick ="" width="640" height="480"></canvas>

    <a id = "download">Download</a>
    <a href = "http://localhost:8888/PantsCollection.php" id = "triangle"></a> 
    <script>

        // Put event listeners into place
        window.addEventListener("DOMContentLoaded", function() {
            // Grab elements, create settings, etc.
            var canvas = document.getElementById("canvas"),
                context = canvas.getContext("2d"),
                video = document.getElementById("video"),
                videoObj = { "video": true },
                errBack = function(error) {
                    console.log("Video capture error: ", error.code); 
                };

            // Put video listeners into place
            if(navigator.getUserMedia) { // Standard
                navigator.getUserMedia(videoObj, function(stream) {
                    video.src = stream;
                    video.play();
                }, errBack);
            } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
                navigator.webkitGetUserMedia(videoObj, function(stream){
                    video.src = window.webkitURL.createObjectURL(stream);
                    video.play();
                }, errBack);
            } else if(navigator.mozGetUserMedia) { // WebKit-prefixed
                navigator.mozGetUserMedia(videoObj, function(stream){
                    video.src = window.URL.createObjectURL(stream);
                    video.play();
                }, errBack);
            }

            // Trigger photo take
            document.getElementById("snap").addEventListener("click", function() {
                context.drawImage(video, 0, 0, 640, 480);
            });
        }, false);
    </script>

<script>
// Erase the content within the Canvas
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

document.getElementById('Retake').addEventListener('click', function() {
        context.clearRect(0, 0, canvas.width, canvas.height);
      }, false);
</script>

 
<script> 
function downloadCanvas(link, canvasID, filename) {
    link.href = document.getElementById(canvasID).toDataURL();
    link.download = filename;
}

document.getElementById("download").addEventListener('click', function () {
    downloadCanvas(this, 'canvas', 'pants.png');
}, false);



</script>   
    
</body>
</html>