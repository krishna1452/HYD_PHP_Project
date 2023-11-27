<?php
include 'dbconnect.php';
?>
<?php
if(isset($_POST['submit'])){

  $sname=$_POST['sname'];  
  $semail=$_POST['semail'];  
  $sskils=$_POST['sskils'];  
  $sphone=$_POST['sphone'];  
  $sexp=$_POST['sexp'];  
  $sfile=$_POST['sfile'];  
  $ssub=$_POST['ssub'];  
  $smessage=$_POST['smessage']; 
  
  $stmt=$dbcon->prepare('insert into instructor(sname,semail,sskils,sphone,sexp,sfile,ssub,smessage)values(:sname,:semail,:sskils,:sphone,:sexp,:sfile,:ssub,:smessage)');
  $stmt->bindParam(':sname',$sname);
  $stmt->bindParam(':semail',$semail);
  $stmt->bindParam(':sskils',$sskils);
  $stmt->bindParam(':sphone',$sphone);
  $stmt->bindParam(':sexp',$sexp);
  $stmt->bindParam(':sfile',$sfile);
  $stmt->bindParam(':ssub',$ssub);
  $stmt->bindParam(':smessage',$smessage);
  $eq=$stmt->execute();
  if($eq){
    echo "<script>alert('data added sucess....');
        location.href='instructor_register.php';
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
                        <h1 class="page-title p-2">Instructor Register</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li class=" text-warning">Instructor-Register // </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End -->

<section class="container-fluid p-5">
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col-10 py-5">
        <form action="" method="post" name="instructor" class="px-5 py-5 shadow w-50" onsubmit="return valid2()">
        <div>
        <input type="text" name="sname" placeholder="Student Name" class="form-control w-100 my-2">
        <p id="nnote"></p>
        </div>
        <div>
        <input type="email" name="semail" placeholder="Email" class="form-control w-100 my-2">
        <p id="enote"></p>
        </div>
        <div>
        <input type="text" name="sskils" placeholder="Skils" class="form-control w-100 my-2">
        <p id="snote"></p>
        </div>
        <div>
        <input type="tel" name="sphone" placeholder="Number" class="form-control w-100 my-2">
        <p id="pnote"></p>
        </div>
        <div>
        <input type="text" name="sexp" placeholder="Year Of Experience" class="form-control w-100 my-2">
        <p id="exnote"></p>
        </div>
        <div>
        <input type="file" name="sfile" placeholder="Choose File" class="form-control w-100 my-2" multiple>
        <p id="fnote"></p>
        </div>
        <div>
        <input type="text" name="ssub" placeholder="Subject" class="form-control w-100 my-2">
        <p id="subnote"></p>
        </div>
        <div>
        <textarea name="smessage" id="" cols="30" rows="10" placeholder="Message" class="form-control w-100 my-2"></textarea>
        <p id="mnote"></p>
        </div>
        <div class="py-3">
            <input type="submit" name="submit" value="Register Now" class="w-50 bg-success">
        </div>

        </form>
        <div>
    </div>

</section>





















<?php
include 'footer.php';
?>