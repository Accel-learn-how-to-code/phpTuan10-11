<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="container" style="max-width: 800px;">
        <div class="row">
            <div class="col-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Nhóm sản phẩm</li>
                    </ol>
                </nav>
                <ul class="list-group">
                    <?php
                        include_once("connect.php");
                        $sql = "select * from nhomsanpham";
                        $result = mysqli_query($connect, $sql);
                        while(($rows = mysqli_fetch_assoc($result)) != NULL){
                    ?>
                    <a href="?id=<?php echo $rows['ID'];?>"><li class="list-group-item"><?php echo $rows['TenNhom'];?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                    </ol>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên SP</th>
                            <th scope="col">Giá SP</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                                $sqlTable = "select * from sanpham where IdNhomSP = ".$id;
                            }
                            else{
                                $sqlTable = "select * from sanpham"; 
                            }
                            $resultTable = mysqli_query($connect, $sqlTable);
                            while(($rowTable = mysqli_fetch_assoc($resultTable)) != NULL){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $rowTable['ID']; ?></th>
                            <td><?php echo $rowTable['TenSP']; ?></td>
                            <td><?php echo $rowTable['GiaSP']; ?></td>
                            <td><a href="delete.php?id=<?php echo $rowTable['Id'];?>">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="add.php">
                    <div class="btn btn-primary">ADD MORE
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php mysqli_close($connect); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>