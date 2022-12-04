<?php
include('header.php');
?>
<main>
    <div class="nhanvien">
        <div class="btn-nhanvien">
            <button><a href="./themnv.php"><i class="fas fa-user-plus"></i> Thêm nhân viên</a></button>
        </div>
        <br>
        <section class="bang">
            <table class="bangnhanvien">
                <h3>Quản lý nhân viên</h3>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Giới tính</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày bắt đầu làm</th>
                        <th>Sửa thông tin</th>
                        <th>Xóa nhân viên</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Minh Đức</td>
                        <td>Nam</td>
                        <td>0392222222</td>
                        <td>Ninh Bình</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="./xoa.php"class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nguyễn Văn Tân</td>
                        <td>Nam</td>
                        <td>0393333333</td>
                        <td>Thái Bình</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="./xoa.php" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Nguyễn Minh Vương</td>
                        <td>Nam</td>
                        <td>0394444444</td>
                        <td>Hà Nội</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Nguyễn Minh Quân</td>
                        <td>Nam</td>
                        <td>0395555555</td>
                        <td>Nghệ An</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Trịnh Hoàng Long</td>
                        <td>Nam</td>
                        <td>0396666666</td>
                        <td>Hà Nội</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</main>
