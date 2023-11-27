<?php
include 'dbconnect.php';
$id=$_GET['val'];
$opr=$_GET['opr'];

if(isset($_POST['submit'])){

    $sname=$_POST['sname'];  
    $semail=$_POST['semail'];  
    $sskils=$_POST['sskils'];  
    $sphone=$_POST['sphone'];  
    $sexp=$_POST['sexp'];  
    $sfile=$_POST['sfile'];  
    $ssub=$_POST['ssub'];  
    $smessage=$_POST['smessage']; 
    
    $stmt=$dbcon->prepare('update instructor set sname=:sname,semail=:semail,sskils=:sskils,sphone=:sphone,sexp=:sexp,sfile=:sfile,ssub=:ssub,smessage=:smessage where id=:id');
    $stmt->bindParam(':sname',$sname);
    $stmt->bindParam(':semail',$semail);
    $stmt->bindParam(':sskils',$sskils);
    $stmt->bindParam(':sphone',$sphone);
    $stmt->bindParam(':sexp',$sexp);
    $stmt->bindParam(':sfile',$sfile);
    $stmt->bindParam(':ssub',$ssub);
    $stmt->bindParam(':smessage',$smessage);
    $stmt->bindParam(':id',$id);

    $eq=$stmt->execute();
    if($eq){
      echo "<script>alert('updated data sucess....');
          location.href='delete_edit_instructor.php';
          </script>";
      } else {
          echo "<script>alert('unable to update the data....');</script>";
  }
    }

if($opr=='delete'){
    $stmt=$dbcon->prepare('delete from instructor where id=:id');
    $stmt->bindParam(':id',$id);
    $eq=$stmt->execute();
    if($eq){
        echo "<script>alert('data deleted sucess....');
        location.href='delete_edit_instructor.php';
        </script>";
    } else {
        echo "<script>alert('unable to delete the data....');</script>";

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
                        <h1 class="page-title p-2">Delete_Edit_instructorRegister</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li  class=" text-warning">Instructor-Register // </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End ---->
        <section class="container-fluid p-5">
        <div class="row">
        <div class="col-3">
            
        </div>
            <div class="col-9">
                <?php
                $stmt=$dbcon->prepare('select * from instructor where id=:id');
                $stmt->bindParam(':id',$id);
                $eq=$stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
               echo'
               <form action="" method="post" class="px-5 py-5 shadow w-50 ">
        <div>
        <input type="text" name="sname" placeholder="student name" class="form-control w-100 my-2" value='.$row['sname'].'>
        </div>
        <div>
        <input type="email" name="semail" placeholder="Email" class="form-control w-100 my-2" value='.$row['semail'].'>
        </div>
        <div>
        <input type="text" name="sskils" placeholder="skils" class="form-control w-100 my-2" value='.$row['sskils'].'>
        </div>
        <div>
        <input type="tel" name="sphone" placeholder="number" class="form-control w-100 my-2" value='.$row['sphone'].'>
        </div>
        <div>
        <input type="text" name="sexp" placeholder="year of experience" class="form-control w-100 my-2" value='.$row['sexp'].'>
        </div>
        <div>
        <input type="file" name="sfile" placeholder="choose file" class="form-control w-100 my-2" multiple value='.$row['sfile'].'>
        </div>
        <div>
        <input type="text" name="ssub" placeholder="subject" class="form-control w-100 my-2" value='.$row['ssub'].'>
        </div>
        <div>
        <textarea name="smessage" id="" cols="30" rows="10" placeholder="message" class="form-control w-100 my-2">
        '.$row['smessage'].'
        </textarea>
        </div>
        <div class="py-3">
            <input type="submit" name="submit" value="submit" class="w-50 bg-success">
        </div>

        </form>
        <div>
        ';
                }
?>

            </div>
            </section>




<?php
include 'footer.php';
?>