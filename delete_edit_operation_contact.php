<?php
include 'dbconnect.php';
$id=$_GET['val'];
$opr=$_GET['opr'];

if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    
    $stmt=$dbcon->prepare('update cantactus set uname=:uname,email=:email,phone=:phone,message=:message where id=:id');
    $stmt->bindParam(':uname',$uname);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':message',$message);
    $stmt->bindParam(':id',$id);

    $eq=$stmt->execute();
    if($eq){
      echo "<script>alert('updated data sucess....');
          location.href='delete_edit_cantactus.php';
          </script>";
      } else {
          echo "<script>alert('unable to update the data....');</script>";
  }
    }

if($opr=='delete'){
    $stmt=$dbcon->prepare('delete from cantactus where id=:id');
    $stmt->bindParam(':id',$id);
    $eq=$stmt->execute();
    if($eq){
        echo "<script>alert('data deleted sucess....');
        location.href='delete_edit_cantactus.php';
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
                        <h1 class="page-title p-2">Delete_Edit_Student Register</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li  class=" text-warning">Student-Register // </li>
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
                $stmt=$dbcon->prepare('select * from cantactus where id=:id');
                $stmt->bindParam(':id',$id);
                $eq=$stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
               echo'
               <form method="post" action="#">
               <input type="text" name="uname" placeholder="Name" required class="form-control mb-3 p-4" value='.$row["uname"].'>
               <input type="email" name="email" placeholder="email" required class="form-control mb-3 p-4" value='.$row["email"].'>
               <input type="tel" name="phone" placeholder="phone" required class="form-control mb-3 p-4" value='.$row["phone"].'>
               <textarea name="message" placeholder="Message" class="form-control mb-4 p-4">
               '.$row["message"].'
               </textarea>

               <input type="submit"name="submit" value="Send" class="btn btn-warning w-50 p-2">
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