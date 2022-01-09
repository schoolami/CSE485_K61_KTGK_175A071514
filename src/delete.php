<?php
    include_once("../define.php");
    include_once("../config.php");

    $id = $_GET['madg'];
    
    //B2: Thực hiện câu truy vấn
    $sql = "DELETE FROM docgia WHERE madg=$id";
    $result = mysqli_query($conn,$sql);

    //B3: Xử lý kết quả nếu mysqli_query thành công trả về true
    if($result == true){
        header('location:'.SITEURL.'/src/detail.php');
    }
?>