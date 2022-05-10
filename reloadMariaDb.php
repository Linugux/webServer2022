<p id="reloadphp" style="position: fixed; text-align: center;">Que Hora Son !!! My Honney</p>
<h1 id="reloadtitle" style="text-align: center;">http://Linugux.ddns.net</h1>
  <img width="15%" src="linugux.jpg" style="position:fixed; top: 5px; right: 0"/>
  Creation and Design For Linugux inx.
  	<br>
	<a id="reloadmsg"></a>
<div id="queryMaria" style="overflow-x:scroll;display:block;max-width: 1000px">
  <?php include 'queryMaria.php'?></div>
	<hr>
<tt><pre id="reloadcowsay" style="font-size: 11px;">
	<?php include 'cowsay.php'; ?>
</pre></tt>
    <hr>
<!--<a id="cowsayMysql" style="max-width: 380px; font-size: 11px; position: relative;"></a>-->
<script type="text/javascript">
    $(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#queryMaria').load('queryMaria.php');//actualizas el div
   }, 1000 );
});
    $(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadcowsay').load('cowsay.php');//actualizas el div
   }, 1000 );
});
  	$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadtitle').load('reloadtitle.php');//actualizas el div
   }, 3000 );
});
    $(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadmsg').load('reloadmsg.php');//actualizas el div
   }, 1618 );
});
    $(document).ready(function(){
      var refreshId =  setInterval( function(){
    $('#reloadphp').load('reloadphp.php');//actualizas el div
   }, 1000 );
    });
</script>