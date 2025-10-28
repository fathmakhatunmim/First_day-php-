<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first_day_php</title>
</head>

<body>


    <!-- <form action="index.php" method="get"> -->

        <!-- <form action="index.php" method="post">

        <h2>First day php </h2>
        <label>username:</label>
        <input type="text" name="username"><br><br>
        <label>password:</label>
        <input type="Password" name="Password"><br><br>
        <input type="submit" value="Log in"><br><br>

    </form> -->

<!-- order PIZZA -->
 <form action="index.php" method="post">

    <label>quantity:</label>
    <input type="text" name="quantity">
    <input type="submit" value="total">



 </form>


    <?php


    //isset = key check/ variable / array key
    //$_GET = key = input name, value (same as a user)

//  if (isset($_GET["username"]) && isset($_GET["Password"])) {
//     // echo $_GET["username"]."<br>";
//     // echo $_GET["Password"]."<br>";

//     // echo "{$_GET["username"]} <br>";
//     // echo "{$_GET["Password"]} <br>";

    
// } 

// if (isset($_POST["username"]) && isset($_POST["Password"])){
//     echo "{$_POST["username"]} <br>";
//      echo "{$_POST["Password"]} <br>";
// }  


//oder pizza
$items= "pizza";
$price = 5.99;
 $quantity = $_POST["quantity"];
 $total= null;
 $total = $quantity * $price ;


 echo"you have ordered {$quantity} x {$items}/s <br>" ;
 echo "you total is: \${$total}";




    ?>
</body>

</html>