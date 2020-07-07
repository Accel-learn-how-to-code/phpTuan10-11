<?php 
    include_once('connect.php');
    if(isset($_GET['id']))
        $id = $_GET['id'];
    $sql = "delete from sanpham where Id=".$id;
    $result = mysqli_query($connect, $sql);

    if($result){
        echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='index.php';</script>";
    }
?>