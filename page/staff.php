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
                            <li class="breadcrumb-item active" aria-current="page">Quản lý nhân viên</li>
                        </ol>
                    </nav>
                    <form action="" method="GET" class="row g-3">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="query" class="form-label">Tìm kiếm theo từ khóa</label>
                                <input name="query" type="search" class="form-control" placeholder="Nhập từ khóa..." />
                            </div>
                            <div class="mb-3">
                                <label for="ngaysinh" class="form-label">Ngày sinh</label>
                                <input name="ngaysinh" type="date" class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="gioitinh" class="form-label">Giới tính</label>
                                <select name="gioitinh" class="form-select">
                                    <option value="">Chọn giới tính</option>
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="chucvu" class="form-label">Chức vụ</label>
                                <select name="chucvu" class="form-select">
                                    <option value="">Chọn chức vụ</option>
                                    <option value="project manager">Quản lý dự án</option>
                                    <option value="construction manager">Quản lý thi công</option>
                                    <option value="worker">Công nhân</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex justify-content-end">
                                <div class="me-3">
                                    <button class="btn btn-primary" onclick="handlePrevent(event)" data-bs-toggle="modal" data-bs-target="#modalStaff"><i class="fa-solid fa-plus me-2"></i>Thêm mới</button>
                                </div>
                                <div>
                                    <button class="btn btn-success"><i class="fa-solid fa-magnifying-glass me-2"></i>Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid bg-white rounded px-5 py-3 mt-3 overflow-x-auto">
                    <h4>Danh sách nhân viên</h4>
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
                                    <th scope="col">Tên nhân viên</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">SDT</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Chức vụ</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <td>1</td>
                                    <td>Nguyen Van A</td>
                                    <td>email@example.com</td>
                                    <td>123456789</td>
                                    <td>123 Main St</td>
                                    <td>01/01/1990</td>
                                    <td>Nam</td>
                                    <td>Quản lý dự án</td>
                                    <td>
                                        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modalUpdateStaff"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php include '../modal/staff/modalUpdate.php' ?>
                            </tbody>
                        </table>
                        <!-- Pagination and modals would be included here -->
                        <?php include '../modal/staff/modalAdd.php' ?>
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