<?php
include('includes/config.php');

if(isset($_GET['classid']) && !empty($_GET['classid'])) {
    $classId = $_GET['classid'];

    $sql = "DELETE FROM tblclasses WHERE id = :classId";
    $query = $dbh->prepare($sql);
    $query->bindParam(':classId', $classId, PDO::PARAM_INT);
    $query->execute();

    if($query->rowCount() > 0) {
        $msg = "Class record deleted successfully.";
    } else {
        $error = "Failed to delete class record.";
    }
} else {
    $error = "Class ID not provided.";
}

header("Location: manage-classes.php?msg=$msg&error=$error");
?>
