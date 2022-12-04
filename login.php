<?php

    if(isset($_POST['login']))
    {
        $user = $_POST['user_name'];
        $pass = $_POST['user_pass'];
        if($user == 'admin' && $pass == '12345')
        {
            header("Location:admin/index.php");
        }
    }
?>