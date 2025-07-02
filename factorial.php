<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<!-- <form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  

<?php   
    if($_POST){
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>   -->
 <!-- Loop ব্যবহার করে ফ্যাক্টোরিয়াল বের করা (ফর্মসহ)  -->
<form method="post">
    Enter a number: <input type="number" name="num">
    <input type="submit" name="submit" value="Find Factorial">
</form>

<?php
if (isset($_POST['submit'])) {
    $n = $_POST['num'];
    $fact = 1;

    if ($n < 0) {
        echo "Factorial of negative number is not defined.";
    } elseif ($n == 0 || $n == 1) {
        echo "Factorial of $n is 1";
    } else {
        for ($i = 2; $i <= $n; $i++) {
            $fact *= $i;
        }
        echo "Factorial of $n is $fact";
    }
}
?>


</body>  
</html>  