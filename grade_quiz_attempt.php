<?php

require_once('connect_to_database.php');

function grade_quiz_attempt($attempt_id, $score) {
  $conn = connect_to_database();
  if ($conn) {
    $sql = "UPDATE quiz_attempts SET score = :score WHERE id = :attempt_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':attempt_id', $attempt_id, PDO::PARAM_INT);
    $stmt->bindParam(':score', $score, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->rowCount() > 0;  // Return true if update successful
  } else {
    return false;
  }
}

?>
