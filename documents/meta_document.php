<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h4>UPLOAD DOCUMENT.</h4>
    <form action="meta_upload.php" method="POST" enctype="multipart/form-data">
        <p>Browse to your document :</p>
        <input type="file" name="document"><br><br>
        <input type="submit" name="upload" value="Upload">
    </form>
    <h3>Document list</h3>
    <?php
        include "../admincp/config.php";
        $query = "SELECT * FROM documents";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_array($result)){
    ?>
    <ul class="doc">
        <li>
            <img src="images/<?php echo $row['image'];?>" alt="" height=150px width=200px>
            <p>
                <?php 
                    if ($row['author']==''){
                        $author = "Unidentify";
                    }else{
                        $author = $row['author'];
                    }
                    echo "Name: ".$row['image']."<br>";
                    echo "Author: ".$author;
                ?>
            </p>
        </li>
    </ul>
    <?php }?>
</body>
</html>