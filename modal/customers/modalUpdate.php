<div class="modal fade" id="modalUpdateCustomer">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="overflow: hidden; overflow-x: auto;">
                <div style="min-width: 80vh; height: 100%;">
                    <div class="modal-header">
                        <div class='d-flex'>
                            <h3>Sửa khách hàng</h3>
                            <h3 class='text-danger'>*</h3>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label for="hoten" class='form-label'>Tên khách hàng</label>
                            <input type="text" name="hoten" class='form-control' placeholder='Nhập họ tên...'>
                        </div>
                        <div class="mb-3">
                            <label for="email" class='form-label'>Email</label>
                            <input type="text" name='email' class='form-control' placeholder='Nhập email...'>
                        </div>
                        <div class="mb-3">
                            <label for="sdt" class='form-label'>Số điện thoại</label>
                            <input type="text" name="sdt" class='form-control' placeholder='Nhập số điện thoại...'>
                        </div>
                        <div class="mb-3">
                            <label for="diachi" class='form-label'>Địa chỉ</label>
                            <input type="text" name='diachi' class='form-control' placeholder='Nhập địa chỉ...'>
                        </div>
                        <div class='d-flex justify-content-between w-100'>
                            <div class='me-3 w-50'>
                                <label for="ngaysinh" class='form-label'>Ngày sinh</label>
                                <input name='ngaysinh' type="date" class='form-control '>
                            </div>
                            <div class="w-50 ">
                                <label for="gioitinh" class='form-label'>Giới tính</label>
                                <select name="gioitinh" class='form-control'>
                                    <option value="">Chọn giới tính</option>
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="w-50 me-3">
                                <label for="loaikhachhang" class='form-label'>Loại khách hàng</label>
                                <input type="text" name='loaikhachhang' class='form-control'>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>