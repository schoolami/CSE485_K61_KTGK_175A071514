<?php
    include_once("./header_admin.php");
?>
<body>
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
                <div class="col-2"><a href="./add.php" class="bg-info px-2 py-2 text-white text-decoration-none shadow">THÊM</a></div>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã Độc Giải</th>
                                <th scope="col">Họ Và Tên</th>
                                <th scope="col">Giới Tính</th>
                                <th scope="col">Năm Sinh</th>
                                <th scope="col">Nghệ Nghiệp</th>
                                <th scope="col">Ngày Cấp Thẻ</th>
                                <th scope="col">Ngày Hết Hạn</th>
                                <th scope="col">Địa Chỉ</th>
                                <th scope="col" colspan="2">Thực Hiện</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../define.php");
                                include("../config.php");
                                $sql = "SELECT * FROM docgia";
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
                                <td><a href="./update.php?madg=<?php echo $row['madg']; ?>">Sửa</a></td>
                                <td><a href="./delete.php?madg=<?php echo $row['madg']; ?>" class="text-danger">Xóa</a></td>
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