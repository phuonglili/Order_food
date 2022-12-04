<?php
include('header.php');
?>
<main>
    <div class="nhanvien">
        <form action="" method="POST" class="register">
            <div class="form-group">
                <span>Món ăn:</span>
                <br>
                <select name="nhanvienban" id="">
                    <option value=""></option>
                    <option value="">Bánh mì kẹp bò</option>
                    <option value="">Bánh mì kẹp gà</option>
                    <option value="">Há cảo hấp</option>
                    <option value="">Pizza hải sản</option>
                    <option value="">Pizza đặc biệt</option>
                    <option value="">Gà cay</option>
                </select>
            </div>
            <div class="form-group">
                <span>Ngày hóa đơn:</span>
                <input type="date" class="form-control" name="place">
            </div>
            <div class="form-group btn-themnv">
                <button id="thong-ke"><a href="">Thống kê</a></button>
                <button><a href="./index.php">Thoát</a></button>
            </div>
        </form>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Khách hàng</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ngày hóa đơn</th>
                                    <th>Món ăn</th>
                                    <th>Số lượng bán được</th>
                                    <th>Doanh thu</th>
                                    <th>Xóa thống kê</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>6/1/2022</td>
                                    <td>Pizza hải sản</td>
                                    <td>6</td>
                                    <td>774000</td>
                                    <td>
                                        <a href="./xoatk.php" class="delete-icon">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<script>
    var btnthongke = document.getElementById('thong-ke');
    btnthongke.addEventListener('click', function() {
        var res = confirm("Bạn chắc chắn muốn thống kê?")
        if (res == true) {
            alert('Thống kê thành công');
            history.back();
        }
    })
</script>