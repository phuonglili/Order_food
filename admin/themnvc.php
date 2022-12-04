<?php
include('header.php');
?>
<main>
    <h1>Thêm nhà vận chuyển</h1>
    <div class="nhanvien">
        <form action="" method="POST" class="register">
            <div class="form-group">
                <span>Tên nhà vận chuyển:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group">
                <span>Số điện thoại:</span>
                <input type="text" class="form-control" name="place">
            </div>
            <div class="form-group btn-themnv">
                <button id="them-nvc"><a href="">Thêm nhà vận chuyển</a></button>
                <button><a href="./nvc.php">Thoát</a></button>
            </div>
        </form>
    </div>
</main>
<script>
    var btnthemnvc = document.getElementById('them-nvc');

    btnthemnvc.addEventListener('click', function() {
        var result = confirm("Bạn có muốn thêm nhà vận chuyển?");
        if (result == true){
            alert("Bạn thêm thành công.");
            history.back();
        }  
    })
    
</script>