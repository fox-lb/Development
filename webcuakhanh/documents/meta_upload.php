<?php
    session_start();

    include "../admincp/config.php";
    if(isset($_POST['upload'])){
        if(isset($_FILES['document'])){
            $document = $_FILES["document"]["name"];
            $document_tmp = $_FILES['document']['tmp_name'];
            $upload_directory = "../documents/images/";
            echo $document;
            //luu anh tai len
            move_uploaded_file($document_tmp, $upload_directory.$document);
            //doc du lieu exif
            $exif_data = exif_read_data($upload_directory.$document);
            foreach ($exif_data as $key => $value) {
                // Kiểm tra nếu $value là một mảng
                if (is_array($value)) {
                    // Nếu là mảng, chuyển đổi thành chuỗi bằng cách sử dụng hàm print_r() hoặc var_export()
                    $valueString = print_r($value, true); // hoặc var_export($value, true);
                    echo "$key: $valueString<br>";
                } else {
                    // Nếu không phải mảng, hiển thị giá trị như bình thường
                    echo "$key: $value<br>";
                }
            }
            $author = isset($exif_data['COMMENT'][0])?$exif_data['COMMENT'][0]:'No';
            echo $author;

            $query = "INSERT INTO documents VALUES ('$author','$document')";
            mysqli_query($mysqli, $query);
            header('location:meta_document.php');
        }
    }
?>