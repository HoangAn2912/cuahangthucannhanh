<?php  
require_once('../models/QLNV/mQLNV.php');  

class cQLNV {  
    private $model;  

    public function __construct($db) {  
        $this->model = new mQLNV($db);  
    }  

    public function index($branch, $search) {  
        $employees = $this->model->getEmployees($branch, $search);  
        include '../views/QLNV/vQLNV.php';  
    }  

    public function add() {  
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
            $this->model->addEmployee($_POST['name'], $_POST['position'], $_POST['shift'], $_POST['branch']);  
            header('Location: index.php');  
        }  
    }  

    public function edit() {  
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
            $this->model->editEmployee($_POST['id'], $_POST['name'], $_POST['position'], $_POST['shift']);  
            header('Location: index.php');  
        }  
    }  

    public function delete($id) {  
        $this->model->deleteEmployee($id);  
        header('Location: index.php');  
    }  
}  
?>