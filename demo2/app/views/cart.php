<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/book.css">
    <title>Cart</title>
</head>
<body>
    <div class="cart-1">
        <h1>Giỏ hàng</h1>
        <table>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Remove</th>
            </tr>
            <?php $total = 0; ?>
            <?php foreach ($cart as $index => $item): ?>
                <?php $total += $item['price'] * $item['quantity']; ?>
                <tr>
                    <td><?= $item['title'] ?></td>
                    <td><img src="<?= $item['image'] ?>" alt="Book Image" width="50"></td>
                    <td><?= $item['price'] ?></td>
                    <td><?= $item['quantity'] ?></td>
                    <td><a href="http://localhost/demo2/cart/removeFromCart/<?= $index ?>">Remove</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h2>Tổng cộng: <?= $total ?>.000đ</h2>
        <form action="http://localhost/demo2/cart/saveOrder" method="post">
            <input type="submit" value="Lưu đơn hàng">
        </form>
        <form action="http://localhost/demo2/cart/clearCart" method="post">
            <input type="submit" value="Clear Cart">
        </form>
    </div>
</body>
</html>
