<div class="modal fade" id="modalAddExtendContract">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div style="min-width: 70vh; height: 100%;">
                <div class="modal-header">
                    <div class='d-flex'><h3>Gia hạn hợp đồng</h3><h3 class='text-danger'>*</h3></div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-2 px-4">
                    <div class="mb-3">
                        <label for="hopdong_id" class='form-label'>Chọn hợp đồng gia hạn</label>
                        <select class='form-control' name="hopdong_id" id="">
                            <option value="">Chọn hợp đồng</option>
                            <!-- Dữ liệu được tạo ra từ các phần tử JSX đã bị loại bỏ -->
                        </select>
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 w-50 me-3">
                            <label for="ngaybatdau" class='form-label'>Ngày bắt đầu</label>
                            <input readOnly type="date" name="ngaybatdau" class='form-control' value="" />
                        </div>
                        <div class="mb-3 w-50">
                            <label for="ngayketthuc" class='form-label'>Ngày kết thúc</label>
                            <input readOnly type="date" name="ngayketthuc" class='form-control' value="" />
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label for="thoigian_giahan" class='form-label'>Gia hạn đến</label>
                        <input type="date" name="thoigian_giahan" class='form-control' />
                    </div>
                    <div class="mb-3">
                        <label for="khachhang_id" class='form-label'>Khách hàng gia hạn</label>
                        <select class='form-control' name="khachhang_id" id="">
                            <option value="">Chọn khách hàng</option>
                            <!-- Dữ liệu được tạo ra từ các phần tử JSX đã bị loại bỏ -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lydogiahan" class='form-label'>Lý do gia hạn</label>
                        <textarea name="lydogiahan" class='form-control' placeholder=''></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nguoigiahan" class='form-label'>Người gia hạn : <strong>{user[0].hoten}</strong></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary disabled">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</div>
