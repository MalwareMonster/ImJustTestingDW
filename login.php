<?php

$valid_username = "admin";
$valid_password = "secret123";

if (
    !isset($_SERVER['PHP_AUTH_USER']) ||
    !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] !== $valid_username ||
    $_SERVER['PHP_AUTH_PW'] !== $valid_password
) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');

    echo "Authentication required.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Protected Page</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>You have successfully authenticated.</p>
</body>
</html>
