<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $date = $_POST['date'];
        $password = $_POST['password'];
        // connection \\
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "database4";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = "INSERT INTO testsign (name,email,tel,date,password) VALUES ('$name','$email','$tel','$date','$password')";
        $query = mysqli_query($conn,$sql);
        echo "<script>
            alert('Sign UP Sccuessfull!!')
        </script>";

    }
?>
