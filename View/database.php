<?php

    function OpenDB()
    {
        return mysqli_connect("127.0.0.1:3308", "root", "", "pryambweb");
    }

    function CloseDB($enlace)
    {
        mysqli_close($enlace);
    }

    

?>
<?php
function escape($string)
{
    global $conn;    
    return mysqli_real_escape_string($conn,$string);
}

function clean($string)
{
	$string = trim($string);
	$string = stripcslashes($string);
	$string = htmlentities($string);

	return $string;
}

?>