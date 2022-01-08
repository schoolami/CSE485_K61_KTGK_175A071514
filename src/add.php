<?php
    include_once("./header_admin.php");
    include_once("../define.php");
    include_once("../config.php");
?>
    <div class="row main mx-5 my-5">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-danger text-center">THÊM NGƯỜI HIẾN MÁU MỚI</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="text1" class="form-label">Tên người hiến máu</label>
                            <input type="text" class="form-control" id="text1" name="txt1" required placeholder="Nguyễn Văn A">
                        </div>
                        <div class="mb-3">
                            <label for="text2" class="form-label">Giới tính</label>
                            <input type="text" class="form-control" id="text2" name="txt2" required placeholder="Nam">
                        </div>
                        <div class="mb-3">
                            <label for="text3" class="form-label">Tuổi</label>
                            <input type="number" class="form-control" id="text3" name="txt3" required placeholder="18">
                        </div>
                        <div class="mb-3">
                            <label for="text4" class="form-label">Nhóm máu</label>
                            <input type="text" class="form-control" id="text4" name="txt4" required placeholder="AB">
                        </div>
                        <div class="mb-3">
                            <label for="text5" class="form-label">Ngày đăng ký hiến máu</label>
                            <input type="date" class="form-control" id="text5" name="txt5" required>
                        </div>
                        <div class="mb-3">
                            <label for="text6" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="text6" name="txt6" required placeholder="0989723212">
                        </div>
                        <button type="sumbit" class="btn btn-success mb-2 text-white" name="btn-add">THÊM MỚI</button>
                    </form>
                    <?php
                        if(isset($_POST['btn-add'])){ //isset là kiểm tra biến có tồn tại hay không
                            $txt1 = $_POST['txt1'];
                            $txt2 = $_POST['txt2'];
                            $txt3 = $_POST['txt3'];
                            $txt4 = $_POST['txt4'];
                            $txt5 = $_POST['txt5'];
                            $txt6 = $_POST['txt6'];

                            //B2 : Thực hiện truy vấn
                            $sql = "INSERT INTO `blood_donor` VALUES (NULL, '$txt1', '$txt2', '$txt3', '$txt4', '$txt5', '$txt6')";
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