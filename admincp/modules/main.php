<div class="clear"></div>
<div class="main">
                <?php
                    if(isset($_GET['action'])){
                        $tam = $_GET['action'];
                    }else{
                        $tam="";
                    }

                    if($tam=="qldanhmucsp"){
                        include('modules/quanlidanhmucsp/themsp.php');
                        include('modules/quanlidanhmucsp/lietkesp.php');
                    }elseif ($tam=="suadanhmuc") {
                        // include('modules/quanlidanhmucsp/themsp.php');
                        // include('modules/quanlidanhmucsp/lietkesp.php');
                        include('modules/quanlidanhmucsp/suasp.php');
                    }elseif ($tam=="qlsp") {
                        include('modules/quanlisp/themsp.php');
                        include('modules/quanlisp/lietkesp.php');
                    }elseif($tam=="suasanpham"){
                        include('modules/quanlisp/suasp1.php');
                    }elseif($tam=="qltaikhoan"){
                        include('modules/quanlitaikhoan/lietke.php');
                    }elseif($tam=="suataikhoan"){
                        include('modules/quanlitaikhoan/suataikhoan.php');
                    }elseif($tam=="thongke"){
                        include('modules/doanhthu/doanhthu.php');
                    }else{
                        include('modules/quanlidanhmucsp/themsp.php');
                        include('dashboard.php');
                    }
                ?>
</div>