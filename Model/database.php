<?php

function OpenDB()
    {
       
<<<<<<< HEAD
        return mysqli_connect("127.0.0.1:3308", "root", "", "pryambweb");
=======
        return mysqli_connect("127.0.0.1:3306", "root", "", "pryambweb");
>>>>>>> f581c9d5214b9648eb808938a5b58349c5ece5e0
    }

    function CloseDB($enlace)
    {
        mysqli_close($enlace);
    }
?>
