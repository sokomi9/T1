<?php
$products = [
    ['name' => 'Loaf', 'price' => 50],
    ['name' => 'Sugar', 'price' => 120],
    ['name' => 'Flour',  'price' => 230],
    ['name' => 'Rice', 'price' => 175]
]   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product prices</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
    <?php foreach($products as $product){ ?>
        <h3><?php echo $product['name'];  ?></h3>;
        <p>$<?php echo $product['price']; ?></p>;
        <?php } ?>
        </ul>
</body>
</html>