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

/**
* 
*/
class Mpp
{
	protected $string;
	
	function __construct($string)
	{
		$this->string = $string;	
	}

	public function check_syntax($string)
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

	public function execute($string)
	{

	}

	public function check_valid($string)
	{

	}

	public function error_handler()
	{

	}

}











?>