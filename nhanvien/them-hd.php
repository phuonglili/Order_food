<?php
include('header.php');
?>
<main>
    <h1>Thêm nhà hóa đơn</h1>
    <div class="nhanvien">
        <form action="" method="POST" class="register">
            <div class="form-group">
                <span>Tên khách hàng:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Số điện thoại:</span>
                <input type="text" class="form-control" name="place">
            </div>
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
                <span>Giá tiền:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Ngày hóa đơn:</span>
                <input type="date" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Nhân viên bán:</span>
                <br>
                <select name="nhanvienban" id="">
                    <option value=""></option>
                    <option value="">Nguyễn Minh Đức</option>
                    <option value="">Nguyễn Văn Tân</option>
                    <option value="">Nguyễn Minh Vương</option>
                    <option value="">Nguyễn Minh Quân</option>
                    <option value="">Trịnh Hoàng Long</option>
                </select>
            </div>
            <div class="form-group btn-themnv">
                <button id="them-hd"><a href="">Thêm hóa đơn</a></button>
                <button><a href="./hoadon.php">Thoát</a></button>
            </div>
        </form>
    </div>
</main>
<script>
var btnthemhd = document.getElementById('them-hd');
btnthemhd.addEventListener('click', function() {
    var result = confirm("Bạn có muốn thêm hóa đơn?");
    if (result == true){
        alert("Bạn thêm thành công.");
        history.back();
    }  
})
</script>