<?php
?>

<!DOCTYPE html>
<head>
 <title>login</title>
 <link rel="stylesheet" href="../styles/form.css">
 <link rel="stylesheet" href="../styles/reset.css">
</head>
<body>
    <form name="login" action="http://localhost/server/handling/login.php" method="post">
        <div>
            <input type="text" name="username" id="username" placeholder='Username'>
            <input type="password" name="password" id="password" placeholder='Password'>
        </div>
        <input type="button" value="Register">
        <p>Not a member <a href="register.php" class="button_link">REGISTER</a></p>
    </form>
</body>
</html>