<?php
/****************************************************************************************************
 * Ett enkelt inloggningssystem utan krav på databas. Systemet är fritt att använda och modifiera.
 * Skrivet av Felix Stridsberg för webbdesign.ifokus.se 20-05-2011
 ****************************************************************************************************/
 
// Vi börjar med att starta sessionsfunktionen 
// eftersom sessioner kommer att användas
session_start();



/***************************************************
 * Vi skapar en funktion för inloggning.
 * Denna funktion kommer att behöva 2 parametrar.
 * En för användarnamn och en för lösenord.
 ***************************************************/
function login($username, $password)
{
    //Rätt användarnamn och lösenord
    $correct_user = "Admin";
    $correct_pass = "test";

    //Steg 1
    if ( !empty($username) && !empty($password) )
    {

        //Steg 2
        if ( $username == $correct_user 
             && $password == $correct_pass )
        {
             //Steg3
             $_SESSION['user_login'] = TRUE;
        }

        //Om lösenord eller användarnamn är fel
        else
        {
            return "Användarnamnet eller lösenordet är fel. 
                    Kontrollera dessa och försök igen...";
        }

    }

    //Om användarnamn eller lösen är tomt
    else
    {
        return "Du måste ange lösenord och användarnamn.";
    }

}



/*********************************************
 * Funktion för att logga ut
 *********************************************/
function logout()
{
    $_SESSION['user_login'] = FALSE;
    session_destroy();
}



/**********************************************************
 * Funktion för att kontrollera om användaren är inloggad.
 * Denna funkktion ska retunera sant (TRUE) om användaren 
 * är inloggad och falskt (FALSE) i annat fall
 *********************************************************/
function is_logon()
{
    if ( isset($_SESSION['user_login']) 
         && $_SESSION['user_login'] == TRUE )
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}



?>