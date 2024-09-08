<?php
include 'action.php';


$name=$_POST["name"];
$subcategory=$_POST["subcategory"];
$img=$_POST["img"];
$status=$_POST["status"];

$cat="INSERT INTO categroies(name,subcategory,img,status)

VALUES('$name','$subcategory','$img','$status')";
if($conn->query($bit)===TRUE){
    echo "NEW RECORD CREATED SUCCESSFULLY";

}
else{
    echo"error";
}

$cat="UPDATE categories SET name='$name',subcategory='$subcategory',img='$img',status='$status' WHERE id='$id'";
if($conn->query($bit)===TRUE){
    echo "RECORD UPDATED SUCCESSFULLY";
}
else{
    echo"error";
}

$cat="DELETE FROM categories WHERE id='$id'";
if($conn->query($bit)===TRUE){
    echo "RECORD DELETED SUCCESSFULLY";
}
else{
    echo"error";
}

$cat="SELECT * FROM categories";
$result=$conn->query($bit);


?>