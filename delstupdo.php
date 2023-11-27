<?php
include 'dbconnect.php';
$id=$_GET['val'];
$stmt=$dbcon->prepare("delete from studata where id=:id");
$stmt->bindParam(':id', $id);
$eq=$stmt->execute();
if($eq) {
    echo "<script>alert('deleted data sucess....');
    location.href='deletestupdo.php';
    </script>";
} else {
    echo "<script>alert('unable to delete the data....');</script>";
}

?>
