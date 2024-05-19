<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="sidebar pt-3 navbar-expand-lg">
        <div class="container-fluid text-center px-0">
            <div class="d-flex justify-content-start align-items-center h-100 w-100 px-3">
                <img class="rounded-circle me-3" src="../public/images/logo.png" style="height: 5rem; width: 5rem;" alt="" />
                <div style="font-size: 18px;">Tan Long Constructor</div>
            </div>
            <div class="offcanvas-xl offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <div class="d-flex align-items-center h-100 w-100">
                        <img class="rounded-circle me-3" src="../public/images/logo.png" style="width: 5rem; height: 5rem;" alt="" />
                        <a href="/" class="navbar-brand">Tan Long Constructor</a>
                    </div>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body px-0 mt-3">
                    <div class="w-100 d-flex flex-column align-items-start" style="height: 800px;">
                        <!-- Quản lý dự án -->
                        <a href="../index.php" class="navitem"><i class="fa-solid fa-house me-3"></i>Trang chủ</a>
                        <div onclick="toggleList('materialsList')" class="navitem d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center"><i class="fa-solid fa-list-check me-3"></i>Quản lý hợp đồng</div>
                            <div><i class="fa-solid fa-caret-down me-3"></i></div>
                        </div>
                        <div id="materialsList" class="w-100 hidden">
                            <ul class="w-100 p-0 d-flex flex-column align-items-start m-0 ">
                                <a href="../page/contractPayment.php" class="navitem ps-5"><i class="fa-solid fa-up-right-and-down-left-from-center me-3"></i>Thanh lý hợp đồng</a>
                                <a href="/statePayment" class="navitem ps-5"><i class="fa-solid fa-house me-3"></i>Thanh toán theo đợt</a>
                                <a href="page/contract.php" class="navitem ps-5"><i class="fa-solid fa-file-signature me-3"></i>Quản lý hợp đồng</a>
                                <a href="../page/extendContract.php" class="navitem ps-5"><i class="fa-solid fa-up-right-and-down-left-from-center me-3"></i>Gia hạn hợp đồng</a>
                            </ul>
                        </div>
                        <div onclick="toggleList('project')" class="navitem d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center"><i class="fa-solid fa-list-check me-3"></i>Quản lý dự án</div>
                            <div><i class="fa-solid fa-caret-down me-3"></i></div>
                        </div>
                        <div id="project" class="hidden">
                            <ul style="list-style: none;" class="w-100 p-0 d-flex flex-column align-items-start m-0">
                                <a href="../page/extendProject.php" class="navitem ps-5"><i class="fa-solid fa-up-right-and-down-left-from-center me-3"></i>Gia hạn dự án</a>
                                <a href="/project" class="navitem ps-5"><i class="fa-solid fa-house me-3"></i>Quản lý dự án</a>
                                <a href="/attendance" class="navitem ps-5"><i class="fa-solid fa-clipboard-user me-3"></i>Quản lý điểm danh</a>
                                <a href="/stateProject" class="navitem ps-5"><i class="fa-solid fa-arrow-trend-up me-3"></i>Giai đoạn dự án</a>
                                <a href="/detailSchedule" class="navitem ps-5"><i class="fa-solid fa-list-check me-3"></i>Danh sách công việc</a>
                            </ul>
                        </div>
                        <div onclick="toggleList('matterial')" class="navitem d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center"><i class="fa-solid fa-list-check me-3"></i>Máy móc và vật liệu xây dựng</div>
                            <div><i class="fa-solid fa-caret-down me-3"></i></div>
                        </div>
                        <div class="hidden" id="matterial">
                            <ul style="list-style: none;" class=" w-100 p-0 d-flex flex-column align-items-start m-0">
                                <a href="/matterials" class="navitem ps-5"><i class="fa-solid fa-recycle me-3"></i>Thông tin vật liệu</a>
                                <a href="/machine" class="navitem ps-5"><i class="fa-solid fa-oil-well me-3"></i>Thông tin máy móc</a>
                            </ul>
                        </div>
                        <a href="/importMatterials" class="navitem mt-3"><i class="fa-solid fa-truck-droplet me-3"></i>Nhập vật liệu</a>
                        <a href="/hireMachine" class="navitem"><i class="fa-solid fa-truck-front me-3"></i>Thuê máy móc</a>
                        <a href="../page/buildingPermit.php" class="navitem"><i class="fa-solid fa-file-circle-check me-3"></i>Giấy phép xây dựng</a>
                        <a href="../page/customer.php" class="navitem"><i class="fa-solid fa-user me-3"></i>Quản lý khách hàng</a>
                        <a href="../page/contractor.php" class="navitem"><i class="fa-solid fa-users me-3"></i>Quản lý nhà thầu</a>
                        <a href="/statistics" class="navitem"><i class="fa-solid fa-chart-simple me-3"></i>Thống kê ngày</a>
                        <a href="/assignment" class="navitem"><i class="fa-solid fa-braille me-3"></i>Phân công dự án</a>
                        <a href="../page/staff.php" class="navitem"><i class="fa-solid fa-user-gear me-3"></i>Quản lý nhân viên</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>