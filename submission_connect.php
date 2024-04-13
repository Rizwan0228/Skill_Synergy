<?php

$title = $_POST['title'];
$description = $_POST['description'];
$assignment_id = $_POST['assignment_id'];
$status = 'pending';

$pdf_name = $_FILES['pdf']['name'];
$pdf_tmp_name = $_FILES['pdf']['tmp_name'];
move_uploaded_file($pdf_tmp_name, "pdf/" . $pdf_name);

$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "elearning";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into assignment(assignment_id, title, description, status, pdf) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $assignment_id, $title, $description, $status, $pdf_name);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
    header('location: submit_assignment.php');
    exit;
}
?>
