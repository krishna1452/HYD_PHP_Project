<?php
include 'dbconnect.php';
?>
<?php
include 'header.php';
?>
<div class="container-fluid breadcrumbs">
                <div class=" container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                        <h1 class="page-title">Delete data</h1>
                        </div>
                    </div>
                    <div class="col-md-6 py-2">
                        <ul>
                             <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li>Delete - </li>
                        </ul>
                        </div>
                </div>
                </div>
            <!-- Breadcrumbs End -->
    <div class="table p-5 container" id="studata">
<?php
$stmt=$dbcon->prepare('select * from studata');
$stmt->execute();
echo'
<table class="table table-bordered">
<thead>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>message</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>

';
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
echo '
<tr>
<td>'.$row['id'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['phone'].'</td>
<td>'.$row['message'].'</td>
<td>
<button class="btn btn-danger w-100">
<a href="delstupdo.php?val='.$row["id"].'">Delete
</button></a>
<td>
<button class="btn btn-success w-100">
<a href="editdatapdo.php?val='.$row["id"].'">Edit
</button></a>
</tr>
';
}

?>
</tbody>
</table>
</div>

<?php
include 'footer.php';
?>