<?php 
class UserController extends BaseController {
    private $__model;
    public function __construct($conn) {
        $this->__model = $this->initModel("UserModel", $conn);
    }

    public function login() {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = $this->__model->login($username, $password);
            if (isset($user) && $user) {
                $_SESSION["user"] = $user;
                if ($user["role"] == "admin") {
                    header("Location: http://localhost/demo2/home/index");
                } else {
                    header("Location: http://localhost/demo2/home/index");
                }
            } else {
                header("Location: http://localhost/demo2/user/login?error=true");
            }
        } else {
            $this->view("login");
        }
    }

    public function logout() {
        if (isset($_SESSION["user"])) {
            $role = $_SESSION["user"]["role"];
            $_SESSION["user"] = null;
            if ($role == "admin") {
                header("Location: http://localhost/demo2/user/login");
            } else {
                header("Location: http://localhost/demo2/home/index");
            }
        }
        header("Location: http://localhost/demo2/user/login");
    }

    public function register() {
        if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["phone"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $phone = $_POST["phone"];
            $result = $this->__model->addUser($username, $password, $phone);
            if ($result) {
                header("Location: http://localhost/demo2/user/login");
            } else {
                echo "Failed to register user.";
            }
        } else {
            $this->view("register");
        }
    }
}
?>
