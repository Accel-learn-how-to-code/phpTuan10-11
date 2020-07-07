<!DOCTYPE html>
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
    <div class="container">
        <form action="add_process.php" method="post">
            <div class="form-group">
                <label for="FormControlInput1">Tên sản phẩm</label>
                <input type="text" class="form-control" id="FormControlInput1" placeholder="Tên sản phẩm" name="TenSP">
            </div>
            <div class="form-group">
                <label for="FormControlSelect1">Nhóm sản phẩm</label>
                <select class="form-control" id="FormControlSelect1" name="IdNhomSp">
                    <?php
                        include_once("connect.php");
                        $sql = "select * from nhomsanpham";
                        $result = mysqli_query($connect, $sql);
                        while(($rows = mysqli_fetch_assoc($result)) != NULL){
                        echo "<option value=".$rows['ID'].">".$rows['TenNhom']."</option>";
                        } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="FormControlInput2">Giá sản phẩm</label>
                <input type="number" class="form-control" id="FormControlInput2" placeholder="Giá sản phẩm" name="GiaSP">
            </div>
            <button  class="btn btn-primary">
                Add
            </button>
        </form>
    </div>
</body>

</html>