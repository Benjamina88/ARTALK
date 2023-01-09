<?php
     $conn = mysqli_connect("localhost","root","","artalk");
    if(ISSET($_POST['save'])){
        
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_temp = $_FILES['file']['tmp_name'];
        $location = "files/".$file_name;
        $date = date("jS M, Y");
        if(move_uploaded_file($file_temp, $location)){
            mysqli_query($conn, "INSERT INTO `storage` VALUES('', '$file_name', '$file_type', '$date')") or die(mysqli_error());
        }
    }
?>