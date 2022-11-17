<?php

    function OpenDB()
    {
        return mysqli_connect("127.0.0.1:3306", "root", "", "pryambweb");
    }

    function CloseDB($enlace)
    {
        mysqli_close($enlace);
    }

?>