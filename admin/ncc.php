<?php
include('header.php');
?>
<main>
    <div class="nhanvien">
        <div class="btn-nhanvien">
            <button><a href="./themncc.php"><i class="fas fa-plus"></i> Thêm nhà cung cấp</a></button>
        </div>
        <br>
        <section class="bang">
            <table class="bangnhanvien">
                <h3>Quản lý nhà cung cấp</h3>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên nhà cung cấp</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Sửa thông tin nhà cung cấp</th>
                        <th>Xóa nhà cung cấp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Thực phẩm Hoàng Long</td>
                        <td>0123444444</td>
                        <td>Chương Mỹ</td>
                        <td>
                            <a href="./suancc.php" class="update-icon">
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
                        <td>Thực phẩm Hoàng Trang</td>
                        <td>0123555555</td>
                        <td>Chương Mỹ</td>
                        <td>
                            <a href="./suancc.php" class="update-icon">
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
                        <td>3</td>
                        <td>Thực phẩm Minh Anh</td>
                        <td>0123666666</td>
                        <td>Quốc Oai</td>
                        <td>
                            <a href="./suancc.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="./xoa.php"class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</main>