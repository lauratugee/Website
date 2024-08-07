<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order-LT Sunglasses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>ORDER SUNGLASSES</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

    </nav>
    <main class="container mt-4">
        <form action="#" method="post" class="order-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <div class="invalid-feedback">
                    Please provide a valid email.

                </div>
            </div>
            <div class="form-group">
                <label for="address">Shipping Address:</label>
                <textarea id="address" name="address" rows="3" required></textarea>
                <div class="invalid-feedback">
                    Please provide a valid shipping address.
                </div>
            </div>
            <div class="form-group">
                <label for="sunglasses">Sunglasses:</label>
                <select id="sunglasses" name="sunglasses" required>
                    <option value="">Select Sunglasses</option>
                    <option value="product1">Product 1</option>
                    <option value="product2">Product 2</option>
                    <option value="product3">Product 3</option>
                    <option value="product4">Product 4</option>
                    
                </select>
                <div class="invalid-feedback">
                    Please select an available product.
                </div>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" required>
                <div class="invalid-feedback">
                    Please provide a quantity.
                </div>   
            </div>
            <button type="submit">Place Order</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 LT Sunglasses</p>
    </footer>
</body>
</html>