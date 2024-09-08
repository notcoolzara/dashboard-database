<?php
include 'action.php';


$view="SELECT id,name,subcategory,img,status FROM categories";
$result=$conn->query($view);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "id: ".$row["id"]." - Name: ".$row["name"]." - Subcategory: ".$row["subcategory"]." - Image: ".$row["img"]." - Status: ".$row["status"]."<br>";
    }
}
else{
    echo "0 results";
}

$view="SELECT id,name,brand,category,price,img,status,special_price,tag,description,sku,stock,media,attribute,tax FROM products";   
$result=$conn->query($view);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "id: ".$row["id"]." - Name: ".$row["name"]." - Brand: ".$row["brand"]." - Category: ".$row["category"]." - Price: ".$row["price"]." - Image: ".$row["img"]." - Status: ".$row["status"]." - Special Price: ".$row["special_price"]." - Tag: ".$row["tag"]." - Description: ".$row["description"]." - SKU: ".$row["sku"]." - Stock: ".$row["stock"]." - Media: ".$row["media"]." - Attribute: ".$row["attribute"]." - Tax: ".$row["tax"]."<br>";
    }
}
else{
    echo "0 results";
}
?>