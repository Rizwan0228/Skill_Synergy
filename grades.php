<?php
require_once('connect_to_database.php');

// Logic to retrieve grades and feedback for completed assessments (grades.php)
$user_id = $_SESSION['user']['id'];  // Assuming user session exists

$conn = connect_to_database();
$sql = "SELECT s.*, a.title, a.grade, a.feedback
        FROM submissions s
        INNER JOIN assignments a ON s.assignment_id = a.id
        WHERE s.student_id = :user_id
        UNION
        SELECT qa.*, q.title, qa.score, NULL AS feedback  -- Handle quizzes without feedback
        FROM quiz_attempts qa
        INNER JOIN quizzes q ON qa.quiz_id = q.id
        WHERE qa.student_id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display grades and feedback for assignments and quizzes
?>
