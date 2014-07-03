<?php
/*
 __  __ ____  ____    _____ __  __ _   _ _        _  _____ ___  ____  
|  \/  |  _ \|  _ \  | ____|  \/  | | | | |      / \|_   _/ _ \|  _ \ 
| |\/| | |_) | |_) | |  _| | |\/| | | | | |     / _ \ | || | | | |_) |
| |  | |  __/|  __/  | |___| |  | | |_| | |___ / ___ \| || |_| |  _ < 
|_|  |_|_|   |_|     |_____|_|  |_|\___/|_____/_/   \_\_| \___/|_| \_\

Authors  : XD4rker & Naper
Website  : www.mpp-project.eu
Facebook : fb.com/mpp.project

*/


function ktab()
{

	$count_args = func_num_args();
	$arg_list = func_get_args();
	$string = $arg_list[0];

	for($i = 1; $i < $count_args; $i++)
	{
		$string = preg_replace("/\%d|\%f|\%s|\%c/", $arg_list[$i], $string,1);
	}
	echo $string;

}
function rlstar()
{
	$count_args = func_num_args();
	$arg_list = func_get_args();
	$string = $arg_list[0];

	for($i = 1; $i < $count_args; $i++)
	{
		$string = preg_replace("/\%d|\%f|\%s|\%c/", $arg_list[$i], $string,1);
	}
	echo $string.'<br>';
}

function zaid($num1, $num2)
{

	$addition = $num1 + $num2;
	echo $addition;
}

function na9is($num1, $num2)
{
	$subtraction = $num1 - $num2;
	echo $subtraction;
}

function check_syntax($string)
{
	if(preg_match("#^ktab\s*?\(.*\)\s*?\;$#", $string))
	{
		if (preg_match('#^ktab\s*?\(((\s*?\".*\"\s*?)|(\s*?\'.*\'\s*?))((\s*?\,\s*?([a-zA-Z0-9_]|((\".*\")|(\'.*\'))){1,}){1,})?\s*?\)\s*?;\s*?$#', $string))
		{
			$error = 0;
		}
		else
		{
			$error = 1;
		}
	}
	elseif (preg_match("#^zaid\s*?\(.*\)\s*?\;$#", $string))
	{
			if(preg_match("#^zaid\s*?\(\s*?[0-9a-zA-Z_.]{1,}\s*?\,\s*?[0-9a-zA-Z_.]{1,}\s*?\)\s*?\;$#", $string))
			{
				$error = 0;
			}
			else
			{
				$error = 1;
			}
	}
	elseif (preg_match("#^na9is\s*?\(.*\)\s*?\;$#", $string)) 
	{
			if (preg_match("#^na9is\s*?\(\s*?[0-9a-zA-Z_.]{1,}\s*?\,\s*?[0-9a-zA-Z_.]{1,}\s*?\)\s*?\;$#", $string))
			{
				$error = 0;
			}
			else
			{
				$error = 1;
			}
	}
	else
	{
		$error = 1;
	}

	return $error;
}
?>
