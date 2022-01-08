<?php
    include_once("./src/header.php");
?>
    <div class="row main mx-5 my-5">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="px-2 py-2 text-danger text-center">HỆ THỐNG QUẢN LÝ NGÂN HÀNG MÁU</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4">
                    <a href="./src/detail.php" class="bg-warning px-2 py-2 text-white text-decoration-none shadow">CHI TIẾT</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã người hiến máu</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Tuổi</th>
                                <th scope="col">Nhóm máu</th>
                                <th scope="col">Ngày đăng ký</th>
                                <th scope="col">Số điện thoại</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                include("define.php");
                                include("config.php");
                                $sql = "SELECT * FROM blood_donor";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i; $i++ ?></th>
                                <td><?php echo $row['bd_id'] ;?></td>
                                <td><?php echo $row['bd_name'] ;?></td>
                                <td><?php echo $row['bd_sex'] ;?></td>
                                <td><?php echo $row['bd_age'] ;?></td>
                                <td><?php echo $row['bd_bgroup'] ;?></td>
                                <td><?php echo $row['bd_reg_date'] ;?></td>
                                <td><?php echo $row['bd_phno'] ;?></td>
                            </tr>
                            <?php
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once("./src/footer.php");
?>