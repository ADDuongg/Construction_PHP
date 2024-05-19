<div class="modal fade" id="modalAddPermit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="overflow: hidden; overflow-x: auto;">
            <div style="min-width: 70vh; height: 100%;">
                <div class="modal-header">
                    <div class="d-flex">
                        <h3>Thêm giấy phép xây dựng</h3>
                        <h3 class="text-danger">*</h3>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label for="khachhang_id" class="form-label">Danh sách khách hàng</label>
                        <select onchange="handleChange(event)" name="khachhang_id" id="" class="form-select">
                            <option value="">Tìm khách hàng</option>
                            <!-- Example customer options, replace with dynamic content -->
                            <option value="1">Customer 1</option>
                            <option value="2">Customer 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="congtrinh_xaydung" class="form-label">Tên công trình</label>
                        <input type="text" name="congtrinh_xaydung" class="form-control" value="" onchange="handleChange(event)">
                    </div>
                    <div class="mb-3">
                        <label for="noidung" class="form-label">Nội dung giấy phép</label>
                        <input type="text" name="noidung" class="form-control" value="" onchange="handleChange(event)">
                    </div>
                    <div class="mb-3">
                        <label for="capngay" class="form-label">Ngày cấp giấy phép</label>
                        <input type="date" name="capngay" class="form-control" value="" onchange="handleChange(event)">
                    </div>
                    <div class="mb-3">
                        <label for="thoihan" class="form-label">Thời hạn giấy phép</label>
                        <input type="date" name="thoihan" class="form-control" value="" onchange="handleChange(event)">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="w-50 me-3">
                            <label for="thoigian_giahan" class="form-label">Thời gian gia hạn (có thể bỏ trống)</label>
                            <input type="date" name="thoigian_giahan" class="form-control" value="" onchange="handleChange(event)">
                        </div>
                        <div class="w-50">
                            <label for="lydo_giahan" class="form-label">Lý do gia hạn</label>
                            <input type="text" name="lydo_giahan" class="form-control" value="" onchange="handleChange(event)">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" disabled="false" onclick="handleSubmit()">
                        Thêm
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
