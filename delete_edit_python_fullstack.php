<?php
include 'dbconnect.php';
?>
<?php
include 'header.php';
?>

<!-- Breadcrumbs Start -->
<div class="container-fluid breadcrumbs">
                <div class=" container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                        <h1 class="page-title p-2">Del_Edit_Python_Coursesdata</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li  class=" text-warning">Del_Edit_Python // </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End -->

<section class="container-fluid p-5">
   <?php
   $stmt=$dbcon->prepare('select * from python order by id desc');
   $eq=$stmt->execute();
    echo '
    <table class="table table-bordered ">
        <thead class="table table-dark">
        <tr>
        <th>id</th>
        <th>sname</th>
        <th>semail</th>
        <th>sphone</th>
        <th>smessage</th>
        <th></th>
        <th></th>
        </tr>
        <tbody>
        ';
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            echo '
            <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['sname'].'</td>
            <td>'.$row['semail'].'</td>
            <td>'.$row['sphone'].'</td>
            <td>'.$row['smessage'].'</td>
            <td>
            <a href="delete_edit_operation_python.php?opr=delete&val='.$row['id'].'">
            <button class="btn btn-danger w-100">Delete</button></a>
            </td>
            <td>
            <a href="delete_edit_operation_python.php?opr=edit&val='.$row['id'].'">
            <button class="btn btn-success w-100">Edit</button></a>
            </td>
            </tr>
            
            ';

        }
        ?>
        </tbody>
    </table>
    
</section>






<?php
include 'footer.php';
?>