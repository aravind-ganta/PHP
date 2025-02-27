<!DOCTYPE html>
<html>
<head>
    <title>Simple E-commerce Website</title>
    <style>
        /* CSS styles for the website */
        /* ... */
    </style>
</head>
<body>
    <h1>Welcome to Our E-commerce Website</h1>
    
    <?php
    // PHP code to retrieve and display products from the back-end
    $url = 'http://localhost:8000/products';
    $products = json_decode(file_get_contents($url));
    
    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<img src="' . $product->image_url . '" alt="' . $product->name . '">';
        echo '<h3>' . $product->name . '</h3>';
        echo '<p>' . $product->description . '</p>';
        echo '<p>Price: $' . $product->price . '</p>';
        echo '<button>Add to Cart</button>';
        echo '</div>';
    }
    ?>
    
    <!-- JavaScript code for cart functionality -->
    <!-- ... -->
</body>
</html>
