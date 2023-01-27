<?php
// 判断 POST 是否有提交
if(isset($_POST['submit'])){
    // 上传文件，首先查看
    $file = $_FILES['file'];
    print_r($file);
    // 获取文件文件名称
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // 获取文件扩展名
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','png','jpeg');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize < 50000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);

                header("Location: index.php?uploadsuccess");
            }else{
                echo "上传文件大小过大";
            }
        }else{
            echo "这里有关上传的错误";
        }
    }else{
        echo "并不允许上传此类型文件";
    }

}