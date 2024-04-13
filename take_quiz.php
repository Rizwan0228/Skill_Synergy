<?php

require_once('connect_to_database.php');

function take_quiz($quiz_id, $student_id, $answers) {
  $conn = connect_to_database();
  if ($conn) {
    $sql = "INSERT INTO quiz_attempts (quiz_id, student_id, attempted_at, score, answers)
            VALUES (:quiz_id, :student_id, NOW(), 0, :answers)";  // Score will be calculated later
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':quiz_id', $quiz_id, PDO::PARAM_INT);
    $stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
    $stmt->bindParam(':answers', json_encode($answers), PDO::PARAM_STR); // Store student answers as JSON
    $stmt->execute();
    return $conn->lastInsertId();  // Return the ID of the quiz attempt
  } else {
    return false;
  }
}

?>

