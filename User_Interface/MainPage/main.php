<div id="main">
            <?php
                if(isset($_GET['quanli'])){
                    $tam = $_GET['quanli'];
                }else{
                    $tam="";
                }
                include('sidebar/sidebar.php');
            ?>
            <div class="main-content">
                <?php
                    if(isset($_GET['quanli'])){
                        $tam = $_GET['quanli'];
                    }else{
                        $tam="";
                    }if($tam=="danhmucsp"){
                        include('main/showdanhmuc.php');
                    }elseif($tam=="giohang"){
                        include('main/giohang.php');
                    }elseif($tam=="lienhe"){
                        include('main/lienhe.php');
                    }elseif($tam=="taikhoan"){
                        include('main/taikhoan.php');
                    }elseif($tam=="timkiem"){
                        include('main/timkiem.php');
                    }elseif($tam=="chitietsanpham"){
                        include('main/chitietsanpham.php');
                    }elseif($tam=="info"){
                        include('main/info.php');
                    }elseif($tam=="change_info"){
                        include('main/change_info.php');
                    }elseif($tam=="change_pass"){
                        include('main/change_pass.php');
                    }elseif($tam=="muahang"){
                        include('main/muahang.php');
                    }elseif($tam=="history"){
                        include('main/history.php');
                    }else{
                        include('main/index.php');
                    }
                ?>
            </div>
        </div>