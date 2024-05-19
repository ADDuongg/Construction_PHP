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
                            <li class="breadcrumb-item active" aria-current="page">Quản lý khách hàng</li>
                        </ol>
                    </nav>
                    <form action="" method="GET" class="row g-3">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="hoten" class="form-label">Tên khách hàng</label>
                                <input name="hoten" type="text" class="form-control" placeholder="Nhập tên khách hàng..." />
                            </div>
                            <div class="d-flex justify-content-between w-100">
                                <div class="me-3 w-50">
                                    <label for="ngaysinh" class="form-label">Ngày sinh</label>
                                    <input name="ngaysinh" type="date" class="form-control" />
                                </div>
                                <div class="w-50">
                                    <label for="gioitinh" class="form-label">Giới tính</label>
                                    <select name="gioitinh" class="form-select" id="">
                                        <option value="">Chọn giới tính</option>
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Nhập Email..." />
                            </div>
                            <div class="mb-3">
                                <label for="loaikhachhang" class="form-label">Loại khách hàng</label>
                                <select name="loaikhachhang" id="" class="form-select">
                                    <option value="">Tìm theo loại khách hàng</option>
                                    <option value="1">Khách hàng cá nhân</option>
                                    <option value="2">Khách hàng doanh nghiệp</option>
                                    <option value="3">Khách hàng bất động sản</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="col d-flex justify-content-end">
                                <div class="me-3">
                                    <button onclick="handlePrevent(event)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddCustomer"><i class="fa-solid fa-plus me-2"></i>Thêm mới</button>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-magnifying-glass me-2"></i>Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid bg-white rounded px-5 py-3 mt-3 overflow-x-auto">
                    <h4>Danh sách hợp đồng</h4>
                    <div class="my-3 d-flex align-items-center">
                        <select name="limit" id="" class="form-select w-auto me-3">
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="limit">entries per page</label>
                    </div>
                    <div class="row" style="overflow: auto;">
                        <table class="table table-striped" style="min-width: 100vh;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">SDT</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Loại khách hàng</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>123 Street</td>
                                    <td>0123456789</td>
                                    <td>john@example.com</td>
                                    <td>01-01-1990</td>
                                    <td>
                                        <div><i class="fa-solid fa-mars text-primary fw-bold" style="font-size: 20px;"></i></div>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <button class="btn btn-primary me-2" data-bs-toggle='modal' data-bs-target='#modalUpdateCustomer'><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" colSpan="9">Không có thông tin nhân viên tìm kiếm</td>
                                </tr>
                                <?php include '../modal/customers/modalUpdate.php' ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- modal -->
            <?php include '../modal/customers/modalAdd.php' ?>
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