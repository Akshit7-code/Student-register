<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    echo "<h1>Student Registration Successful</h1>";
    echo "<p>Hello <strong>$name</strong>, your data has been submitted successfully!</p>";
    echo "<h2>Student Details</h2>";
    echo "<p><strong>Student Name:</strong> $name</p>";
    echo "<p><strong>Student Email:</strong> $email</p>";
    echo "<p><strong>Student Age:</strong> $age</p>";
    echo "<p><strong>Student Course:</strong> $course</p>";
    echo "<p>Thank you for registering!</p>";
}
?>
