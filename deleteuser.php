
<?php
//including the database connection file
include_once("includes/Crud.php");
 
$crud = new Crud();
 
//getting id of the data from url
$UserID = $crud->escape_string($_GET['UserID']);
 
//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($UserID, 'product');
 
if ($result) {
    //redirecting to the display page (index.php in our case)
    header("Location:index.php");
}
?>