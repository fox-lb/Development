<?php
include('../../config.php');
    $mahd = $_GET['mahd'];
    $query_xoa = "DELETE from hoa_don WHERE MaHD = '$mahd'";
    $lietke_result = mysqli_query($mysqli, $query_xoa);
    header('location: ../../index.php?action=thongke');
?>