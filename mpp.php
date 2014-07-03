<!--
 __  __ ____  ____    _____ __  __ _   _ _        _  _____ ___  ____  
|  \/  |  _ \|  _ \  | ____|  \/  | | | | |      / \|_   _/ _ \|  _ \ 
| |\/| | |_) | |_) | |  _| | |\/| | | | | |     / _ \ | || | | | |_) |
| |  | |  __/|  __/  | |___| |  | | |_| | |___ / ___ \| || |_| |  _ < 
|_|  |_|_|   |_|     |_____|_|  |_|\___/|_____/_/   \_\_| \___/|_| \_\

Authors  : XD4rker & Naper
Website  : www.mpp-project.eu
Facebook : fb.com/mpp.project

-->

<html>
	
	<head>
	<title>MPP Emulator</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/load.js"></script>
	<link rel="stylesheet" href="css/style.css"/>

	</head>

	<body>
		<form name="Test" align="center">
			<p>PHP MPP-Emulator</p>
			<textarea name="cmd" rows="10" cols="50"></textarea><br>
			<input value="Run" type="button" id="submit" onclick='JavaScript:xmlhttpPost("emul.php")'>
			<fieldset>
    			<legend>Output</legend>
					<div id="sentback"></div>
			</fieldset>
		</form>
	</body>
	
</html>