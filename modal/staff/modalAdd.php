<?php  ?>

<div class="modal fade" id="modalStaff">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="overflow: hidden; overflow-x: auto;">
            <div style="min-width: 70vh; height: 100%;">
                <div class="modal-header">
                    <div class="d-flex">
                        <h3>Thêm nhân viên</h3>
                        <h3 class="text-danger">*</h3>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label for="hoten" class="form-label">Họ và tên</label>
                        <input type="text" name="hoten" class="form-control" placeholder="Nhập họ tên...">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Nhập email...">
                    </div>
                    <div class="mb-3">
                        <label for="sdt" class="form-label">Số điện thoại</label>
                        <input type="text" name="sdt" class="form-control" placeholder="Nhập số điện thoại...">
                    </div>
                    <div class="mb-3">
                        <label for="diachi" class="form-label">Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ...">
                    </div>
                    <div class="mb-3">
                        <label for="ngaysinh" class="form-label">Ngày sinh</label>
                        <input type="date" name="ngaysinh" class="form-control">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="w-50 me-3">
                            <label for="gioitinh" class="form-label">Giới tính</label>
                            <select name="gioitinh" class="form-control">
                                <option value="">Chọn giới tính</option>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                        <div class="w-50">
                            <label for="chucvu" class="form-label">Chức vụ</label>
                            <select name="chucvu" class="form-control">
                                <option value="">Chọn chức vụ</option>
                                <option value="worker">Công nhân thi công</option>
                                <option value="project manager">Quản lý dự án</option>
                                <option value="construction manager">Quản lý thi công</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</div>