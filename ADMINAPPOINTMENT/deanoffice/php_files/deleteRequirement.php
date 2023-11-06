<?php
require_once 'connection.php';

if (isset($_POST['title'])) {
    $title = $_POST['title'];

    try {
        $sql = "DELETE FROM tblrequirement2 WHERE title = :title";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "success";
        } else {
            echo "error";
        }
    } catch (PDOException $e) {
        echo "error";
    }

    $conn = null;
} else {
    echo "error";
}
?>
