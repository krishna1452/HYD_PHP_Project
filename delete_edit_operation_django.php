
<?php
include 'dbconnect.php';
$id=$_GET['val'];
$opr=$_GET['opr'];

if(isset($_POST['submit'])){

    $sname=$_POST['sname'];  
    $semail=$_POST['semail'];  
    $sphone=$_POST['sphone'];   
    $smessage=$_POST['smessage']; 
    
    $stmt=$dbcon->prepare('update django set sname=:sname,semail=:semail,sphone=:sphone,smessage=:smessage where id=:id');
    $stmt->bindParam(':sname',$sname);
    $stmt->bindParam(':semail',$semail);
    $stmt->bindParam(':sphone',$sphone);
    $stmt->bindParam(':smessage',$smessage);
    $stmt->bindParam(':id',$id);

    $eq=$stmt->execute();
    if($eq){
      echo "<script>alert('updated data sucess....');
          location.href='delete_edit_django_courses.php';
          </script>";
      } else {
          echo "<script>alert('unable to update the data....');</script>";
  }
    }

if($opr=='delete'){
    $stmt=$dbcon->prepare('delete from django where id=:id');
    $stmt->bindParam(':id',$id);
    $eq=$stmt->execute();
    if($eq){
        echo "<script>alert('data deleted sucess....');
        location.href='delete_edit_django_courses.php';
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
                        <h1 class="page-title p-2">Django_Courses_Register</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li  class=" text-warning">Django-Courses_Register // </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End -->


<section class="container py-5">
    <?php
     $stmt=$dbcon->prepare('select * from django where id=:id');
     $stmt->bindParam(':id',$id);
     $eq=$stmt->execute();
     while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo '

    <form action="" method="post" class="p-5 shadow w-50 ">
            <h5 class="text-center p-3">Register for Demo</h5>
        <div>
        <input type="text" name="sname" placeholder="Name" class="form-control w-100 my-2 px-4" value='.$row['sname'].'>
        </div>
        <div>
        <input type="email" name="semail" placeholder="Email" class="form-control w-100 my-2 px-4" value='.$row['semail'].'>
        </div>
        <div>
        <input type="tel" name="sphone" placeholder="Phone" class="form-control w-100 my-2 px-4" value='.$row['sphone'].'>
        </div>
        <div>
        <textarea name="smessage" id="" cols="30" rows="10" placeholder="Message" class="form-control w-100 my-2 px-4">
        '.$row['smessage'].'
        </textarea>
        </div>
        <div class="py-3">
            <input type="submit" name="submit" value="submit" class="w-50 bg-warning border-0 px-4">
        </div>

        </form>
     
        ';
     }
?>
</section>





<?php
include 'footer.php';
?>