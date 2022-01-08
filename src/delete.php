<?php
    include_once("../define.php");
    include_once("../config.php");

    $id_need_del = $_GET['bd_id'];
    
    //B2: Thực hiện câu truy vấn
    $sql = "DELETE FROM blood_donor WHERE bd_id=$id_need_del";
    $result = mysqli_query($conn,$sql);

    //B3: Xử lý kết quả nếu mysqli_query thành công trả về true
    if($result == true){
        header('location:'.SITEURL.'/src/detail.php');
    }
?>