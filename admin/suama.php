<?php
include('header.php');
?>
<main>
    <h1>Sửa món ăn</h1>
    <div class="nhanvien">
        <form action="" method="POST" class="register">
            <div class="form-group">
                <span>Tên món ăn:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Loại món:</span>
                <br>
                <select name="loaimon" id="">
                    <option value=""></option>
                    <option value="">Pizza</option>
                    <option value="">Bánh mì kẹp</option>
                    <option value="">Há cảo</option>
                    <option value="">Gà chiên</option>
                </select>
            </div>
            <div class="form-group">
                <span>Đơn giá:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group btn-themnv">
                <button id="sua-ma"><a href="">Sửa món ăn</a></button>
                <button><a href="./thucdon.php">Thoát</a></button>
            </div>
        </form>
    </div>
</main>
<script>
    var btnsuama = document.getElementById('sua-ma');

    btnsuama.addEventListener('click', function() {
        var result = confirm("Bạn có muốn sửa món ăn?");
        if (result == true){
            alert("Bạn sửa thành công.");
            history.back();
        }  
    })
    
</script>