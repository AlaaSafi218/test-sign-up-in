<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="form">
        <form name="form" action="connection_in.php" method="POST">
            <span><ion-icon name="person"></ion-icon></span>
            <label>username:</label>
            <input type="text" name="name"><br><br>
            <span><ion-icon name="lock-closed"></ion-icon></span>
            <label>password:</label>
            <input type="password" name="password"><br><br>
            <input type="submit" id="btn" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>