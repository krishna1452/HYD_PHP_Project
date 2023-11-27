<?php
include 'dbconnect.php';
$id=$_GET['val'];
//echo "$id";

if (isset($_POST['submit'])) {

    $sname=$_POST['sname'];
    $semail=$_POST['semail'];
    $sphone=$_POST['sphone'];
    $smessage=$_POST['smessage'];

    $stmt=$dbcon->prepare('update studata set name=:snamed,email=:semaild,phone=:sphoned,message=:smessaged where id=:id');
    $stmt->bindParam(':snamed',$sname);
    $stmt->bindParam(':semaild',$semail);
    $stmt->bindParam(':sphoned',$sphone);
    $stmt->bindParam(':smessaged',$smessage);
    $stmt->bindParam(':id',$id);
    $eq=$stmt->execute();
    if($eq) {
        echo "<script>alert('data updated sucess....');
        location.href='deletestupdo.php';
        </script>";
    } else {
        echo "<script>alert('unable to update the data....');</script>";
}

}
?>

<?php
include 'header.php';
?>
<div class="container-fluid breadcrumbs">
                <div class=" container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                        <h1 class="page-title">Edit Data</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li>Edit - </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End -->
<section class="container-fluid">
    <div class="row">
        <div class="col-6">
            <?php
            include 'sidebarpdo.php';
     
        ?>
        </div>
        
        <div class="col-6">
            
       <?php
       
       //echo "$id";
       
        $stmt=$dbcon->prepare('select * from studata where id=:id');
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '
            <form method="post" class="p-5 shadow w-50">
        <div>
        <input type="text" name="sname" placeholder="student name" value='.$row["name"].' class="form-control w-100 my-2">
        </div>
        <div>
        <input type="email" name="semail" placeholder="Email" class="form-control w-100 my-2" value='.$row["email"].'>
        </div>
        <div>
        <input type="tel" name="sphone" placeholder="number" class="form-control w-100 my-2" value='.$row["phone"].'>
        </div>
        <div>
        <textarea name="smessage" id="" cols="30" rows="10" placeholder="message" class="form-control w-100 my-2" value='.$row["message"].'></textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Edit" class="bg-success">
        </div>

        </form>

        
            ';
        }
       ?>
        </div>
       

    </div>
</section>







            











<?php
include 'footer.php';
?>
