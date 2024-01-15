<?php
    include ("db.php");
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM testsign WHERE name='$name' AND password='$password'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $count = mysqli_num_rows($query);
        if($count){
            header ("Location: home.php");
        }
        else{
            echo "<script>
                alert('sign in falid')
                </script>";
        }
    }
?>