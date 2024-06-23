<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>UPLOAD DOCUMENT.</h4>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <p>Browse to your document :</p>
        <input type="file" name="document"><br><br>
        <input type="submit" name="upload" value="Upload">
        <?php 
            include 'upload.php';
            $path = isset($_SESSION['path']) ? $_SESSION['path'] : '';
            if(strcmp($path,'')){
        ?>
        <p>Your document is saved in : /documents/images/<?php echo $path;$_SESSION['path']=NULL;}?></p>
    </form>
</body>
</html>