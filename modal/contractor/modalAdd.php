<?php  ?>

<div class="modal fade" id="modalAddContractor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="overflow: hidden; overflow-x: auto;">
            <div style="min-width: 70vh; height: 100%;">
                <div class="modal-header">
                    <div class="d-flex">
                        <h3>Thêm nhà thầu</h3>
                        <h3 class="text-danger">*</h3>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" class="modal-body p-4">
                    <div class="mb-3">
                        
                        <input type="hidden" name="action" value="add" class="form-control" placeholder="Nhập họ tên..." />
                    </div>
                    <div class="mb-3">
                        <label for="tennhathau" class="form-label">Tên nhà thầu</label>
                        <input type="text" name="tennhathau" class="form-control" placeholder="Nhập họ tên..." />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Nhập email..." />
                    </div>
                    <div class="mb-3">
                        <label for="sdt" class="form-label">Số điện thoại</label>
                        <input type="text" name="sdt" class="form-control" placeholder="Nhập số điện thoại..." />
                    </div>
                    <div class="mb-3">
                        <label for="diachi" class="form-label">Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ..." />
                    </div>
                    <div class="mb-3">
                        <label for="loaihinhhoatdong" class="form-label">Loại hình hoạt động</label>
                        <input type="text" name="loaihinhhoatdong" class="form-control" />
                    </div>
                    <div class="modal-footer">
                        <button onclick="handlePrevent()" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>