<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Number Check</title>
</head>
<body>
    <form method="post">
        Enter a Number: 
        <input type="number" name="num" required>
        <input type="submit" name="submit" value="Check Prime">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['num'];
        $isPrime = true;

        if ($n <= 1) {
            echo "$n is not a Prime Number.";
            $isPrime = false;
        } else {
            for ($i = 2; $i<$n; $i++) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                echo "$n is a Prime Number.";
            } else {
                echo "$n is NOT a Prime Number.";
            }
        }
    }
    ?>
</body>
</html>
