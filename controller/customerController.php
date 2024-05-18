<?php
include '../model/customerModel.php';

class CustomerController {
    private $model;

    public function __construct($conn) {
        $this->model = new CustomerModel($conn);
    }

    public function getAllCustomers() {
        return $this->model->getAllCustomers();
    }

    
}
?>
