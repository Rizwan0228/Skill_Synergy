<?php

require_once('connect_to_database.php');

function create_quiz($course_id, $title, $content) {
  $conn = connect_to_database();
  if ($conn) {
    $sql = "INSERT INTO quizzes (course_id, title, content) VALUES (:course_id, :title, :content)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':content', $content, PDO::PARAM_STR);  // Store quiz questions and answers in JSON format
    $stmt->execute();
    return $conn->lastInsertId();  // Return the ID of the newly created quiz
  } else {
    return false;
  }
}

?>
