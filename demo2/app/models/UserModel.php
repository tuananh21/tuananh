<?php 
class UserModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }

    public function login($username, $password) {
        $sql = "select * from user where username = :username and password = :password";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("username", $username, PDO::PARAM_STR);
        $stmt->bindParam("password", $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
        //ASSOC:mỗi một phần tử là 1 mảng; OBJ:mỗi một phần tử là một stdObject;
        // CLASS:mỗi một phần tử là một object của class mà mình đang lấy ra
    }

    public function addUser($username, $password, $phone) {
        try {
            if (isset($this->__conn)) {
                $sql = "INSERT INTO user (username, password, phone, role) VALUES (:username, :password, :phone, 'user')";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam(":username", $username, PDO::PARAM_STR);
                $stmt->bindParam(":password", $password, PDO::PARAM_STR);
                $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
                $result = $stmt->execute();
                return $result;
            }
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}
?>