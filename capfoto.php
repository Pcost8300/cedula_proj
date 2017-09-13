<!DOCTYPE html>
<html>
  <head>
  <style>
  #container {
    margin: 0px auto;
    width: 500px;
    height: 375px;
    border: 10px #333 solid;
  }
  #videoElement {
    width: 500px;
    height: 375px;
    background-color: #666;
  }
</style>

    <meta charset="utf-8">
    <title>Capturar Foto</title>
  </head>
  <body>
    <div id="container">
      <video autoplay="true" id="videoElement">
        <script>
        var video = document.querySelector("#videoElement");

        navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

        if (navigator.getUserMedia) {
            navigator.getUserMedia({video: true}, handleVideo, videoError);
        }

        function handleVideo(stream) {
            video.src = window.URL.createObjectURL(stream);
        }

        function videoError(e) {
            // do something
        }
        </script>
      </video>
    </div>
  </body>
</html>