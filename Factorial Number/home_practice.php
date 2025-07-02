<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Number</title>
</head>
<body>
    <form action="" method="post">
        Enter a number to calculate its factorial:
        <input type="number" name="num" required>
        <input type="submit" value="Calculate">
    </form>
    <?php 
    if(isset($_POST['submit'])) {
        $number=_POST['num'];
        $factorial=1;
    }
    
    ?>
</body>
</html>