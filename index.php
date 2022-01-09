<?php
    include_once("./src/header.php");
?>
    <div class="row main mx-5 my-5">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="px-2 py-2 text-danger text-center">Hệ Thống Quản Lý Thư Viện</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4"></div>
                <div class="col-2"></div>
                <div class="col-2"><a href="./src/detail.php" class="bg-secondary px-2 py-2 text-white text-decoration-none shadow">Chỉnh Sửa</a></div>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã Độc Giả</th>
                                <th scope="col">Họ Và Tên</th>
                                <th scope="col">Giới Tính</th>
                                <th scope="col">Năm Sinh</th>
                                <th scope="col">Nghệ Nghiệp</th>
                                <th scope="col">Ngày Cấp Thẻ</th>
                                <th scope="col">Ngày Hết Hạn</th>
                                <th scope="col">Địa Chỉ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("define.php");
                                include("config.php");
                                $sql = "SELECT * FROM DOCGIA";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['madg'] ;?></td>
                                <td><?php echo $row['hovaten'] ;?></td>
                                <td><?php echo $row['gioitinh'] ;?></td>
                                <td><?php echo $row['namsinh'] ;?></td>
                                <td><?php echo $row['nghenghiep'] ;?></td>
                                <td><?php echo $row['ngaycapthe'] ;?></td>
                                <td><?php echo $row['ngayhethan'] ;?></td>
                                <td><?php echo $row['diachi'] ;?></td>
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