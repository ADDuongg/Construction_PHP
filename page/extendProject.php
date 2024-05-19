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
                            <li class="breadcrumb-item active" aria-current="page">Quản lý gia hạn dự án</li>
                        </ol>
                    </nav>
                    <div class="row  g-3">
                        <div class="col-lg-6 col-12">
                            <div class='mb-3'>
                                <label for="tenduan" class='form-label'>Tên dự án</label>
                                <input name='tenduan' type="text" class='form-control' placeholder='Nhập tên dự án...' />
                            </div>
                            <div class='d-flex justify-content-between w-100'>
                                <div class='me-3 w-50'>
                                    <label for="ngaybatdau" class='form-label'>Ngày bắt đầu dự án</label>
                                    <input name='ngaybatdau' type="date" class='form-control ' />
                                </div>
                                <div class='w-50'>
                                    <label for="ngayketthuc" class='form-label'>Ngày kết thúc dự án</label>
                                    <input name='ngayketthuc' type="date" class='form-control ' />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class='w-100 d-flex'>
                                <div class='mb-3 w-100'>
                                    <label for="hopdong_id" class='form-label'>Hợp đồng</label>
                                    <select name="hopdong_id" id="" class='form-select'>
                                        <option value="">Chọn hợp đồng</option>
                                        <!-- Lặp qua danh sách hợp đồng -->
                                        <!-- <option value="hopdong_id">Tên hợp đồng</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class='d-flex justify-content-between w-100'>
                                <div class='me-3 w-50'>
                                    <label for="thoigiangiahan" class='form-label'>Ngày gia hạn</label>
                                    <input name='thoigiangiahan' type="date" class='form-control ' />
                                </div>
                                <div class='w-50'>
                                    <label for="lydogiahan" class='form-label'>Lý do gia hạn</label>
                                    <input name='lydogiahan' type="text" class='form-control ' />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col d-flex justify-content-end">
                            <div class="me-3">
                                <button class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#modalAddExtend"><i class="fa-solid fa-plus me-2"></i>Thêm mới</button>
                            </div>
                            <div>
                                <button class='btn btn-success' onClick="handleSearch"><i class="fa-solid fa-magnifying-glass me-2"></i>Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bg-white rounded px-5 py-3 mt-3 overflow-x-auto">
                    <h4>Danh sách dự án</h4>
                    <div class="my-3  d-flex align-items-center">
                        <select name="limit" id="" class='form-select w-auto me-3' onChange="handleInputChange()">
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="limit">entries per page</label>
                    </div>
                    <div class="row">
                        <table class="table" style="min-width: 100vh;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên dự án</th>
                                    <th scope="col">Ngày bắt đầu dự án</th>
                                    <th scope="col">Ngày kết thúc dự án</th>
                                    <th scope="col">Thời gian gia hạn</th>
                                    <th scope="col">Lý do gia hạn</th>
                                    <th scope="col">Người gia hạn</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dự án A</td>
                                    <td>2024-05-20</td>
                                    <td>2024-08-30</td>
                                    <td>2024-09-15</td>
                                    <td>Lý do 1</td>
                                    <td>Người 1</td>
                                    <td>
                                        <div class="dropdown dropstart w-auto">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Hành động
                                            </button>
                                            <ul class="dropdown-menu px-3">
                                                <li><button class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#modalUpdateExtend"><i class="fa-solid fa-pen-to-square me-3"></i>Update</button></li>
                                                <li><button class="btn btn-danger w-100"><i class="fa-solid fa-trash me-3"></i>Delete</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php include '../modal/extendProject/modalUpdate.php' ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </section>
            <?php include '../modal/extendProject/modalAdd.php' ?>

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