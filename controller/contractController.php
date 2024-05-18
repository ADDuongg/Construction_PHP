<?php
include '../model/contractModel.php';
include '../database.php';
class ContractController
{
    private $model;

    public function __construct($conn)
    {
        $this->model = new ContractModel($conn);
    }

    public function getAllContracts($limit, $start_from, $tenhopdong, $ngaybatdau, $ngayketthuc, $khachhang_id, $giatrihopdong)
    {
        return $this->model->getAllContracts($limit, $start_from, $tenhopdong, $ngaybatdau, $ngayketthuc, $khachhang_id, $giatrihopdong);
    }
    public function deleteContract($hopdong_id)
    {
        $hopdong_id = $_GET['hopdong_id'];
        $result = $this->model->deleteContract($hopdong_id);
        if ($result) {
            // Nếu xóa thành công, chuyển hướng đến trang khác
            header("Location: ../page/contract.php"); // Thay đổi index.php thành đường dẫn mong muốn
            exit; // Kết thúc script sau khi chuyển hướng
        } else {
            echo "Xóa hợp đồng thất bại";
        }
    }


    public function updateContract(
        $hopdong_id,
        $tenhopdong,
        $ngayky,
        $giatrihopdong,
        $tamung,
        $phitrehan,
        $conlai,
        $khachhang_id,
        $noidung,
        $ngaybatdau,
        $ngaydaohan,
        $ngayketthuc,
        $loaihopdong
    ) {
        $result =  $this->model->updateContract(
            $hopdong_id,
            $tenhopdong,
            $ngayky,
            $giatrihopdong,
            $tamung,
            $phitrehan,
            $conlai,
            $khachhang_id,
            $noidung,
            $ngaybatdau,
            $ngaydaohan,
            $ngayketthuc,
            $loaihopdong
        );
        if ($result) {
            // Nếu xóa thành công, chuyển hướng đến trang khác
            header("Location: ../page/contract.php"); // Thay đổi index.php thành đường dẫn mong muốn
            exit; // Kết thúc script sau khi chuyển hướng
        } else {
            echo "Cập nhật hợp đồng thất bại";
        }
    }
    public function getNumberRowContract()
    {
        return $this->model->getNumberRowContract();
    }
    public function getCurrentContract($id)
    {
        return $this->model->getCurrentContract($id);
    }
    public function addContract($tenhopdong, $ngayky, $giatrihopdong, $tamung, $phitrehan, $conlai, $khachhang_id, $noidung, $ngaybatdau, $ngaydaohan, $ngayketthuc, $loaihopdong)
    {
        $result = $this->model->addContract($tenhopdong, $ngayky, $giatrihopdong, $tamung, $phitrehan, $conlai, $khachhang_id, $noidung, $ngaybatdau, $ngaydaohan, $ngayketthuc, $loaihopdong);
        if ($result) {
            // Nếu xóa thành công, chuyển hướng đến trang khác
            header("Location: ../page/contract.php"); // Thay đổi index.php thành đường dẫn mong muốn
            exit; // Kết thúc script sau khi chuyển hướng
        } else {
            echo "Thêm hợp đồng thất bại";
        }
    }
}
$controller = new ContractController($conn);


if (isset($_GET['hopdong_id']) && $_GET['type'] === 'delete') {
    $controller->deleteContract($_GET['hopdong_id']);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hopdong_id = $_POST['hopdong_id'] ?? null;
    $tenhopdong = $_POST['tenhopdong'];
    $ngayky = $_POST['ngayky'];
    $giatrihopdong = $_POST['giatrihopdong'];
    $tamung = $_POST['tamung'];
    $phitrehan = $_POST['phitrehan'];
    $conlai = $_POST['conlai'];
    $khachhang_id = $_POST['khachhang_id'];
    $noidung = $_POST['noidung'];
    $ngaybatdau = $_POST['ngaybatdau'];
    $ngaydaohan = $_POST['ngaydaohan'];
    $ngayketthuc = $_POST['ngayketthuc'];
    $loaihopdong = $_POST['loaihopdong'];
    $action = $_POST['action'];

    if ($action === 'add') {
        $controller->addContract($tenhopdong, $ngayky, $giatrihopdong, $tamung, $phitrehan, $conlai, $khachhang_id, $noidung, $ngaybatdau, $ngaydaohan, $ngayketthuc, $loaihopdong);
    } elseif ($action === 'update') {
        $controller->updateContract($hopdong_id, $tenhopdong, $ngayky, $giatrihopdong, $tamung, $phitrehan, $conlai, $khachhang_id, $noidung, $ngaybatdau, $ngaydaohan, $ngayketthuc, $loaihopdong);
    }
}

/* if (isset($_GET['hopdong_id']) && $_GET['type'] === 'delete') {
    $controller->updateContract($_GET['hopdong_id']);
} */
