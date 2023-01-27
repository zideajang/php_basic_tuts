<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <div class="section">
            <form class="file" action="upload.php" method="POST" enctype="multipart/form-data">
              <label class="file-label">
                <input class="file-input" type="file" name="file">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">
                    选择文件
                  </span>
                </span>
              </label>
                
              <button class="button is-primary" type="submit" name="submit">上传</button>
            </form>
        </div>
    </div>
</body>
</html>