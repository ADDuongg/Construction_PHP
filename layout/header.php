<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='container-fluid d-flex justify-content-between border-1 border-bottom shadow p-2 header'>
    <button class="btn btnsidebar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div class='d-flex align-items-center'>
        <i class="fa-solid fa-bell me-4 mt-1" style="font-size: 20px;"></i>
        <div class="dropdown">
            <div class="dropdown-toggle fw-bold" style="cursor: pointer;" data-bs-toggle="dropdown" aria-expanded="false">
                
            </div>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li onclick="handleLogout()" class="dropdown-item" style="cursor: pointer;"><i class="fa-solid fa-right-from-bracket text-danger me-3"></i> Log out</li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>