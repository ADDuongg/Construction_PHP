<?php
include '../database.php';
include '../controller/contractController.php';
include '../controller/customerController.php';
$contractController = new ContractController($conn);
$customerController = new CustomerController($conn);
$tenhopdong = isset($_GET['tenhopdong']) ? $_GET['tenhopdong'] : '';
$ngaybatdau = isset($_GET['ngaybatdau']) ? $_GET['ngaybatdau'] : '';
$ngayketthuc = isset($_GET['ngayketthuc']) ? $_GET['ngayketthuc'] : '';
$khachhang_id = isset($_GET['khachhang_id']) ? $_GET['khachhang_id'] : '';
$giatrihopdong = isset($_GET['giatrihopdong']) ? $_GET['giatrihopdong'] : '';

/* $limit = 3; */
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
if (isset($_GET['limit'])) {
    $limit = $_GET['limit'];
} else {
    $limit = 3;
}
$start_from = ($page - 1) * $limit;


$contracts = $contractController->getAllContracts($limit, $start_from, $tenhopdong, $ngaybatdau, $ngayketthuc, $khachhang_id, $giatrihopdong);
$customers = $customerController->getAllCustomers();
$totalRow = $contractController->getNumberRowContract();

$total_page = ceil($totalRow / $limit);
$prev_page = ($page == 1) ? $total_page : $page - 1;
$next_page = ($page == $total_page) ? 1 : $page + 1;



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class='d-flex wrapper'>
        <?php include('../layout/sidebar.php') ?>
        <div class='divContent h-100'>
            <?php include('../layout/header.php') ?>
            <section class='detailContent p-5'>
                <div class="container-fluid bg-white rounded px-5 py-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý hợp đồng</li>
                        </ol>
                    </nav>
                    <div class="row  g-3">
                        <form class="row g-3" action="" method="GET">
                            <div class="col-lg-6 col-12">
                                <div class='mb-3'>
                                    <label for="tenhopdong" class='form-label'>Tên hợp đồng</label>
                                    <input name='tenhopdong' type="text" class='form-control' placeholder='Nhập tên dự án...' />
                                </div>
                                <div class='d-flex justify-content-between w-100'>
                                    <div class='me-3 w-50'>
                                        <label for="ngaybatdau" class='form-label'>Ngày bắt đầu</label>
                                        <input name='ngaybatdau' type="date" class='form-control ' />
                                    </div>
                                    <div class='w-50'>
                                        <label for="ngayketthuc" class='form-label'>Ngày kết thúc</label>
                                        <input name='ngayketthuc' type="date" class='form-control ' />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class='mb-3'>
                                    <label for="khachhang_id" class='form-label'>Khách hàng</label>
                                    <select name="khachhang_id" id="" class='form-select'>
                                        <option value="">Tìm khách hàng</option>
                                        <?php
                                        foreach ($customers as $item) {
                                            $selected = ($item['khachhang_id'] == $khachhang_id) ? 'selected' : '';
                                            echo "<option value='" . $item['khachhang_id'] . "' $selected>" . $item['hoten'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class='mb-3 d-flex justify-content-between w-100'>
                                    <div class=' w-100'>
                                        <label for="giatrihopdong" class='form-label'>Giá trị hợp đồng</label>
                                        <select name="giatrihopdong" id="" class='form-select'>
                                            <option value="">Tìm theo giá trị hợp đồng</option>
                                            <option value="0-500">500000000</option>
                                            <option value="500-1500">500000000 - 1500000000</option>
                                            <option value="1500-3000">1500000000-3000000000</option>
                                            <option value="3000"> trên 3000000000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="col d-flex justify-content-end">
                                    <div class="me-3">
                                        <button id="addContractBtn" class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#modalAddContract"><i class="fa-solid fa-plus me-2"></i>Thêm mới</button>
                                    </div>
                                    <div>
                                        <button class='btn btn-success' onclick="handleSearch()"><i class="fa-solid fa-magnifying-glass me-2"></i>Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="container-fluid bg-white rounded px-5 py-3 mt-3">
                    <h4>Danh sách hợp đồng</h4>
                    <div class="my-3  d-flex align-items-center">
                        <form action="" method="GET">
                            <select name="limit" id="limit" class='form-select w-auto me-3' onchange="this.form.submit()">
                                <option value="1" <?php if ($limit == 1) echo 'selected'; ?>>1</option>
                                <option value="2" <?php if ($limit == 2) echo 'selected'; ?>>2</option>
                                <option value="3" <?php if ($limit == 3) echo 'selected'; ?>>3</option>
                            </select>
                        </form>
                        <label for="limit">entries per page</label>
                    </div>

                    <div class="row" style="overflow: auto">
                        <table class="table table-striped" style="min-width: 80rem">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên hợp đồng</th>
                                    <th scope="col">Giá trị hợp đồng</th>
                                    <th scope="col">Tạm ứng</th>
                                    <th scope="col">Còn lại</th>
                                    <th scope="col">Ngày ký</th>
                                    <th scope="col">Loại hợp đồng</th>
                                    <th scope="col">Ngày bắt đầu</th>
                                    <th scope="col">Ngày kết thúc</th>
                                    <th scope="col">Ngày đáo hạn</th>
                                    <th scope="col">Phí trễ hạn</th>
                                    <th>Nội dung hợp đồng</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contracts as $row) { ?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><?php echo $row['tenhopdong']; ?></td>
                                        <td><?php echo $row['giatrihopdong']; ?></td>
                                        <td><?php echo $row['tamung']; ?></td>
                                        <td><?php echo $row['conlai']; ?></td>
                                        <td><?php echo $row['ngayky']; ?></td>
                                        <td><?php echo $row['loaihopdong']; ?></td>
                                        <td><?php echo $row['ngaybatdau']; ?></td>
                                        <td><?php echo $row['ngayketthuc']; ?></td>
                                        <td><?php echo $row['ngaydaohan']; ?></td>
                                        <td><?php echo $row['phitrehan']; ?></td>
                                        <td>
                                            <textarea class="form-control"><?= $row['noidung'] ?></textarea>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Hành động
                                                </button>
                                                <ul class="dropdown-menu px-3">
                                                    <li>
                                                        <button class="btn btn-sm btn-primary w-100 update-contract-btn" data-bs-toggle="modal" data-bs-target="#modalUpdateContract<?php echo $row['hopdong_id']; ?>">Update</button>

                                                    </li>
                                                    <li>
                                                        <a href="../controller/contractController.php?hopdong_id=<?php echo $row['hopdong_id'] ?>&type=delete" class="btn btn-sm btn-danger w-100 mt-2">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    <?php include '../modal/contracts/modalUpdate.php' ?>
                                <?php } ?>
                            </tbody>

                        </table>
                        
                        <?php
                        include '../component/paginate.php';
                        generatePagination($start_from, 10, $totalRow, $total_page, $next_page, $prev_page, $page, $limit);
                        ?>

                    </div>
                </div>
            </section>
            <!-- Modal -->
            <?php include '../modal/contracts/modalAdd.php' ?>
            
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <script>
        document.getElementById('addContractBtn').addEventListener('click', function(event) {
            event.preventDefault();

        });
        document.getElementById('btnAddCustomer').addEventListener('click', function(event) {
            event.preventDefault();

        });
       
    
    </script>
</body>

</html>