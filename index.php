<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="form">
        <form name="form" action="connection_up.php" method="POST">
            <span><ion-icon name="person"></ion-icon></span>
            <label>Username:</label>
            <input type="text" name="name"><br><br>
            <span><ion-icon name="mail"></ion-icon></span>
            <label>E-mail</label>
            <input type="email" name="email"><br><br>
            <span><ion-icon name="call"></ion-icon></span>
            <label>Phone:</label>
            <input type="tel" name="tel"><br><br>
            <span><ion-icon name="calendar"></ion-icon></span>
            <label>Date</label>
            <input type="date" name="date"><br><br>
            <span><ion-icon name="lock-closed"></ion-icon></span>
            <label>Password:</label>
            <input type="password" name="password"><br><br>
            <input type="submit" id="btn" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
