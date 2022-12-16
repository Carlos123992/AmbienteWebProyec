<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $id_img = $_POST['txt_id'];
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = "localhost:3306";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName     = "pryambweb";
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insert image content into database
        $insert = $db->query("INSERT into images (id_imagen,image) VALUES ('$id_img ','$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>