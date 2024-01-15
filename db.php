<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];

        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "database4";

        $conn = new mysqli($host,$user,$pass,$dbname);
        if($conn->connect_error){
            die("Connection Falid".$conn->connect_error);
        }
        echo "";
    }
?>