<?php
//Måste vara överst eftersom session_start() finns i filen
require ("login.function.php");

if ( isset($_GET['logout']) )
{
    logout();
	header("Location: ./");
}

?>

<html>
<head>
<meta http-equiv="Content-Type" 
      content="text/html;charset=utf-8" />
    <title> Enkelt inloggning </title>
</head>
<body>

<?php

//Om vårt inloggningsformulär är postat
if ( isset($_POST['login_form']) )
{
    $result = login ($_POST['username'], $_POST['password']);

    //Om $result inte är tom
    if ( !empty($result) )
   {
       echo "<p>$result</p><br>";
   }
}


// Om vi är inloggad
if ( is_logon() )
{
    echo 'Inloggad (<a href="?logout">logga ut</a>)<br>';
}
else
{
?>
    <form action="" method="post">
        Användarnamn:<br>
        <input type="text" name="username"><br>
        Lösenord:<br>
        <input type="password" name="password"><br>
        <input type="hidden" name="login_form" value="1">
        <input type="submit" value="Logga in">
    </form>

<?php
}
?>
	<a href="hemlig.php">Hemlig sida</a><br>
    <a href="hemlig2.php">Hemlig sida 2</a>
</body>
</html>