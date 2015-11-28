<?php
if (isset($_POST['login'])) {
    session_start();
    if ($_POST['username'] == 'datetime' && $_POST['password'] == 'parsclick') {
        $_SESSION['authenticated'] = time();
        header('Location: restricted1.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Limited Session</title>
</head>
<body>

</body>
<h1>Time Limit on Inactive Session</h1>
<?php
if (isset($_GET['expired'])) {
    echo '<p>Your session has expired. Please log in again.</p>';
}
?>
<form method="post">
    <p>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <input type="submit" name="login" value="Log In">
    </p>
</form>
</html>