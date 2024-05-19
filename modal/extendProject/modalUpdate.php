<div class="modal fade" id="modalUpdateExtend">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="overflow: hidden; overflow-x: auto;">
            <div style="min-width: 70vh; height: 100%;">
                <div class="modal-header">
                    <div class='d-flex'><h3>Cập nhật dự án thi công</h3><h3 class='text-danger'>*</h3></div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-2 px-4">
                    <div class="mb-3">
                        <label for="duan_id" class='form-label'>Chọn dự án gia hạn</label>
                        <select class='form-control' name="duan_id" id="">
                            <option value="">Chọn dự án</option>
                            <!-- Dữ liệu dự án sẽ được thêm vào đây thông qua JavaScript -->
                        </select>
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 w-50 me-3">
                            <label for="ngaybatdau" class='form-label'>Ngày bắt đầu</label>
                            <input type="date" name="ngaybatdau" class='form-control' readonly />
                        </div>
                        <div class="mb-3 w-50">
                            <label for="ngayketthuc" class='form-label'>Ngày kết thúc</label>
                            <input type="date" name="ngayketthuc" class='form-control' readonly />
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label for="thoigian_giahan" class='form-label'>Gia hạn đến</label>
                        <input type="date" name="thoigian_giahan" class='form-control' />
                    </div>
                    <div class="mb-3">
                        <label for="lydogiahan" class='form-label'>Lý do gia hạn</label>
                        <textarea name="lydogiahan" class='form-control' placeholder=''></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>
