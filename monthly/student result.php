<?php
class Student {
    private $id;
    private $name;
    private $batch;
    private static $resultFile = "results.txt";

    // Constructor to initialize student data
    public function __construct($id, $name, $batch) {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;

        echo "Student Information:<br>";
        echo "ID: {$this->id}<br>";
        echo "Name: {$this->name}<br>";
        echo "Batch: {$this->batch}<br><br>";
    }

    // Method to search and print result from file using ID
    public function result($searchId) {
        if (!file_exists(self::$resultFile)) {
            echo "Result file not found!<br>";
            return;
        }

        $lines = file(self::$resultFile, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            list($id, $result) = explode(":", $line);
            if (trim($id) == $searchId) {
                echo "Result for ID {$id}: {$result}<br>";
                return;
            }
        }

        echo "No result found for ID {$searchId}.<br>";
    }
}

// ----------- Create Result File (Optional - Run Once) -------------
file_put_contents("results.txt", "101:A+\n102:B\n103:A");

// ----------- Object Creation and Result Search -------------
$student = new Student(101, "Ashik Biswas", "Batch 52");
$student->result(101);
?>
