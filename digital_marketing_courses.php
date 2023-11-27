<?php
include 'dbconnect.php';
?>
<?php
if (isset($_POST['submit'])) {

    $sname=$_POST['sname'];
    $semail=$_POST['semail'];
    $sphone=$_POST['sphone'];
    $smessage=$_POST['smessage'];

    $stmt=$dbcon->prepare('insert into digitalmar (sname,semail,sphone,smessage) values(:sname,:semail,:sphone,:smessage)');
    $stmt->bindParam(":sname",$sname);
    $stmt->bindParam(":semail",$semail);
    $stmt->bindParam(":sphone",$sphone);
    $stmt->bindParam(":smessage",$smessage);
    $eq=$stmt->execute();
    if($eq) {
        echo "<script>alert('data added sucess....');
        location.href='digital_marketing_courses.php';
        </script>";
    } else {
        echo "<script>alert('unable to add the data....');</script>";
}

}
?>

<?php
include 'header.php';
?>



<section class="container-fluid py-5 bg-primary">
    <div class="row">
        <div class="col-6">
          
        </div>
        <div class="col-6">
        <form action="" method="post" class="p-5 shadow w-50 ">
            <h5 class="text-center p-3">Register for Demo</h5>
        <div>
        <input type="text" name="sname" placeholder="Name" class="form-control w-100 my-2 px-4">
        </div>
        <div>
        <input type="email" name="semail" placeholder="Email" class="form-control w-100 my-2 px-4">
        </div>
        <div>
        <input type="tel" name="sphone" placeholder="Phone" class="form-control w-100 my-2 px-4">
        </div>
        <div>
        <textarea name="smessage" id="" cols="30" rows="10" placeholder="Message" class="form-control w-100 my-2 px-4"></textarea>
        </div>
        <div class="py-3">
            <input type="submit" name="submit" value="submit" class="w-50 bg-warning border-0 px-4">
        </div>

        </form>
        <div>
    </div>

</section>











<?php
include 'footer.php';
?>