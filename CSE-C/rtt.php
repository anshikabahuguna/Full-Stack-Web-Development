<table style="text-align:center;" border="1">
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Contact</th>
    <th>Email</th>
    <th>EDIT</th>
    <th>DELETE</th>
</tr>    
</thead>
<tbody>

<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn, $sql);
?>

<?php
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
   <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Age']; ?></td>
        <td><?php echo $row['Contact']; ?></td>
        <td><?php echo $row['Email']; ?></td>
       
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>  
<?php    }
}
?>
</tbody>
</table>