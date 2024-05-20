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
                            <li class="breadcrumb-item active" aria-current="page">Quản lý nhà thầu</li>
                        </ol>
                    </nav>
                    <form action="" method="GET" class="row g-3">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="tennhathau" class="form-label">Tên nhà thầu</label>
                                <input name="tennhathau" type="text" class="form-control" placeholder="Nhập tên nhà thầu..." />
                            </div>
                            <div class="d-flex justify-content-between w-100">
                                <div class="me-3 w-50">
                                    <label for="diachi" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" name="diachi" placeholder="Nhập địa chỉ..." />
                                </div>
                                <div class="w-50">
                                    <label for="sdt" class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" name="sdt" placeholder="Nhập số điện thoại..." />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Nhập Email..." />
                            </div>
                            <div class="mb-3">
                                <label for="loaihinhhoatdong" class="form-label">Loại hình hoạt động</label>
                                <input type="text" class="form-control" name="loaihinhhoatdong" placeholder="Nhập loại hình hoạt động..." />
                            </div>
                        </div>
                    
                        <div class="col-12">
                            <div class="col d-flex justify-content-end">
                                <div class="me-3">
                                    <button class="btn btn-primary" onclick="handlePrevent(event)" data-bs-toggle="modal" data-bs-target="#modalAddContractor">
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
                    <h4>Danh sách nhà thầu</h4>
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
                                    <th scope="col">Tên nhà thầu</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">SDT</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Loại hình hoạt động</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nhà thầu A</td>
                                    <td>123 Đường ABC</td>
                                    <td>0123456789</td>
                                    <td>emaila@example.com</td>
                                    <td>Loại hình A</td>
                                    <td>
                                        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modalUpdateContractor">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php include '../modal/contractor/modalUpdate.php' ?>
                            </tbody>
                        </table>
                        <!-- Pagination and Modals will go here -->
                    </div>
                </div>
            </section>
                <?php include '../modal/contractor/modalAdd.php' ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <script src="../js/index.js"></script>
    <script>
        function handlePrevent(event) {
            event.preventDefault();

            console.log('Button "Thêm mới" được nhấn');
        }
    </script>
</body>

</html>