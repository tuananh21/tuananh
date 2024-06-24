<?php
class CartController extends BaseController {
    private $__productmodel;

    function __construct($conn) {
        $this->__productmodel = $this->initModel("ProductModel", $conn);
    }

    public function index() {
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        $this->view("layouts/client_layout", ["content" => "cart", "cart" => $cart]);
    }

    public function clearCart() {
        unset($_SESSION['cart']);
        header("Location: http://localhost/demo2/cart");
    }

    public function saveOrder() {
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $orderTotal = array_reduce($_SESSION['cart'], function($total, $item) {
                return $total + ($item['price'] * $item['quantity']);
            });

            $userId = $_SESSION['user']['id'];
            $orderId = $this->__productmodel->createOrder($userId, $orderTotal);
            foreach ($_SESSION['cart'] as $item) {
                $this->__productmodel->saveOrderDetail($orderId, $item['id'], $item['quantity'], $item['price']);
            }
            $this->clearCart();
            header("Location: http://localhost/demo2/cart");
        }
    }
}
?>
