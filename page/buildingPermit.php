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
                            <a href="/" class="breadcrumb-item">Home</a>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý giấy phép xây dựng</li>
                        </ol>
                    </nav>
                    <form action="" method="GET" class="row g-3">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="congtrinh_xaydung" class="form-label">Tìm kiếm theo tên công trình</label>
                                <input name="congtrinh_xaydung" type="search" class="form-control" placeholder="Nhập từ khóa...">
                            </div>
                            <div class="mb-3">
                                <label for="noidung" class="form-label">Nội dung</label>
                                <input name="noidung" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="d-flex w-100 mb-3">
                                <div class="w-50 me-3">
                                    <label for="capngay" class="form-label">Cấp ngày</label>
                                    <input name="capngay" type="date" class="form-control">
                                </div>
                                <div class="w-50">
                                    <label for="thoihan" class="form-label">Thời hạn giấy phép</label>
                                    <input name="thoihan" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex w-100 mb-3">
                                <div class="w-50 me-3">
                                    <label for="khachhang_id" class="form-label">Khách hàng</label>
                                    <select name="khachhang_id" class="form-select">
                                        <option value="">Tìm khách hàng</option>
                                    </select>
                                </div>
                                <div class="w-50">
                                    <label for="thoigian_giahan" class="form-label">Thời gian gia hạn</label>
                                    <input name="thoigian_giahan" type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex justify-content-end">
                                <div class="me-3">
                                    <button onclick="handlePrevent(event)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddPermit">
                                        <i class="fa-solid fa-plus me-2"></i>Thêm mới
                                    </button>
                                </div>
                                <div>
                                    <button class="btn btn-success">
                                        <i class="fa-solid fa-magnifying-glass me-2"></i>Tìm kiếm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid bg-white rounded px-5 py-3 mt-3 overflow-x-auto">
                    <h4>Danh sách giấy phép xây dựng</h4>
                    <div class="my-3 d-flex align-items-center">
                        <select name="limit" class="form-select w-auto me-3">
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
                                    <th scope="col">Tên công trình</th>
                                    <th scope="col">Khách hàng</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Cấp ngày</th>
                                    <th scope="col">Thời hạn giấy phép</th>
                                    <th scope="col">Thời gian gia hạn</th>
                                    <th scope="col">Lý do gia hạn</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Công trình A</td>
                                    <td>Nguyễn Văn A</td>
                                    <td>Xây dựng nhà ở</td>
                                    <td>2024-01-01</td>
                                    <td>2025-01-01</td>
                                    <td>2025-06-01</td>
                                    <td>Gia hạn do thời tiết</td>
                                    <td>
                                    <button class="btn btn-primary me-2" data-bs-toggle='modal' data-bs-target='#modalUpdatePermit'><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php include '../modal/buildingpermit/modalUpdate.php' ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php include '../modal/buildingpermit/modalAdd.php' ?>
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