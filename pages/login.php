<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="../js/login_validation.js" defer ></script>
</head>
<body>
    <h1>Login</h1>
    <form action="../controller/login.php" method="post" novalidate id="login-form">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" values="<?= $_POST['email'];?>">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
    <a href="../index.php">Home Page</a>
</body>
</html>