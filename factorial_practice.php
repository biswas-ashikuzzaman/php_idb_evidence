<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="" method="post">
        Enter a Number :
        <input type="number" name="num" id="num" required>
    </form>
    <?php 
    if (isset($_POST['submit'])) {
        $n=$_Post['num'];
        $fact=1;
        if($n<0){
            echo"Factorial of negative number is not defined.";
        } elseif($n==0 || $n==1){
            echo"Factorial of $n is 1";
        } else{
            $fact=1
        }
    }
    ?>
</body>
</html>