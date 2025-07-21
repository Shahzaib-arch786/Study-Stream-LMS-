<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "Admin_LMS"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $faculty_name = $_POST['faculty_name'];
    $sex = $_POST['sex'];
    $faculty_rollno = $_POST['faculty_rollno'];
    $birthdate = $_POST['birthdate'];
    $home_address = $_POST['home_address'];
    $home_phone = $_POST['home_phone'];
    $father_name = $_POST['father_name'];
    $father_occupation = $_POST['father_occupation'];
    $father_cell_phone = $_POST['father_cell_phone'];
    $father_email = $_POST['father_email'];
    $mother_name = $_POST['mother_name'];
    $mother_occupation = $_POST['mother_occupation'];
    $mother_cell_phone = $_POST['mother_cell_phone'];
    $mother_email = $_POST['mother_email'];
    $status = $_POST['status'];
    $emergency_contact1 = $_POST['emergency_contact1'];
    $emergency_contact1_phone = $_POST['emergency_contact1_phone'];
    $emergency_contact2 = $_POST['emergency_contact2'];
    $emergency_contact2_phone = $_POST['emergency_contact2_phone'];

    
    $stmt = $conn->prepare("INSERT INTO faculty (faculty_name, sex, faculty_rollno, birthdate, home_address, home_phone, father_name, father_occupation, father_cell_phone, father_email, mother_name, mother_occupation, mother_cell_phone, mother_email, status, emergency_contact1, emergency_contact1_phone, emergency_contact2, emergency_contact2_phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssssssss", $faculty_name, $sex, $faculty_rollno, $birthdate, $home_address, $home_phone, $father_name, $father_occupation, $father_cell_phone, $father_email, $mother_name, $mother_occupation, $mother_cell_phone, $mother_email, $status, $emergency_contact1, $emergency_contact1_phone, $emergency_contact2, $emergency_contact2_phone);

    
    if ($stmt->execute()) {
        
        header("Location: addFaculty.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
}

// Close the database connection
$conn->close();
?>