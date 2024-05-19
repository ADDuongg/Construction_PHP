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
            <section class="detailContent p-5">
                <div class="container-fluid bg-white rounded px-5 py-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý thanh lý hợp đồng</li>
                        </ol>
                    </nav>
                    <form action="" method="GET" class="row g-3">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="hopdong_id" class="form-label">Tìm kiếm theo hợp đồng</label>
                                <select name="hopdong_id" id="hopdong_id" class="form-select" >
                                    <option value="">Tìm Hợp đồng</option>
                                    <!-- Example options, replace with dynamic content -->
                                    <option value="1">Hợp đồng 1</option>
                                    <option value="2">Hợp đồng 2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="khachhang_id" class="form-label">Khách hàng</label>
                                <select name="khachhang_id" id="khachhang_id" class="form-select" >
                                    <option value="">Tìm khách hàng</option>
                                    <!-- Example options, replace with dynamic content -->
                                    <option value="1">Khách hàng 1</option>
                                    <option value="2">Khách hàng 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex w-100 mb-3">
                                <div class="w-50 me-3">
                                    <label for="giatri_truocthue" class="form-label">Giá trị trước thuế</label>
                                    <input name="giatri_truocthue" type="text" class="form-control" value="" >
                                </div>
                                <div class="w-50">
                                    <label for="vat" class="form-label">VAT</label>
                                    <input name="vat" type="text" class="form-control" value="" >
                                </div>
                            </div>
                            <div class="d-flex w-100 mb-3">
                                <div class="w-50 me-3">
                                    <label for="giatri_sauthue" class="form-label">Giá trị sau thuế</label>
                                    <input name="giatri_sauthue" type="text" class="form-control" value="" >
                                </div>
                                <div class="w-50">
                                    <label for="ngaythanhtoan" class="form-label">Ngày thanh toán</label>
                                    <input name="ngaythanhtoan" type="date" class="form-control" value="" >
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="noidung" class="form-label">Nội dung</label>
                                <input name="noidung" type="text" class="form-control" value="" >
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex justify-content-end">
                                <div class="me-3">
                                    <button onclick="handlePrevent(event)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddContractPayment"><i class="fa-solid fa-plus me-2"></i>Thêm mới</button>
                                </div>
                                <div>
                                    <button class="btn btn-success""><i class="fa-solid fa-magnifying-glass me-2"></i>Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid bg-white rounded px-5 py-3 mt-3 overflow-x-auto">
                    <h4>Danh sách thanh lý hợp đồng</h4>
                    <div class="my-3 d-flex align-items-center">
                        <input type="number" name="limit" class="form-control w-auto me-3" value="3" min="1" >
                        <label for="limit">entries per page</label>
                    </div>
                    <div class="row" style="overflow: auto;">
                        <table class="table table-striped" style="min-width: 100vh;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Mã hợp đồng</th>
                                    <th scope="col">Mã khách hàng</th>
                                    <th scope="col">Giá trị trước thuế</th>
                                    <th scope="col">VAT</th>
                                    <th scope="col">Giá trị sau thuế</th>
                                    <th scope="col">Ngày thanh toán</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data rows, replace with dynamic content -->
                                <tr>
                                    <td>1</td>
                                    <td>Hợp đồng 1</td>
                                    <td>Khách hàng 1</td>
                                    <td>100000</td>
                                    <td>10%</td>
                                    <td>110000</td>
                                    <td>2023-05-19</td>
                                    <td>Nội dung 1</td>
                                    <td>
                                        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modalUpdateContractPayment"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" ><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php include '../modal/contractPayment/modalUpdate.php' ?>
                            </tbody>
                        </table>
                        <?php include '../modal/contractPayment/modalAdd.php' ?>

                    </div>
                </div>
            </section>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <script>
        function handlePrevent(event) {
            event.preventDefault();
            // Thực hiện các hành động khác nếu cần
            console.log('Button "Thêm mới" được nhấn');
        }
    </script>
</body>

</html>