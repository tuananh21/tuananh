<?php
class AdminModel {
    private $__conn;

    public function __construct($conn) {
        $this->__conn = $conn;
    }

    public function getAllUsers() {
        try {
            if (isset($this->__conn)) {
                $sql = "select * from `user` where role = 'user'";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        } catch (PDOException $e) {
            echo "Get user error: " . $e->getMessage();
        }
    }

    public function deleteUser($id) {
        try {
            if (isset($this->__conn)) {
                $sql = "delete from `user` where id = :id";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $result = $stmt->execute();
                return $result;
            }
        } catch (PDOException $e) {
            echo "Delete error: " . $e->getMessage();
        }
    }

    public function saveBooks($title, $author, $year, $description, $image, $price, $oldPrice) {
        try {
            $sql = "insert into book_list (title, author, year, description, image, price, oldPrice) 
                    values (:title, :author, :year, :description, :image, :price, :oldPrice)";
            $stmt = $this->__conn->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':author' => $author,
                ':year' => (int)$year,
                ':description' => $description,
                ':image' => $image,
                ':price' => (int)$price,
                ':oldPrice' => (int)$oldPrice
            ]);
            echo "Insert successful";
        } catch (PDOException $e) {
            echo "Insert error: " . $e->getMessage();
        }
    }

    public function getAllBooks() {
        try{
            if(isset($this->__conn)){
                $sql = "Select * from book_list order by id desc";
                $sttm = $this->__conn->prepare($sql);
                $sttm->execute();
                $result = $sttm->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
            
        } catch(PDOException $e){
            echo "".$e->getMessage();
        } 
        
    }

    public function deleteBook($id) {
        try {
            if (isset($this->__conn)) {
                $sql = "delete from book_list where id = :id";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $result = $stmt->execute();
                return $result;
            }
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }

    public function getBookById($id) {
        try {
            if (isset($this->__conn)) {
                $sql = "select * from `book_list` where id = :id";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }

    public function updateBook($id, $title, $author, $year, $description, $image, $price, $oldPrice) {
        try {
            if (isset($this->__conn)) {
                $sql = "update `book_list` set title = :title, author = :author, year = :year, description = :description, image = :image, price = :price, oldprice = :oldPrice WHERE id = :id";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute([
                    ':title' => $title,
                    ':author' => $author,
                    ':year' => (int)$year,
                    ':description' => $description,
                    ':image' => $image,
                    ':price' => (int)$price,
                    ':oldPrice' => (int)$oldPrice,
                    ':id' => (int)$id
                ]);
            }
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }

}
?>
