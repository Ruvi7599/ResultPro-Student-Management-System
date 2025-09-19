<?php
include('includes/config.php');

if(isset($_GET['stid']) && !empty($_GET['stid'])) {
    $studentId = $_GET['stid'];

    $sql = "DELETE FROM tblstudents WHERE StudentId = :studentId";
    $query = $dbh->prepare($sql);
    $query->bindParam(':studentId', $studentId, PDO::PARAM_INT);
    $query->execute();

    if($query->rowCount() > 0) {
        $msg = "Student record deleted successfully.";
    } else {
        $error = "Failed to delete student record.";
    }
} else {
    $error = "Student ID not provided.";
}

header("Location: manage-students-teacher.php?msg=$msg&error=$error");
?>
