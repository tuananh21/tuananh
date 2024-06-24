<?php 
class ProductModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }

    public function getAllBooks() {
        try{
            if(isset($this->__conn)){
                $sql = "Select * from book_list";
                $sttm = $this->__conn->prepare($sql);
                $sttm->execute();
                $result = $sttm->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
            
        } catch(PDOException $e){
            echo "".$e->getMessage();
        } 
        
    }

    public function getBookById($id) {
        try {
            if (isset($this->__conn)) {
                $sql = "SELECT * FROM `book_list` WHERE id = :id";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }

    public function createOrder($userId, $orderTotal) {
        try {
            if (isset($this->__conn)) {
                $sql = "INSERT INTO `orders` (`user_id`, `order_total`, `order_date`) VALUES (:user_id, :order_total, NOW())";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam(":user_id", $userId, PDO::PARAM_INT);
                $stmt->bindParam(":order_total", $orderTotal, PDO::PARAM_STR);
                $stmt->execute();
                return $this->__conn->lastInsertId();
            }
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }

    public function saveOrderDetail($orderId, $bookId, $quantity, $price) {
        try {
            if (isset($this->__conn)) {
                $sql = "INSERT INTO `order_details` (`order_id`, `book_id`, `quantity`, `price`) VALUES (:order_id, :book_id, :quantity, :price)";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam(":order_id", $orderId, PDO::PARAM_INT);
                $stmt->bindParam(":book_id", $bookId, PDO::PARAM_INT);
                $stmt->bindParam(":quantity", $quantity, PDO::PARAM_INT);
                $stmt->bindParam(":price", $price, PDO::PARAM_STR);
                $stmt->execute();
            }
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}
?>