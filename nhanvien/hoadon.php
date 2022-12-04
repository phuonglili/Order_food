<?php
include('header.php');
?>
<main>
    <div class="nhanvien">
        <div class="btn-nhanvien">
            <button><a href="./them-hd.php"><i class="fas fa-plus"></i> Thêm hóa đơn</a></button>
        </div>
        <br>
        <section class="bang">
            <table class="bangnhanvien">
                <h3>Quản lý hóa đơn</h3>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Khách hàng</th>
                        <th>Điện thoại</th>
                        <th>Món ăn</th>
                        <th>Giá tiền</th>
                        <th>Ngày hóa đơn</th>
                        <th>Nhân viên bán</th>
                        <th>Trạng thái</th>
                        <th>Hủy hóa đơn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Đào Văn Tân</td>
                        <td>0123333333</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="hoanthanh">Hoàn thành</td>
                        <td>
                            <a href="./huy-hd.php" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Hồ Hồng Quân</td>
                        <td>0124444444</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="hoanthanh">Hoàn thành</td>
                        <td>
                            <a href="./huy-hd.php" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Nguyễn Vương</td>
                        <td>0125555555</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="huy">Hủy</td>
                        <td>
                            <a href="./huy-hd.php" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Trịnh Duy Long</td>
                        <td>0126666666</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="hoanthanh">Hoàn thành</td>
                        <td>
                            <a href="./huy-hd.php" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Hoàng Trang</td>
                        <td>0127777777</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="huy">Hủy</td>
                        <td>
                            <a href="./huy-hd.php" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Tuấn Anh</td>
                        <td>0128888888</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="hoanthanh">Hoàn thành</td>
                        <td>
                            <a href="./huy-hd.php" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</main>