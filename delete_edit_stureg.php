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
            <!-- Breadcrumbs End -->

<section class="container-fluid p-5">
    <div class="row py-4">
        <div class="col-2">
            
        </div>
        <div class="col-10">

        <?php
        $stmt=$dbcon->prepare('select * from studentreg order by id desc');
        $eq=$stmt->execute();
        echo '
        <table class="table table-bordered ">
        <thead class="table table-dark">
        <tr>
        <th>id</th>
        <th>cname</th>
        <th>type</th>
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
            <td>'.$row['cname'].'</td>
            <td>'.$row['ttype'].'</td>
            <td>'.$row['sname'].'</td>
            <td>'.$row['semail'].'</td>
            <td>'.$row['sphone'].'</td>
            <td>'.$row['smessage'].'</td>
            <td>
            <a href="delete_edit_operation_stureg.php?opr=delete&val='.$row['id'].'">
            <button class="btn btn-danger w-100">Delete</button></a>
            </td>
            <td>
            <a href="delete_edit_operation_stureg.php?opr=edit&val='.$row['id'].'">
            <button class="btn btn-success w-100">Edit</button></a>
            </td>
            </tr>
            
            ';

        }
        ?>
        </tbody>
    </table>
        </div>
    </div>

</section>





















<?php
include 'footer.php';
?>