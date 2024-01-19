
<?php

include 'config.php';




if(isset($_POST['delete_user']))
{


  $id = $_POST["dltid"];//name is id
// sql to delete a record
$query = "DELETE FROM user WHERE id= '$id' ";
$result = mysqli_query($conn,$query);

if ($result) {
  
    echo "Successfully deleted " ;

  header("Location: ../forms/admin.php");

} else {
  echo "Error deleting record: " ;
}


  

}


?>