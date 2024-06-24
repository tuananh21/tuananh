<?php
class HomeController extends BaseController {
    private $__homemodel;
    function __construct($conn) {
        $this->__homemodel = $this->initModel("HomeModel",$conn);
    }

    public function index() {
        $books = $this->__homemodel->getAllBooks();
       $this->view("layouts/client_layout", ["content"=>"home","books"=> $books]);
    }
}


?>