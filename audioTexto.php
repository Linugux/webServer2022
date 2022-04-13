
<button onclick="myFunctionAA()" type="button">Change Audio/Text</button><br>
 
<audio id="myVideo" controls autoplay>
  <source id="mp4_src" src="espeak.mp3" type="audio/mp3">
  <source id="ogg_src" src="espeak.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio>

<script> 
function myFunctionAA() { 
  document.getElementById("mp4_src").src = "espeak.mp3";
  document.getElementById("ogg_src").src = "espeak.ogg";
  document.getElementById("myVideo").load();
} 
</script> 

