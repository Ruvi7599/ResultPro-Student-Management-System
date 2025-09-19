<?php
include('includes/config.php');

if(isset($_GET['subjectid']) && !empty($_GET['subjectid'])) {
    $subjectId = $_GET['subjectid'];

    $sql = "DELETE FROM tblsubjects WHERE id = :subjectId";
    $query = $dbh->prepare($sql);
    $query->bindParam(':subjectId', $subjectId, PDO::PARAM_INT);
    $query->execute();

    if($query->rowCount() > 0) {
        $msg = "Subject deleted successfully.";
    } else {
        $error = "Failed to delete subject.";
    }
} else {
    $error = "Subject ID not provided.";
}

header("Location: manage-subjects.php?msg=$msg&error=$error");
?>
