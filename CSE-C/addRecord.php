<?php
include('config.php');
?>

<?php 
if (isset($_POST['submit'])){
 echo "Dear, ".$_POST['username']." You are Welcome.".'<br>';
 $username = $_POST['username'];
 //$age = $_POST['age'];
 $contact = $_POST['contact'];
 $email = $_POST['email']; 
    
    $sql  = "INSERT INTO `users` (name,  email, contact) 
    VALUES ('$username','$email', '$contact')";
    mysqli_query($conn, $sql);
}
else{
    echo "Welcome Guest";
}
?>