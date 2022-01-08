<?php
    include_once("./header_admin.php");
?>
<body>
    <div class="row main mx-5 my-5">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="px-2 py-2 text-danger text-center">HỆ THỐNG QUẢN LÝ NGÂN HÀNG MÁU</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4">
                    <a href="./add.php" class="bg-success px-2 py-2 text-white text-decoration-none shadow">THÊM</a>
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
                                <th scope="col" colspan="2">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                include("../define.php");
                                include("../config.php");
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
                                <td><a href="./update.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i></a></td>
                                <td><a href="./delete.php?bd_id=<?php echo $row['bd_id']; ?>" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>