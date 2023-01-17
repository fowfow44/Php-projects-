<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root', '', 'test1') or die("connection failed:" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['position'])) {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $position= $_POST['position'];

        $sql = "INSERT INTO 'users' ('name', 'email', 'phone', 'position') VALUES ('$name', '$email', '$phone', '$position')";
    
        $query = mysqli_query($conn,$sql); 
        if($query) {
            echo 'Entry Successfull';
        }
        else {
            echo 'error occured';
        }
    }

}

?>