<?php
    include ('../../config.php');
    if(isset($_POST['sl']) && isset($_POST['makh']) && isset($_POST['masp']) && isset($_POST['gia'])){
        $sl = $_POST['sl'];
        $makh = $_POST['makh'];
        $masp = $_POST['masp'];
        $gia = $_POST['gia'];
        $message = $_POST['message'];
        $tong = $sl*$gia;

        $query_sp = "SELECT * from sanpham WHERE MaSP = '$masp' LIMIT 1";
        $result1 = mysqli_query($mysqli, $query_sp);
        $rowx= mysqli_fetch_array($result1);
        $tensp = $rowx['tensp'];

        $query_check_sl_sp = "SELECT soluong as soluongsp from sanpham WHERE MaSP = '$masp' LIMIT 1";
        $result1 = mysqli_query($mysqli, $query_check_sl_sp);
        $row1= mysqli_fetch_array($result1);
        $slconlai = $row1['soluongsp'] - $sl;
        if($slconlai>=0){
            $query_check = "SELECT count(*) as soluong from hoa_don ";
            $result = mysqli_query($mysqli, $query_check);
            $row = mysqli_fetch_array($result);
            $ma_tiep_theo = $row['soluong']+1;
            $maHD = "HD".$ma_tiep_theo;
            echo $maHD;

            //$query = "INSERT INTO hoa_don VALUES ('$maHD', '$masp', '$tensp', '$sl', '$gia', '$tong', 'aaa',(SELECT @@version))--, '$masp')";

            $query = "INSERT INTO hoa_don VALUES ('$maHD', '$tensp', '$sl', '$gia', '$tong', '$masp','$makh', '$message')";
            $result3 = mysqli_query($mysqli, $query);

            

            // $stmt = $mysqli->prepare("INSERT INTO hoa_don VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            // $stmt->bind_param("ssssiiis", $maHD, $makh, $masp, $tensp, $sl, $gia, $tong, $message);
            // $stmt->execute();
            
            $query_update_sp = "UPDATE sanpham SET SoLuong='$slconlai' WHERE MaSp = '$masp'";
            $result2 = mysqli_query($mysqli, $query_update_sp);
            // $query_delete_cart = "DELETE FROM gio_hang WHERE MaKH='$makh' and MaSP='$masp'";
            // $result3 = mysqli_query($mysqli, $query_delete_cart);
            header('location: /webcuakhanh/index.php?quanli=giohang&mua=success');
        }else{
            header('location: /webcuakhanh/index.php?quanli=muahang&masp='.$_POST['masp'].'&sl='.$_POST['sl'].'&mua=outofst');
        }
        
    }else{
        header('location: /webcuakhanh/index.php?quanli=muahang&masp='.$_POST['masp'].'&sl='.$_POST['sl'].'&mua=failed');
    }


?>