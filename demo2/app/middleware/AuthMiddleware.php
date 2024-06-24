<?php 
class AuthMiddleware {
    //nhung action can authen thi de trong actions
    private $actions = [];
    public function __construct(array $actions = []) {
        $this->actions = $actions;
    }

    public function execute($controller = '', $action = '',){
        if($controller == "admin") {
            if(!isset($_SESSION["user"])) {
                header ("Location: http://localhost/mvc/user/login");
            } else {
                $role = $_SESSION["user"]["role"];
                if($role != "admin") {
                    $this->handleError("403");
                }
            }
        } else {
            if(!isset($_SESSION["user"])) {
                if(empty($action) || in_array($controller."/".$action, $this->actions)) {
                    $this->handleError("403");
            }
        }
    }
}

    function handleError($name) {
        require_once "app/views/errors/$name.php";
        exit();
    }
}
?>