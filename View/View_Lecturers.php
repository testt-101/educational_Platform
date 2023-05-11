<?php
include("../Core/config.php");
include("NavBar.php");
$sql="SELECT * FROM lecturers";
$result=mysqli_query($connection, $sql);
echo'<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Type</th>
      <th>Office Hours</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>';
while ($row = mysqli_fetch_array($result)){
    echo'<tr>
     <td>'.$row['id'].'</td>
     <td>'.$row['Name'].'</td>
     <td>'.$row['email'].'</td>
     <td>'.$row['Type'].'</td>
     <td>'.$row['Office_Hours'].'</td>
     <td><button   class="btn btn-danger" ><a href="../Core/delete.php?deleteid='.$row['id'].'">Delete</button></a></td>
     </tr>';
}
echo'</tbody>
</table>';
?>