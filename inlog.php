<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/inlog.css'>
        <script src='main.js'></script>
    </head>
    <body>

        <main>

            <div>
                <h1>LOG IN</h1>
                <form name="inlog" action="register-query.php" method="POST">
                    <input type="text" id='username' name="username" placeholder="username">
                    <br>
                    <input type="password" id='password'  name="password" placeholder="password">
                    <br>
                    <input type="submit" id='verstuur' name="verstuur" value="Verzend">
                </form>
            </div>

        </main>
        
    </body>
</html>