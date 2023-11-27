<?php
include 'dbconnect.php';
?>
<?php
if (isset($_POST['submit'])) {

    $sname=$_POST['sname'];
    $semail=$_POST['semail'];
    $sphone=$_POST['sphone'];
    $smessage=$_POST['smessage'];

    $stmt=$dbcon->prepare('insert into studata (name,email,phone,message) values(:snamed,:semaild,:sphoned,:smessaged)');
    $stmt->bindParam(":snamed",$sname);
    $stmt->bindParam(":semaild",$semail);
    $stmt->bindParam(":sphoned",$sphone);
    $stmt->bindParam(":smessaged",$smessage);
    $eq=$stmt->execute();
    if($eq) {
        echo "<script>alert('data added sucess....');
        location.href='admindashbordpdo.php';
        </script>";
    } else {
        echo "<script>alert('unable to add the data....');</script>";
}

}
?>

<?php
include 'header.php';
?>

<!-- Breadcrumbs Start -->
<div class="container-fluid breadcrumbs">
                <div class=" container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                        <h1 class="page-title">Register</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li>Register - </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End -->

<section class="container-fluid p-5">
    <div class="row">
        <div class="col-4">
          
        </div>
        <div class="col-8">
        <form action="" method="post" class="p-5 shadow w-50 ">
        <div>
        <input type="text" name="sname" placeholder="student name" class="form-control w-100 my-2">
        </div>
        <div>
        <input type="email" name="semail" placeholder="Email" class="form-control w-100 my-2">
        </div>
        <div>
        <input type="tel" name="sphone" placeholder="number" class="form-control w-100 my-2">
        </div>
        <div>
        <textarea name="smessage" id="" cols="30" rows="10" placeholder="message" class="form-control w-100 my-2"></textarea>
        </div>
        <div class="py-3">
            <input type="submit" name="submit" value="register Now" class="w-50 bg-success">
        </div>

        </form>
        <div>
    </div>

</section>





















<?php
include 'footer.php';
?>