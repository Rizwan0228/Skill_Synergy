<?php

require_once('connect_to_database.php');

function grade_assignment($submission_id, $grade, $feedback) {
  $conn = connect_to_database();
  if ($conn) {
    $sql = "UPDATE submissions SET grade = :grade, feedback = :feedback WHERE id = :submission_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':submission_id', $submission_id, PDO::PARAM_INT);
    $stmt->bindParam(':grade', $grade, PDO::PARAM_STR);  // Consider using DECIMAL for more precise grades
    $stmt->bindParam(':feedback', $feedback, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->rowCount() > 0;  // Return true if update successful
  } else {
    return false;
  }
}

?>
