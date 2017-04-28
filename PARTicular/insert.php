<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "sgesson", "", "my_sgesson");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
/* $sql="INSERT INTO ComputerParts (Name, Type, Price)
VALUES ('$_POST[Name]','$_POST[Type]', $_POST[Price])"; */
$var = htmlspecialchars($_POST["Name"]{0}). htmlspecialchars($_POST["Name"]{2}). htmlspecialchars($_POST["Name"]{4});


$sql="INSERT INTO ComputerParts (id, Name, Type, Price)
VALUES ('$var', '$_POST[Name]','$_POST[Type]', '$_POST[Price]')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    echo $var;
} 
else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<form action="index.php">
    <input type="submit" value="Return" />
</form>