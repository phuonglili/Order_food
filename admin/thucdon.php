<?php
include('header.php');
?>
<main>

    <div class="nhanvien">
        <div class="btn-nhanvien">
            <button><a href="./themma.php"><i class="fas fa-plus"></i> Thêm món ăn</a></button>
        </div>
        <br>
        <section class="bang">
            <table class="bangnhanvien">
                <h3>Quản lý thực đơn</h3>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên món</th>
                        <th>Loại món</th>
                        <th>Đơn giá</th>
                        <th>Sửa thông tin món ăn</th>
                        <th>Xóa món ăn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bánh mì kẹp bò</td>
                        <td>Bánh mì kẹp</td>
                        <td>55.000</td>
                        <td>
                            <a href="./suama.php" class="update-icon">
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
                        <td>Pizza hải sản</td>
                        <td>Pizza</td>
                        <td>129.000</td>
                        <td>
                            <a href="./suama.php" class="update-icon">
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
                        <td>Há cảo hấp</td>
                        <td>Há cảo</td>
                        <td>119.000</td>
                        <td>
                            <a href="./suama.php" class="update-icon">
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
                        <td>4</td>
                        <td>Bánh mì kẹp gà</td>
                        <td>Bánh mì kẹp</td>
                        <td>55.000</td>
                        <td>
                            <a href="./suama.php" class="update-icon">
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
                        <td>5</td>
                        <td>Pizza đặc biệt</td>
                        <td>Pizza</td>
                        <td>129.000</td>
                        <td>
                            <a href="./suama.php" class="update-icon">
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
                        <td>6</td>
                        <td>Gà cay</td>
                        <td>Gà chiên</td>
                        <td>39.000</td>
                        <td>
                            <a href="./suama.php" class="update-icon">
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