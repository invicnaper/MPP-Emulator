<?php

// getting the serial number
//$mandate = "January 01 2000";
//list($month, $day, $year) = sscanf($mandate, "%s %d %d");
//echo "Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day\n";
#^ktab\(((\s*?\".*\"\s*?)|(\s*?'.$special.'.*'.$special.'\s*?))((\s*?\,\s*?[a-zA-Z0-9_]{1,}){1,})?\s*?\);$#



function mult()
{
	$count_args = func_num_args();
	$arg_list = func_get_args();
	$string = $arg_list[0];

	for($i = 1; $i < $count_args; $i++)
	{
		$string = preg_replace("/\%d|\%c|\%f/", $arg_list[$i], $string,1);
	}
	return $string;
}

function zaid($num1, $num2)
{

	$addition = $num1 + $num2;
	echo $addition;
}

function check($string)
{

	if(preg_match("#^zaid\(\s*?[0-9a-zA-Z_]{1,}\s*?\,\s*?[0-9]{1,}\s*?\)\;$#", $string))
	{
		$error = 0;
	}
	else
	{
		$error = 1;
	}
		return $error;
}

$string = "zaid( 14, 14 );";


if (check($string))
{
	echo "Error";
}
else
{
	eval($string);
}

// zaid with quotes : #^zaid\(\s*?(([0-9]{1,})|(\'\s*?[0-9]{1,}\s*?\'))\s*?\,\s*?(([0-9]{1,})|(\'\s*?[0-9]{1,}\s*?\'))\s*?\)\;$#


?>