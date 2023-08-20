<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    echo "Welcome, " . $username . "!";
}
?>
<html>
    <head>
        <title>SIGN IN</title>
    </head>
    <body>
        <center><b>SIGN IN</b></center><br><br>
        <form action="pro3.php" method="post">
            <input type="text" placeholder="Username" id="username" name="username" required><br>
            <input type="password" placeholder="Password" id="password" name="password" required><br>
            <button type="submit">Submit</button>
        </form>
    </body> 
</html>
