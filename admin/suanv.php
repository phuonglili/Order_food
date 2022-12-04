<?php
include('header.php');
?>
<main>
    <h1>Sửa thông tin nhân viên</h1>
    <div class="nhanvien">
        <form action="" method="POST" class="register">
            <div class="form-group">
                <span>Họ tên:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Ngày sinh:</span>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-group">
                <span>Số điện thoại:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Địa chỉ:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Ngày bắt đầu làm:</span>
                <input type="date" class="form-control" name="place">
            </div>
            <div class="form-group btn-themnv">
                <button id="sua-nv"><a href="">Sửa nhân viên</a></button>
                <button><a href="./employee.php">Thoát</a></button>
            </div>
        </form>
    </div>
</main>
<script>
    var btnsuanv = document.getElementById('sua-nv');
    btnsuanv.addEventListener('click', function() {
        var result = confirm("Bạn có muốn sửa nhân viên?");
        if (result == true){
            alert("Bạn sửa thành công.");
            history.back();   
        }
    })
</script>