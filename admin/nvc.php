<?php
include('header.php');
?>
<main>
    <div class="nhanvien">
        <div class="btn-nhanvien">
            <button><a href="./themnvc.php"><i class="fas fa-plus"></i> Thêm nhà vận chuyển</a></button>
        </div>
        <br>
        <section class="bang">
            <table class="bangnhanvien">
                <h3>Quản lý nhà vận chuyển</h3>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên nhà vận chuyển</th>
                        <th>Điện thoại</th>
                        <th>Sửa thông tin nhà vận chuyển</th>
                        <th>Xóa nhà vận chuyển</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Grab</td>
                        <td>0123444444</td>
                        <td>
                            <a href="./suanvc.php" class="update-icon">
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
                        <td>Bee</td>
                        <td>0123555555</td>
                        <td>
                            <a href="./suanvc.php" class="update-icon">
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
                        <td>Baemin</td>
                        <td>0123666666</td>
                        <td>
                            <a href="./suanvc.php" class="update-icon">
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
                        <td>NowFood</td>
                        <td>01237777777</td>
                        <td>
                            <a href="./suanvc.php" class="update-icon">
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