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

include "functions.php";

	$cmd = $_POST['cmd'];
	if(check_syntax($cmd) == 0)
	{
		eval($cmd);
	}
	else
	{
		echo "Syntax Error !";
	}


?>
