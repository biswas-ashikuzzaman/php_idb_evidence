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
        <input type="submit" name="submit" value="Find Factorial">
    </form>
    <?php 
    if (isset($_POST['submit'])) {
        $n=$_POST['num'];
        $fact=1;
        if($n<0){
            echo"Factorial of negative number is not defined.";
        } elseif($n==0 || $n==1){
            echo"Factorial of $n is 1";
        } else{
            for($i=2;$i<=$n;$i++){
                $fact *=$i;
            }
            echo "Factorial of $n is $fact";
        }
    }
    ?>
</body>
</html>