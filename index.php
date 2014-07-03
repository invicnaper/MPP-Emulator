<html>
<form method="post" action="index.php">
<input type="text" name="cmd" style="width:200px;"/>
<input type="submit" value="Run"/>
</form>
</html>

<?php

/*function ktab2($string,$vars)
{
	$key = $vars;
	echo strtr($string, array('%d' => $key, '%f' => $key, '%c' => $key));
}*/

function ktab()
{

	$count_args = func_num_args();
	$arg_list = func_get_args();
	$string = $arg_list[0];

	for($i = 1; $i < $count_args; $i++)
	{
		$string = preg_replace("/\%d|\%c|\%f/", $arg_list[$i], $string,1);
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
		$string = preg_replace("/\%d|\%c|\%f/", $arg_list[$i], $string,1);
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
		if (preg_match('#^ktab\s*?\(((\s*?\".*\"\s*?)|(\s*?\'.*\'\s*?))((\s*?\,\s*?([a-zA-Z0-9_+]|((\".*\")|(\'.*\'))){1,}){1,})?\s*?\)\s*?;\s*?$#', $string))
		{
			$error = 0;
		}
		else
		{
			$error = 1;
		}
	}
	elseif(preg_match("#^zaid\s*?\(.*\)\s*?\;$#", $string))
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
			if(preg_match("#^na9is\s*?\(\s*?[0-9a-zA-Z_.]{1,}\s*?\,\s*?[0-9a-zA-Z_.]{1,}\s*?\)\s*?\;$#", $string))
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

if(isset($_POST['cmd']))
{
	$cmd = $_POST['cmd'];
	if(check_syntax($cmd) == 0)
	{
		eval($cmd);
	}
	else
	{
		echo "Syntax Error !";
	}
}


else
{
	echo "mpp >";
}


	// the old working one => if (preg_match('#^ktab\(((\s*?\".*\"\s*?)|(\s*?'.$special.'.*'.$special.'\s*?))((\s*?\,\s*?([a-zA-Z0-9_]|((\".*\")|('.$special.'.*'.$special.'))){1,}){1,})?\s*?\)\s*?;\s*?$#', $string))
		// if (preg_match('#^ktab\s*?\(((\s*?\"[A-Za-z0-9_"]\"\s*?)|(\s*?\'.*\'\s*?))((\s*?\,\s*?([a-zA-Z0-9_+]|((\".*\")|(\'.*\'))){1,}){1,})?\s*?\)\s*?;\s*?$#', $string))

?>