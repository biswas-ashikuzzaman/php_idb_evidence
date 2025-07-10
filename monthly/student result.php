<?php
class Student
{
    private $id;
    private $name;
    private $batch;
    private static $resultFile = "results.txt";

    // Constructor to initialize student data
    public function __construct($id, $name, $batch)
    {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;

        echo "<h3>Student Information</h3>";
        echo "ID: {$this->id}<br>";
        echo "Name: {$this->name}<br>";
        echo "Batch: {$this->batch}<br><br>";
    }

    // Method to search and show result by ID
    public function result($searchId)
    {
        if (!file_exists(self::$resultFile)) {
            echo "Result file not found!<br>";
            return;
        }

        $lines = file(self::$resultFile, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            list($id, $result) = explode(":", $line);
            if (trim($id) == $searchId) {
                echo "<strong>Result for ID {$id}: {$result}</strong><br>";
                return;
            }
        }

        echo "<strong>No result found for ID {$searchId}.</strong><br>";
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>

<head>
    <title>Student Result Finder</title>
</head>

<body>
    <h2>Enter Student Information</h2>
    <form method="post">
        ID: <input type="number" name="id" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        Batch: <input type="text" name="batch" required><br><br>
        <input type="submit" name="submit" value="Find Result">
    </form>

    <?php
    // Process the form
    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $batch = $_POST["batch"];

        $student = new Student($id, $name, $batch);
        $student->result($id);
    }
    ?>
</body>

</html>