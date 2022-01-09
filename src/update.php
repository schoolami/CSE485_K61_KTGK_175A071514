<?php
    include_once("./header_admin.php");
    include_once("../define.php");
    include_once("../config.php");
?>
    <div class="row main mx-5 my-5">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-danger text-center">Sửa Thông Tin Độc Giả</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="" method="POST">
                    <?php
                        $id = $_GET['madg'];
                        $sql = "SELECT * FROM docgia WHERE madg=$id";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div class="mb-3">
                            <label for="text1" class="form-label">Họ Và Tên</label>
                            <input type="text" class="form-control" id="text1" name="txt1" required value="<?php echo $row ['hovaten']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="text2" class="form-label">Giới Tính</label>
                            <input type="text" class="form-control" id="text2" name="txt2" required value="<?php echo $row ['gioitinh']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="text3" class="form-label">Năm Sinh</label>
                            <input type="number" class="form-control" id="text3" name="txt3" required value="<?php echo $row ['namsinh']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="text4" class="form-label">Nghệ Nghiệp</label>
                            <input type="text" class="form-control" id="text4" name="txt4" required value="<?php echo $row ['nghenghiep']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="text5" class="form-label">Ngày Cấp Thẻ</label>
                            <input type="date" class="form-control" id="text5" name="txt5" required value="<?php echo $row ['ngaycapthe']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="text6" class="form-label">Ngày Hết Hạn</label>
                            <input type="date" class="form-control" id="text6" name="txt6" required value="<?php echo $row ['ngayhethan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="text7" class="form-label">Địa Chỉ</label>
                            <input type="text" class="form-control" id="text7" name="txt7" required value="<?php echo $row ['diachi']; ?>">
                        </div>
                        <button type="sumbit" class="btn btn-primary mb-2 text-white" name="btn-edit">XÁC NHẬN</button>
                    <?php
                        }
                    }
                    ?>
                    </form>
                    <?php
                        if(isset($_POST['btn-edit'])){ //isset là kiểm tra biến có tồn tại hay không
                            $txt1 = $_POST['txt1'];
                            $txt2 = $_POST['txt2'];
                            $txt3 = $_POST['txt3'];
                            $txt4 = $_POST['txt4'];
                            $txt5 = $_POST['txt5'];
                            $txt6 = $_POST['txt6'];
                            $txt7 = $_POST['txt7'];

                            //B2 : Thực hiện truy vấn
                            $sql = "UPDATE `docgia` SET `hovaten` = '$txt1', `gioitinh` = '$txt2', `namsinh` = '$txt3', `nghenghiep`='$txt4', `ngaycapthe` = '$txt5', `ngayhethan`='$txt6', `diachi` ='$txt7' WHERE `docgia`.`madg` = $id";
                            $result = mysqli_query($conn,$sql);
                            //B3: Xử lý kết quả nếu mysqli_query thành công trả về true
                            if($result == true){
                                header('location:'.SITEURL.'/src/detail.php');
                            }
                            else{
                                header('location:'.SITEURL.'/src/error.php');
                            }
                        }
                        mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once("./footer.php");
?>