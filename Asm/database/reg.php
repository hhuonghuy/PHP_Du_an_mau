<?php
require 'connect.php';
if(isset($_POST['btn-reg'])){
    echo "<pre>";
    print_r($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username)&&!empty($password)){
        //echo "<pre>";
        //print_r($_POST);

        $sql = "INSERT INTO `admin` (`username`, `password`) value('$username', '$password')";
    
        if($conn->query($sql)===TRUE){
            echo "Lưu dữ liệu thành công";
        }else{
            echo "Lỗi {$sql}".$conn->error;
        }
    }else{
        echo "ban can nhap username va password";
    }
}
?>
<br>
<a href="/php/Du an mau/Asm/them_xoa_sua/admin/index.php">Qua trang admin</a>