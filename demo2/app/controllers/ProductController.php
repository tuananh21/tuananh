<?php 
class  ProductController extends BaseController {
    private $__productmodel;
    function __construct($conn) {
        $this->__productmodel = $this->initModel("ProductModel", $conn);
    }

    public function index($id) {
        $book = $this->__productmodel->getBookById($id);
        $books = $this->__productmodel->getAllBooks();
        $this->view("layouts/client_layout", ["content"=>"product","book" => $book, "books" => $books]);
    }

    public function addToCart($id) {
        $quantity = intval($_POST['quantity']);
        $book = $this->__productmodel->getBookById($id);

        if ($book) {
            $item = [
                "id" => $book['id'],
                "title" => $book['title'],
                "author" => $book['author'],
                "year" => $book['year'],
                "description" => $book['description'],
                "image" => $book['image'],
                "price" => $book['price'],
                "quantity" => $quantity
            ];

            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            $_SESSION['cart'][] = $item;
        }

        header("Location: http://localhost/demo2/cart");
    }
}


?>