<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products-LT Sunglasses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <h1>SHOP SUNNIES</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

    </nav>
    <main class="container mt-4">
        <div class="row">
        <?php 
    require_once("Database/dp_connection.php");

    if (isset($_POST["buy_product"])) {
        $prduct_id = $_POST["id"];
        $prodcut_name = $_POST["name"];
        $description= $_POST["description"];
        $price = $_POST["price"];
        $image_path= $_POST["image path"];
        
//INSERT INTO products( product id,name, description, price, ,image path) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
        $sql = "INSERT INTO products (product id, name, description, price, image path) VALUES
                 ('$prduct_id', '$prodcut_name', '$description', '$price', '$image_path')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {

 echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

            
            
                <div class="product-item">
                    <img src="images/7543e1d9946f4be06a78bbd34260a60a.jpg " alt="Product 1">    
                    <div class="card-body">
                        <h2 class="card-title">Product 1</h2>
                        <p class="card-text">Brown,Clear Sunglasses</p>
                        <p class="price">ksh.650</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img src="images/pic 2.jpg" alt="Product 2">
                    <div class="card-body">
                        <h3 class="card-title">Product 2</h3>
                        <p class="card-text">Black Sunglasses</p>
                        <p class="price">ksh. 500</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img src="images/pic 3.jpg" alt="Product 3">
                    <div class="card-body">
                        <h4 class="card-title">Product 3</h4>
                        <p class="card-text">Pink Sunglasses</p>
                        <p class="price">ksh.700</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img src="images/pic 5.jpg" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p>Mini-Red Sunglasses</p>
                        <p class="price">ksh.550</p>
                    </div>   
                </div>
            </div>
</div>
 </main>
    <footer>
        <p>&copy; 2024 LT Sunglasses</p>
    </footer>
</body>    
</html>