<?php


$course_id = $_POST['course_id'];
$name = $_POST['name'];
$description = $_POST['description'];

$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "elearning";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into courses(course_id, name, description) values(?, ?, ?)");
    $stmt->bind_param("iss", $course_id, $name, $description);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
    header('location: data_entry.php');
    exit;
}
?>
