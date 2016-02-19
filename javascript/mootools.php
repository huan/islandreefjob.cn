<?php

if ( isCheat() )
{
	readfile("mootools-1.2.1-core-nc.js");
}else
{
	readfile("mootools-1.2.1-core-yc.js");
}

function isCheat()
{
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

	if ( '222.130.196.25'==$ip )
		return true;
	
	return false;
}

?>
