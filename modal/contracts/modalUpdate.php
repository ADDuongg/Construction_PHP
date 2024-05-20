<?php  ?>

<div class="modal fade" id="modalUpdateContract<?php echo $row['hopdong_id']; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="overflow: hidden; overflow-x: auto;">
            <div style="min-width: 70vh; height: 100%;">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class='d-flex'>
                        <h3>Thêm hợp đồng xây dựng</h3>
                        <h3 class='text-danger'>*</h3>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <form method="POST" action="/version_PHP/controller/contractController.php" class="modal-body py-2 px-4 h-100 w-100">
                    <div class="mb-3">
                        <label for="tenhopdong" class='form-label'>Tên hợp đồng</label>
                        <input type="text" name="tenhopdong" class='form-control' placeholder='Nhập tên hợp đồng...'  />
                    </div>
                    <div class="mb-3">
                        <label for="ngayky" class='form-label'>Ngày ký</label>
                        <input type="date" name="ngayky" class='form-control'  />
                    </div>
                    <div class="mb-3">
                        <label for="giatrihopdong" class='form-label'>Giá trị hợp đồng</label>
                        <input type="text" name="giatrihopdong" class='form-control' placeholder='Nhập giá trị hợp đồng...'  />
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 w-50 me-3">
                            <label for="tamung" class='form-label'>Tạm ứng</label>
                            <input type="text" name="tamung" class='form-control' placeholder='Nhập số tiền tạm ứng...'  />
                        </div>
                        <div class="mb-3 w-50">
                            <label for="conlai" class='form-label'>Còn lại</label>
                            <input type="text" name="conlai" class='form-control' placeholder='Nhập số tiền còn lại...'  />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phitrehan" class='form-label'>Phí trễ hạn</label>
                        <input type="text" name="phitrehan" class='form-control' placeholder='Nhập số tiền trễ hạn...'  />
                    </div>
                    <div class="d-flex mb-3 align-items-end justify-content-between">
                        <div class="mb-3 w-50">
                            <label for="khachhang_id" class='form-label'>Khách hàng</label>
                            <select  name="khachhang_id" id="" class='form-select'>
                                <option value="">Tìm khách hàng</option>
                                <?php
                                foreach ($customers as $item) {
                                ?>
                                    <option value=<?php echo $item['khachhang_id'] ?>><?php echo $item['hoten'] ?></option>
                                <?php
                                }

                                ?>
                            </select>
                        </div>
                        <div class="mb-3 d-flex ">
                            <p class='fw-bold' style="font-size: 15px;">Không tìm thấy khách hàng?</p>
                            <button id="btnAddCustomer" data-bs-toggle="modal" data-bs-target="#modalAddCustomer" class='btn btn-success ms-2 '>Thêm khách hàng</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="noidung" class='form-label'>Nội dung</label>
                        <textarea name="noidung" class='form-control' placeholder='Nhập nội dung...' ></textarea>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="w-50 me-3">
                            <label for="ngaybatdau" class='form-label'>Ngày bắt đầu</label>
                            <input type="date" name="ngaybatdau" class='form-control'  />
                        </div>
                        <div class="w-50">
                            <label for="ngayketthuc" class='form-label'>Ngày kết thúc</label>
                            <input type="date" name="ngayketthuc" class='form-control'  />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ngaydaohan" class='form-label'>Ngày đáo hạn</label>
                        <input type="date" name="ngaydaohan" class='form-control'  />
                    </div>
                    <div class="mb-3">
                        <label for="loaihopdong" class='form-label'>Loại hợp đồng</label>
                        <input type="text" name="loaihopdong" class='form-control'  />
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Đóng</button>
                    <button  type="submit" class="btn btn-primary"  >Thêm</button>
                </div>
                </form>
                
                
            </div>
        </div>
    </div>
</div>