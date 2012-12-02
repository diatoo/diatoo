<?php
function valueField($nName, $type = 'input') {
	if($type == 'input') {
		return (isset($_POST[$nName]) && $_POST[$nName] != '' ? $_POST[$nName] : '');
	}
	if($type == 'select') {
	}
	
}

function getValue($sName, $sMethod = 'post') {
	if($sMethod == 'post'){
		$sName = $_POST[$sName];
	}
	elseif($sMethod == 'get') {
		$sName = $_GET[$sName];
	}
	$sName = htmlspecialchars($sName);
	return $sName;
}

function verifFormatTel($sTelephone) {
	$sPattern = '#^0[1-9][0-9]{8}#';
	return preg_match($sPattern, $sTelephone);
}

function verifFormatEmail($sEmail) {
	$sPattern = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
	return preg_match($sPattern, $sEmail);
}
?>