<form action="vars.php" method="post">
	<textarea name="str"></textarea><br>
	<input type="submit" value="Go" />
</form>

<?php

if(isset($_POST['str']))
{
	$str=$_POST['str'];
	$kw = explode("\n", $str);
 
	for($i=0;$i<count($kw);$i++)
	{
		//echo "line $i : ".$kw[$i].'<br>';
		$kw[$i] = preg_replace("#\s*(.+)=*#", "$$1", $kw[$i]);
		echo "<br>".$kw[$i];
	}

	//preg_match("/(.*)=.*/", $str, $match);
	/*if($match)
	{
		// $var_name = $match[1];
		// ${$var_name} = $match[2];
	}*/


}

else
{

}

$var = "variable";

${$var} = 1;

/*$text = "       Hello   =   'hello world';";
$text = preg_replace("#\s*(.+)=*#","$$1" , $text);
echo $text;
*/

?>