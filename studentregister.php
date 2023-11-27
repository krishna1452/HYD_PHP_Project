<?php
include 'dbconnect.php';
?>
<?php
if(isset($_POST['submit'])){

    $cname=$_POST['cname'];
    $ttype=$_POST['ttype'];
    $sname=$_POST['sname'];
    $semail=$_POST['semail'];
    $sphone=$_POST['sphone'];
    $smessage=$_POST['smessage'];
    //echo $cname,$ttype,$sname,$semail,$sphone,$smessage;
   $stmt=$dbcon->prepare('insert into studentreg(cname,ttype,sname,semail,sphone,smessage) values(:cnamed,:ttyped,:snamed,:semaild,:sphoned,:smessaged)');
   $stmt->bindParam(":cnamed",$cname);
   $stmt->bindParam(":ttyped",$ttype);
   $stmt->bindParam(":snamed",$sname);
   $stmt->bindParam(":semaild",$semail);
   $stmt->bindParam(":sphoned",$sphone);
   $stmt->bindParam(":smessaged",$smessage);
   $eq=$stmt->execute();
   if($eq){
    echo "<script>alert('data added sucess....');
        location.href='studentregister.php';
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
                        <h1 class="page-title p-2">Student Register</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li class=" text-warning">Student-Register // </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End -->

<section class="container-fluid p-5">
    <div class="row">
        <div class="col-3">
            
        </div>
        <div class="col-9">
        <form method="post" action="#" name="stureg" class="p-5 shadow w-50 " onsubmit="return valid1()">
        <div>
        <input type="text" name="cname" placeholder="Course Name" class="form-control w-100 my-2">
        <p id="cnote"></p>
        </div>
    
        <select  name="ttype"  class="form-control w-100 my-2">
            <option value="">Training Type</option>
            <option value="">class room training</option>
            <option value="">online training</option>
        </select>
        <div>
        <input type="text" name="sname" placeholder="Student Name" class="form-control w-100 my-2">
        <p id="nnote"></p>
        </div>
        <div>
        <input type="email" name="semail" placeholder="Email" class="form-control w-100 my-2">
        <p id="enote"></p>
        </div>
        <div>
        <input type="tel" name="sphone" placeholder="Number" class="form-control w-100 my-2">
        <p id="pnote"></p>
        </div>
        <div>
        <textarea name="smessage" id="" cols="30" rows="10" placeholder="Message" class="form-control w-100 my-2"></textarea>
        <p id="mnote"></p>
        </div>
        <div class="py-3">
            <input type="submit" name="submit" value="register Now" class="w-50 bg-success">
        </div>

        </form>
        <div>
    </div>
        </div>
</section>





















<?php
include 'footer.php';
?>