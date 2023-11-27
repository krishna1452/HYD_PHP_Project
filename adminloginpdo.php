<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {

    $uname=$_POST['uname'];
    $password=$_POST['password'];

    // echo'user name is'.$uname;
    // echo'password is'.$password;
    $stmt=$dbcon->prepare('select * from admin where name=:unamed and password=:passwordd');
    $stmt->bindParam(':unamed',$uname);
    $stmt->bindParam(':passwordd',$password);
    
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        if(count($row)> 0){
        
        header('location:admindashbordpdo.php');
    } else {
        echo '<script>alert("invalid username and pass....");</script>';
}

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
                        <h1 class="page-title">Admin_Login</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li class=" text-warning">Admin_Login - </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End -->

<div class="p-5">
    
    <form action="" method="post" class="form-group">
        <div>
        <input type="text" name="uname" placeholder="user name" class="form-control w-25 mb-3">
        </div>
        <div>
        <input type="password" name="password" placeholder="password" class="form-control w-25 mb-3">
        </div>
        <div>
            <input type="submit" name="submit" value="Login" class="form-control w-25 mb-3 bg-info">
            <input type="submit" name="" value="Cancel" class="form-control w-25 bg-danger">
        </div>

    </form>
</div>



<?php
include 'footer.php';
?>