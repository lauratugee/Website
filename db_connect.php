<?php
$servername="localhost";
$username="your_username";
$password="your_password";
$dbname="ltsunglasses";

$conn=new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

$sql="SELECT product_name, description, price, image_path FROM products";
$result=$conn->query($sql);

if($result=>num_rows>0){
    while($row=$result->get_product()){
        echo "<div class='col-md-4'>
                <div class='product-item'>
                   <img src='. $row["image_path"]."'alt='" . $row["product_name"]."'>
                   <div class='card-body'>
                       <h2 class='card-title'>" . $row["product_name"]."</h2>
                       <p class='card-text'>" . $row["description"] . "</p>
                       <p class='price'>ksh." . $row["price"] . "</p>
                    </div>
                </div>
            </div>";
    }
    } else {
        echo "0 results";
    }
    $conn->close();
}
?>