<div class="modal fade" id="modalUpdateContractPayment">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="overflow: hidden; overflow-x: auto;">
            <div style="min-width: 70vh; height: 100%;">
                <div class="modal-header">
                    <div class="d-flex">
                        <h3>Sửa thông tin hợp đồng thanh toán</h3>
                        <h3 class="text-danger">*</h3>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body py-2 px-4">
                    <div class="mb-3">
                        <label for="hopdong_id" class="form-label">Mã hợp đồng</label>
                        <select name="hopdong_id" class="form-select">
                            <option>Chọn Hợp đồng</option>
                            <!-- Options for contracts should be dynamically inserted here -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="khachhang_id" class="form-label">Mã khách hàng</label>
                        <select name="khachhang_id" id="khachhang_id" class="form-select">
                            <option value="">Chọn khách hàng</option>
                            <!-- Options for customers should be dynamically inserted here -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="giatri_truocthue" class="form-label">Giá trị trước thuế</label>
                        <input type="text" name="giatri_truocthue" class="form-control" placeholder="Nhập giá trị trước thuế..." />
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 w-50 me-3">
                            <label for="vat" class="form-label">VAT</label>
                            <input type="text" name="vat" class="form-control" placeholder="Nhập VAT..." />
                        </div>
                        <div class="mb-3 w-50">
                            <label for="giatri_sauthue" class="form-label">Giá trị sau thuế</label>
                            <input type="text" name="giatri_sauthue" class="form-control" placeholder="Nhập giá trị sau thuế..." />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ngaythanhtoan" class="form-label">Ngày thanh toán</label>
                        <input type="date" name="ngaythanhtoan" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="noidung" class="form-label">Nội dung</label>
                        <textarea name="noidung" class="form-control" placeholder="Nhập nội dung..."></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">
                        Lưu
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
