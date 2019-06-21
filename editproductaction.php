<?php
require_once('admindashboardheader.php')
?>
<?php
// including the database connection file
include_once("includes/Crud.php");
include_once("includes/Validation.php");
 
$crud = new Crud();
$validation = new Validation();
 
if(isset($_POST['update']))
{    
    $id = $crud->escape_string($_POST['id']);
    
    $productname = $crud->escape_string($_POST['productname']);
       $productquantity = $crud->escape_string($_POST['productquantity']);
        $productprice = $crud->escape_string($_POST['productprice']);
    


     
   
    
    
    $msg = $validation->check_empty($_POST, array('productname', 'productquantity','productprice'));
   
   
    
    // checking empty fields
    if($msg) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } 
    else {    
        //updating the table
        $result = $crud->execute("UPDATE product SET productname='$productname',  productquantity='$productquantity', productprice='$productprice' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
       echo $msg='Successful';
    }
  }
