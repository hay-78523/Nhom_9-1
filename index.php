<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA_TTCN_WEBSITE_BANGIAY</title>
</head>
<body>
    <?php
        if (!isset($_SESSION)) session_start();
         if (!isset($_SESSION['admin'])){
            header('location:/public/frontend/auth/login.html');
            exit;
         }
    ?>
    <?php include_once 'public/frontend/header/header.php'; ?>
    <?php include_once 'public/frontend/cartegory/cartegory.php'; ?>
    <?php include_once 'public/frontend/footer/footer.php'; ?>
    
</body>
</html>
