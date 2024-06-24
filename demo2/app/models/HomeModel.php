<?php
class HomeModel {
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
        return null;
        
    }
}



?>