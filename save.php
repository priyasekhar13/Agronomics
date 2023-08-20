<?php
require_once 'PHPExcel/Classes/PHPExcel.php';

// MySQL database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agronomics";

// Create MySQL database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check MySQL database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Load Excel file
$objPHPExcel = PHPExcel_IOFactory::load("crop_production.csv");

// Select the first worksheet
$worksheet = $objPHPExcel->getActiveSheet();

// Loop through the rows of the worksheet
foreach ($worksheet->getRowIterator() as $row) {
    // Get the cell values for each row
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);
    $cellValues = array();
    foreach ($cellIterator as $cell) {
        $cellValues[] = $cell->getCalculatedValue();
    }

    // Insert the cell values into MySQL database
    $sql = "INSERT INTO data(District_Name, Season, Crop) VALUES ('" . $cellValues[0] . "', '" . $cellValues[1] . "', '" . $cellValues[2] . "')";
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close MySQL database connection
$conn->close();
?>
