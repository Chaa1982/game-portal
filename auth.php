<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php" ?>


    <div class="feedback">
        <div class="container">
            <h2>Authorization</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form method="post" action="/lib/auth.php">
                <div class="inline">
                    <div>
                        <label>Login</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                </div>
                <button type="submit">to authorization</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>

</html>