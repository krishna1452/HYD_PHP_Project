<?php
include 'dbconnect.php';
$id=$_GET['val'];
$opr=$_GET['opr'];

if(isset($_POST['submit'])){

    $cname=$_POST['cname'];
    $ttype=$_POST['ttype'];
    $sname=$_POST['sname'];
    $semail=$_POST['semail'];
    $sphone=$_POST['sphone'];
    $smessage=$_POST['smessage'];
    $stmt=$dbcon->prepare('update studentreg set cname=:cname,ttype=:ttype,sname=:sname,semail=:semail,sphone=:sphone,smessage=:smessage where id=:id');
    $stmt->bindParam(':cname',$cname);
    $stmt->bindParam(':ttype',$ttype);
    $stmt->bindParam(':sname',$sname);
    $stmt->bindParam(':semail',$semail);
    $stmt->bindParam(':sphone',$sphone);
    $stmt->bindParam(':smessage',$smessage);
    $stmt->bindParam(':id',$id);

    $eq=$stmt->execute();
    if($eq){
        echo "<script>alert('updated success......');
        header('location:delete_edit_stureg.php');
        </script>";

    }else{
        echo "<script>alert('unable to updated......');</script>";
    }
}




if($opr=='delete'){
    $stmt=$dbcon->prepare('delete from studentreg where id=:id');
    $stmt->bindParam(':id',$id);
    $eq=$stmt->execute();
    if($eq){
        echo "<script>alert('data deleted sucess....');
        location.href='delete_edit_stureg.php';
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
                $stmt=$dbcon->prepare('select * from studentreg where id=:id');
                $stmt->bindParam(':id',$id);
                $eq=$stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

               echo'
        <form action="" method="post" class="p-5 shadow w-50 ">
        <div>
        <input type="text" name="cname" placeholder="course name" class="form-control w-100 my-2" value='.$row['cname'].'>
        </div>
    
        <select  name="ttype"  class="form-control w-100 my-2">
            <option value="">training type</option>
            <option value="">class room training</option>
            <option value="">online training</option>
            '.$row['ttype'].'
        </select>
        <div>
        <input type="text" name="sname" placeholder="student name" class="form-control w-100 my-2" value='.$row['sname'].'>
        </div>
        <div>
        <input type="email" name="semail" placeholder="Email" class="form-control w-100 my-2" value='.$row['semail'].'>
        </div>
        <div>
        <input type="tel" name="sphone" placeholder="number" class="form-control w-100 my-2" value='.$row['sphone'].'>
        </div>
        <div>
        <textarea name="smessage" id="" cols="30" rows="10" placeholder="message" class="form-control w-100 my-2">
        '.$row['smessage'].'
        </textarea>
        </div>
        <div class="py-3">
            <input type="submit" name="submit" value="register Now" class="w-50 bg-success">
        </div>

        </form>
        <div>
        ';
                }
?>






<?php
include 'footer.php';
?>