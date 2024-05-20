<div class="modal fade" id="modalUpdateContractor<?php echo $row['nhathau_id'] ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="overflow: hidden; overflow-x: auto;">
            <div style="min-width: 70vh; height: 100%;">
                <div class="modal-header">
                    <div class="d-flex">
                        <h3>Sửa nhà thầu</h3>
                        <h3 class="text-danger">*</h3>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="modal-body p-4" action="" method="POST">
                    <input type="hidden" name="nhathau_id" value="<?php echo $row['nhathau_id']; ?>" />
                    <input type="hidden" name="action" value="update" class="form-control" />
                    <div class="mb-3">
                        <label for="tennhathau" class="form-label">Tên nhà thầu</label>
                        <input type="text" name="tennhathau" class="form-control" value="<?php echo $row['tennhathau']; ?>" placeholder="Nhập họ tên..." />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Nhập email..." />
                    </div>
                    <div class="mb-3">
                        <label for="sdt" class="form-label">Số điện thoại</label>
                        <input type="text" name="sdt" class="form-control" value="<?php echo $row['sdt']; ?>" placeholder="Nhập số điện thoại..." />
                    </div>
                    <div class="mb-3">
                        <label for="diachi" class="form-label">Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" value="<?php echo $row['diachi']; ?>" placeholder="Nhập địa chỉ..." />
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="w-50 me-3">
                            <label for="loaihinhhoatdong" class="form-label">Loại hình hoạt động</label>
                            <input type="text" name="loaihinhhoatdong" class="form-control" value="<?php echo $row['loaihinhhoatdong']; ?>" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button onclick="handlePrevent()" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
