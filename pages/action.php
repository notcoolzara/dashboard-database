<?php
$servername="localhost";
$username="root";
$password="";
$dbname="storeDB";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

// Insert product data if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $special_price = $_POST['special_price'];
    $sku = $_POST['sku'];
    $stock = $_POST['stock'];
    $media = $_POST['media'];
    $attribute = $_POST['attribute'];
    $status = $_POST['status'];
    $tags = $_POST['tags'];
    $tax = $_POST['tax'];
    
    // SQL insert query
    $insertProduct = "INSERT INTO products (name, description, brand, category, price, special_price, sku, stock, media, attribute, status, tag, img)
    VALUES ('$name', '$description', '$brand', '$category', '$price', '$special_price', '$sku', '$stock', '$media', '$attribute', '$status', '$tags', 'default.jpg')";

    if ($conn->query($insertProduct) === TRUE) {
        echo "New product added successfully";
    } else {
        echo "Error: " . $insertProduct . "<br>" . $conn->error;
    }
}

?>