<?php
class Student {
    public $id;
    public $name;
    public $batch;

    public function __construct($id, $name, $batch) {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }

    public function saveToFile($filename) {
        $data = "{$this->id},{$this->name},{$this->batch}\n";
        file_put_contents($filename, $data, FILE_APPEND);
    }

    public static function displayStudents($filename) {
        if (file_exists($filename)) {
            echo "<h3 style='text-align:left; color:green; margin-left:20px;'>Registered Students:</h3>";
            echo "<table border='1' style='margin-left:20px; font-size:18px; border-collapse: collapse;'>";
            echo "<tr style='background-color:#f2f2f2;'><th>ID</th><th>Name</th><th>Batch</th></tr>";

            $lines = file($filename);
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line) {
                    list($id, $name, $batch) = explode(",", $line);
                    echo "<tr><td>$id</td><td>$name</td><td>$batch</td></tr>";
                }
            }

            echo "</table>";
        } else {
            echo "<p style='text-align:left; color:red; margin-left:20px;'>No student data found.</p>";
        }
    }
}
?>
