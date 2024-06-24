<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/footer.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/reponsive.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/header.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/home.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/product.css">
    <title>Documents</title>
</head>
<body>
    <?php 
        $this->view("layouts/header");
        $this->view($data["content"],$data);
        $this->view("layouts/footer"); 
    ?>
    <script src="https://kit.fontawesome.com/453b49545e.js" crossorigin="anonymous"></script>
</body>
</html>