
<?php 
    include('connect.php');
    $IdNhomSp = $_POST['IdNhomSp'];
    $TenSP = $_POST['TenSP'];
    $GiaSP = $_POST['GiaSP'];
    $sql = "insert into sanpham (IdNhomSP, TenSP, GiaSP) value ('$IdNhomSp', '$TenSP', '$GiaSP')";
    $result = mysqli_query($connect,$sql);
    if($result)
    {
        echo "<script language='javascript'>alert('Them thanh cong');";
        echo "location.href='index.php';</script>";
    }
?>