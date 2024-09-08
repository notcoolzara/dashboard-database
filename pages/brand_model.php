<?php
include 'action.php';

$name=$_POST["name"];
$img=$_POST["img"];
$status=$_POST["status"];

$brands="INSERT INTO brands (name,img,status)VALUES('$name','$img','$status')";
if($conn->query($brands)===TRUE){
header("Location:brands.php");
}
else{
    echo"error 5050";
}

//UPDATE
$brands="UPDATE brands SET name='$name',img='$img',status='$status' WHERE id='$id'";
if($conn->query($brands)===TRUE){
    header("Location:brands.php");
}
else{
    echo"error 5050";
}

//DELETE 
$brands="DELETE FROM brands WHERE id='$id'";
if($conn->query($brands)===TRUE){
    header("Location:brands.php");
}
else{
    echo"error 5050";
}

//SELECT
$brands="SELECT * FROM brands";
$result=$conn->query($brands);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "id: ".$row["id"]." - Name: ".$row["name"]." - Image: ".$row["img"]." - Status: ".$row["status"]."<br>";
    }
}
else{
    echo "0 results";
}
?>
