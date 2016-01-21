<?php
//echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
echo $_SERVER['REMOTE_ADDR'];
$lat=$_GET['lati'];
$long=$_GET['longi'];
$json_string = file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=22&lon=77&appid=b879080569e2f5849158212e12c944eb");
    //json string to array
$parsed_arr = json_decode($json_string,true);
echo json_encode($parsed_arr);

?>
<html>
<head>
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script>

var country=geoplugin_latitude();

document.write(country);
document.write("Welcome to our visitors from "+geoplugin_city()+", "+geoplugin_countryName()); 

function myJavascriptFunction() { 
  var jlati = geoplugin_latitude();
   var jlongi=geoplugin_latitude();
  window.location.href = "ip.php?lati=" + jlati; 
   window.location.href = "ip.php?longi=" + jlongi;
}
</script>
</head>
<body>


<h1>


</h1>
	</body>
</html