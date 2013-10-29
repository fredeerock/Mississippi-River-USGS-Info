<?php

if (isset($_GET['temp'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00010");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	echo $value;
}

if (isset($_GET['height'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00065");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	echo $value;
}

if (isset($_GET['ph'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00400");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	echo $value;
}

if (isset($_GET['salt'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00480");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	echo $value;
}

?>