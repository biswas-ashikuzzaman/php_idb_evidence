<?php session_start();
 ?>
<?php
require_once 'student_class.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $student = new Student(
            $_POST['id'],
            $_POST['name'],
            $_POST['batch'],
        );
        $student->saveToFile("data.txt");
        $message = "Student data saved successfully.";
    } catch (Exception $e) {
        $message = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <h1 style=" color:black; text-align:left; font-size:30px">Student Registration Form</h1>

    <?php if ($message): ?>
        <p><strong><?php echo $message; ?></strong></p>
    <?php endif; ?>

    <form style=" text-align:left; font-size:20px; color:Black; margin:20px; width:400px; padding:20px; border:1px solid #ccc; background-color:#f9f9f9;" method="POST" action="">
        <label>ID:</label><br>
        <input type="text" name="id" placeholder="Enter ID" required><br>

        <label>Name:</label><br>
        <input type="text" name="name" placeholder="Enter Name" required><br>

        <label>Batch:</label><br>
        <input type="text" name="batch" placeholder="Enter Batch" required><br>

        <input type="submit" value="Submit">
    </form>
    <?php Student::displayStudents("data.txt"); ?>
</body>
</html>