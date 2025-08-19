<?php

if (isset($_GET['temp'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00010");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	
	if($value != -999999) {
		echo $value;
	} else {
		$string2 = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&startDT=2013-10-27T05:00&endDT=2013-10-27T05:00&parameterCd=00010");
		$json2 = json_decode($string2, true);
		$raw2 = ($json2["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
		$value2 = str_replace("string(4)", "", $raw2);
		echo $value2;
	}
}

if (isset($_GET['height'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00065");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	
	if($value != -999999) {
		echo $value;
	} else {
		$string2 = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&startDT=2013-10-27T05:00&endDT=2013-10-27T05:00&parameterCd=00065");
		$json2 = json_decode($string2, true);
		$raw2 = ($json2["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
		$value2 = str_replace("string(4)", "", $raw2);
		echo $value2;
	}
}

if (isset($_GET['ph'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00400");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	
	if($value != -999999) {
		echo $value;
	} else {
		$string2 = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&startDT=2013-10-27T05:00&endDT=2013-10-27T05:00&parameterCd=00400");
		$json2 = json_decode($string2, true);
		$raw2 = ($json2["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
		$value2 = str_replace("string(4)", "", $raw2);
		echo $value2;
	}
}

if (isset($_GET['salt'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00480");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	
	if($value != -999999) {
		echo $value;
	} else {
		$string2 = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&startDT=2013-10-27T05:00&endDT=2013-10-27T05:00&parameterCd=00480");
		$json2 = json_decode($string2, true);
		$raw2 = ($json2["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
		$value2 = str_replace("string(4)", "", $raw2);
		echo $value2;
	}
}

if (isset($_GET['dis'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00060");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	
	if($value != -999999) {
		echo $value;
	} else {
		$string2 = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&startDT=2013-10-27T05:00&endDT=2013-10-27T05:00&parameterCd=00060");
		$json2 = json_decode($string2, true);
		$raw2 = ($json2["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
		$value2 = str_replace("string(4)", "", $raw2);
		echo $value2;
	}
}

if (isset($_GET['cond'])) {
	$string = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&parameterCd=00095");
	$json = json_decode($string, true);
	$raw = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
	$value = str_replace("string(4)", "", $raw);
	
	if($value != -999999) {
		echo $value;
	} else {
		$string2 = file_get_contents("http://waterservices.usgs.gov/nwis/iv/?format=json&sites=07374000&startDT=2013-10-27T05:00&endDT=2013-10-27T05:00&parameterCd=00060");
		$json2 = json_decode($string2, true);
		$raw2 = ($json2["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
		$value2 = str_replace("string(4)", "", $raw2);
		echo $value2;
	}
}

if (empty($_GET)) {
	echo "<a href=\"?height\">Height</a><br />";
	echo "<a href=\"?temp\">Temperature</a><br />";
	echo "<a href=\"?ph\">PH</a><br />";
	echo "<a href=\"?salt\">Salinity</a><br />";
	echo "<a href=\"?dis\">Discharge</a><br />";
	echo "<a href=\"?cond\">Conductance</a><br />";
}

?>
