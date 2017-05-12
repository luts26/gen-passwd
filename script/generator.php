<?php
	function getChars($x, $y){
		for($i = $x; $i < $y; $i++){
			$text .= chr($i).",";
		}
		return $text;
	}
	
	function getNum($size){
		for($i = 0; $i < $size; $i++){
			$text[] = mt_rand(0, 9);
		}
		return $text;
	}
	
	$size = $_POST["size"];
	$passCan = $_POST["passCan"];
	
	$x = NULL;
	$y = NULL;
	
	$resNum = getNum($size);
	
	$arrr = explode(",", $passCan);
	foreach($arrr as $v){
		if($v == "option2"){
			$x = 97;
			$y = 123;
			$res1 .= getChars($x, $y, $text);
		}
		if($v == "option3"){
			if(in_array("option5", $arrr)){
				$x = 192;
				$y = 224;
				$res1 .= getChars($x, $y, $text);
			}
			else {
				$x = 65;
				$y = 91;
				$res1 .= getChars($x, $y, $text);
			}
		}
		if($v == "option4"){
			$x = 33;
			$y = 44;
			$res1 .= getChars($x, $y, $text);
		}
		if($v == "option5"){
			$x = 224;
			$y = 256;
			$res1 .= getChars($x, $y, $text);
		}
	}
	
	if(isset($res1)){
		$res2 = explode(",", $res1);
		array_pop($res2);
		shuffle($res2);
		
		$resc = array_slice($res2, 0, $size);
		
		$res = array_merge($resc, $resNum);
		shuffle($res);
		
		$pass = implode("", array_slice($res, 0, $size));
	}
	else {
		$pass = implode("", $resNum);
	}
	
	echo $pass;
?>