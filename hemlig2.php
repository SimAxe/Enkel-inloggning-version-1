<?php
//Inkluderar våra inloggnings-funktioner
require ("login.function.php");
?>

<html>
<head>
   <meta http-equiv="Content-Type" 
     content="text/html;charset=utf-8" />
    <title> Enkelt inloggning </title>
</head>
<body>

<?php
if ( is_logon() )
{
?>
    <a href="index.php?logout">Logga ut</a><br>
    <a href="index.php">Till startsidan</a><br>
    <p>
        Hemligt innehåll på sida 2!
    </p>
<?php
}
else
{
?>
Du är inte inloggad! <a href="index.php">Logga in här</a>
<?php
}
?>
</body>
</html>