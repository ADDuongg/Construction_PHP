<?php
class ContractModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Trong phương thức getAllContracts
    public function getAllContracts($limit, $start_from, $tenhopdong, $ngaybatdau, $ngayketthuc, $khachhang_id, $giatrihopdong)
    {
        // Câu truy vấn gốc
        $sql = "SELECT hopdong.*, khachhang.hoten
        FROM hopdong
        JOIN khachhang ON khachhang.khachhang_id = hopdong.khachhang_id
        ";

        // Thêm điều kiện tìm kiếm nếu có
        $conditions = [];
        if (!empty($tenhopdong)) {
            $conditions[] = "tenhopdong LIKE '%$tenhopdong%'";
        }
        if (!empty($ngaybatdau)) {
            $conditions[] = "ngaybatdau LIKE '$ngaybatdau'";
        }
        if (!empty($ngayketthuc)) {
            $conditions[] = "ngayketthuc LIKE '$ngayketthuc'";
        }
        if (!empty($khachhang_id)) {
            $conditions[] = "khachhang_id LIKE $khachhang_id";
        }
        if (!empty($giatrihopdong)) {
            if ($giatrihopdong === '500') {
                $conditions[] = "giatrihopdong <= 500000000";
            }
            if ($giatrihopdong === '500-1500') {
                $conditions[] = "giatrihopdong BETWEEN 500000000 AND 1500000000";
            }
            if ($giatrihopdong === '1500-3000') {
                $conditions[] = "giatrihopdong BETWEEN 1500000000 AND 3000000000";
            }
            if ($giatrihopdong === '3000') {
                $conditions[] = "giatrihopdong >= 3000000000";
            }
        }

        // Nếu có điều kiện, thêm chúng vào câu truy vấn
        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(' AND ', $conditions);
        }

        // Thêm phần giới hạn và offset
        $sql .= " LIMIT $start_from, $limit";

        $result = $this->conn->query($sql);
        $contracts = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $contracts[] = $row;
            }
        }
        return $contracts;
    }

    public function getNumberRowContract()
    {
        $query = "SELECT * FROM hopdong";
        $result = $this->conn->query($query);
        return $result->num_rows;
    }
    public function getCurrentContract($id)
    {
        $query = "SELECT hopdong.*, khachhang.hoten 
              FROM hopdong 
              JOIN khachhang ON khachhang.khachhang_id = hopdong.khachhang_id 
              WHERE hopdong_id = $id";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    public function addContract($tenhopdong, $ngayky, $giatrihopdong, $tamung, $phitrehan, $conlai, $khachhang_id, $noidung, $ngaybatdau, $ngaydaohan, $ngayketthuc, $loaihopdong)
    {
        $query = "INSERT INTO hopdong (tenhopdong, ngayky, giatrihopdong, tamung, phitrehan, conlai, khachhang_id, noidung, ngaybatdau, ngaydaohan, ngayketthuc, loaihopdong) 
                  VALUES ('$tenhopdong', '$ngayky', $giatrihopdong, $tamung, $phitrehan, $conlai, $khachhang_id, '$noidung', '$ngaybatdau', '$ngaydaohan', '$ngayketthuc', '$loaihopdong')";

        return $this->conn->query($query);
    }

    public function deleteContract($hopdong_id)
    {
        $query = "DELETE FROM hopdong WHERE hopdong_id = $hopdong_id";
        return $this->conn->query($query);
    }

    public function updateContract($hopdong_id, $tenhopdong, $ngayky, $giatrihopdong, $tamung, $phitrehan, $conlai, $khachhang_id, $noidung, $ngaybatdau, $ngaydaohan, $ngayketthuc, $loaihopdong)
    {
        $query = "UPDATE hopdong SET 
                tenhopdong = '$tenhopdong', 
                ngayky = '$ngayky', 
                giatrihopdong = $giatrihopdong, 
                tamung = $tamung, 
                phitrehan = $phitrehan, 
                conlai = $conlai, 
                khachhang_id = $khachhang_id, 
                noidung = '$noidung', 
                ngaybatdau = '$ngaybatdau', 
                ngaydaohan = '$ngaydaohan', 
                ngayketthuc = '$ngayketthuc', 
                loaihopdong = '$loaihopdong'
              WHERE hopdong_id = $hopdong_id";

        return $this->conn->query($query);
    }
}
