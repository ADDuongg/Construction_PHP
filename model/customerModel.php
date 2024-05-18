<?php
class CustomerModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllCustomers() {
        $query = "SELECT * FROM khachhang";
        $result = $this->conn->query($query);
        $customers = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $customers[] = $row;
            }
        }
        return $customers;
    }

    public function addCustomer($name, $value) {
       
    }
}
?>
