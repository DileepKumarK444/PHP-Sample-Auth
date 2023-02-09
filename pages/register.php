<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="../js/script.js" defer ></script>
<body>
</head>
<body>
    <h1>Register</h1>
    <form action="../controller/register.php" method="post" novalidate id="reg-form">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" values="<?= $_POST['name'];?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" values="<?= $_POST['email'];?>">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
    <a href="../index.php">Home Page</a>

</body>
</html>