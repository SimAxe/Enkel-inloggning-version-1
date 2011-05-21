<?php
//Inkluderar våra inloggnings-funktioner
require ("login.function.php");

//Om vi inte är inloggad
if ( !is_logon() )
{
	//Skicka oss till index.php
    header("Location: index.php");
	
	//Avsluta, visa inge mer kod på denna sida
	exit;
}

//Allt här under kommer ebart att visas för
//dem som är inloggade
?>

<html>
<head>
<meta http-equiv="Content-Type" 
      content="text/html;charset=utf-8" />
    <title> Enkelt inloggning </title>
</head>
<body>
<a href="index.php?logout">Logga ut</a><br>
<a href="index.php">Till startsidan</a><br>
<p>
	Hemligt innehåll på sida 1!
</p>
</body>
</html>