<?php
    session_start();

    include "../admincp/config.php";
    if(isset($_POST['upload'])){
        if(isset($_FILES['document'])){
            $document = $_FILES["document"]["name"];
            $document_tmp = $_FILES['document']['tmp_name'];
            $upload_directory = "../documents/images/";
            move_uploaded_file($document_tmp, $upload_directory.$document);
            header('location:document.php');
            $path = "".$document;
            $_SESSION['path'] = $path;
        }
    }
?>
