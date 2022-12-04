<?php
include('header.php');
?>
<main>
    <h2 class="dash-title">Overiew</h2>
    <div class="dash-cards">
        <div class="card-single">
            <div class="card-body">
                <span class="fas fa-poll"></span>
                <div>

                    <h5>Hóa đơn</h5>
                    <h4></h4>
                    <a href="./hoadon.php">
                        Xem tất cả
                    </a>
                </div>
            </div>
        </div>
        <div class="card-single">
            <div class="card-body">
                <span class="fas fa-folder"></span>
                <div>

                    <h5>Thống kê</h5>
                    <h4></h4>
                    <a href="./thongke.php">
                        Xem tất cả
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="recent">
        <div class="activity-grid">
            <div class="activity-card">
                <h3>Bảng thực đơn</h3>
                <div></div>
                <div class="table-responsive">
                    <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên món</th>
                        <th>Loại món</th>
                        <th>Đơn giá</th>
                        <th>Ảnh món ăn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bánh mì kẹp bò</td>
                        <td>Bánh mì kẹp</td>
                        <td>55.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pizza hải sản</td>
                        <td>Pizza</td>
                        <td>129.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Há cảo hấp</td>
                        <td>Há cảo</td>
                        <td>119.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bánh mì kẹp gà</td>
                        <td>Bánh mì kẹp</td>
                        <td>55.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Pizza đặc biệt</td>
                        <td>Pizza</td>
                        <td>129.000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Gà cay</td>
                        <td>Gà chiên</td>
                        <td>39.000</td>
                    </tr>
                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>