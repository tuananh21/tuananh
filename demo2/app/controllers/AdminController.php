<?php
class AdminController extends BaseController {
    private $__adminmodel;

    function __construct($conn) {
        $this->__adminmodel = $this->initModel("AdminModel", $conn);
    }

    public function index() {
        $users = $this->__adminmodel->getAllUsers();
        $this->view("admin", ["users" => $users]);
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = intval(trim($_REQUEST["id"]));
            $title = trim($_REQUEST["title"]);
            $author = trim($_REQUEST["author"]);
            $year = intval(trim($_REQUEST["year"]));
            $description = trim($_REQUEST["description"]);
            $image = trim($_REQUEST["image"]);
            $price = intval(trim($_REQUEST["price"]));
            $oldPrice = intval(trim($_REQUEST["oldPrice"]));

            if ($id < 0) {
                $this->__adminmodel->saveBooks($title, $author, $year, $description, $image, $price, $oldPrice);
            } else {
                $this->__adminmodel->updateBook($id, $title, $author, $year, $description, $image, $price, $oldPrice);
            }

            header("Location: http://localhost/demo2/admin/create");
        } else {
            $books = $this->__adminmodel->getAllBooks();
            $this->view("book", ["books" => $books]);
        }
    }

    public function deleteBook($id) {
        $result = $this->__adminmodel->deleteBook($id);
        if($result) {
            header("Location: http://localhost/demo2/admin/create");
        } else {
            echo "";
        }
    }

    public function deleteUser($id) {
        $result = $this->__adminmodel->deleteUser($id);
        if ($result) {
            header("Location: http://localhost/demo2/admin/index");
        } else {
            echo "Failed to delete user.";
        }
    }

    public function editBook($id) {
        $book = $this->__adminmodel->getBookById($id);
        $books = $this->__adminmodel->getAllBooks();
        $this->view("book", ["book" => $book, "books" => $books]);
    }

    
}
?>
