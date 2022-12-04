<?php
include('header.php');
?>
<main>
    <h1>Thêm nhà cung cấp</h1>
    <div class="nhanvien">
        <form action="" method="POST" class="register">
            <div class="form-group">
                <span>Tên nhà cung cấp:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Số điện thoại:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Địa chỉ:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group btn-themnv">
                <button id="them-ncc"><a href="">Thêm nhà cung cấp</a></button>
                <button><a href="./ncc.php">Thoát</a></button>
            </div>
        </form>
    </div>
</main>
<script>
    var btnthemncc = document.getElementById('them-ncc');

    btnthemncc.addEventListener('click', function() {
        var result = confirm("Bạn có muốn thêm nhà cung cấp?");
        if (result == true){
            alert("Bạn thêm thành công.");
            history.back();
        }  
    })
    
</script>