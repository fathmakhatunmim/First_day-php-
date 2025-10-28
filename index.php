<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first_day_php</title>
</head>

<body>
    <form action="index.php" method="get">

        <h2>First day php </h2>
        <label>username:</label>
        <input type="text" name="username"><br><br>
        <label>password:</label>
        <input type="Password" name="Password"><br><br>
        <input type="submit" value="Log in"><br><br>

    </form>

    <?php
    //isset = key check
    //$_GET = key = input name, value (same as a user)

 if (isset($_GET["username"]) && isset($_GET["Password"])) {
    // echo $_GET["username"]."<br>";
    // echo $_GET["Password"]."<br>";

    echo "{$_GET["username"]} <br>";
    echo "{$_GET["Password"]} <br>";
}
    ?>
</body>

</html>