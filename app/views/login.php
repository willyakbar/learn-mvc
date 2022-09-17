<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="<?=BASEURL?>assets/css/globals.css">
    <link rel="stylesheet" href="<?=BASEURL?>assets/css/colors.css">
    <link rel="stylesheet" href="<?=BASEURL?>assets/css/login.css">
    
</head>
<body>
    <?php
        if(isset($_SESSION['flash_msg'])){
            Helper::flash_msg();
        }
    ?>
    <div class="container">
        <h1>login</h1>
        <form class="form" method="post" action="<?=BASEURL?>auth/login">
            <div class="form-item">
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-item">
                <label for="username">password</label>
                <input type="password" name="password" id="password">
            </div>

            <button type="submit" class="btn-dark">login</button>
        </form>
    </div>

    <script src="<?=BASEURL?>assets/js/globals.js"></script>
</body>
</html>