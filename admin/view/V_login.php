<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="public/fronend/css/V_login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Form login unitop.vn</title>
</head>
<body>
    <div id="wrapper">
        <form action="?controller=login" method="POST" id="form-login">
            <h1 class="form-heading">Form đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name='username' placeholder="Tên đăng nhập"
                
                >
                <?php if (isset($loi['username'])) {?>
                    <span ><?php echo $loi['username']; 
                    ?> </span>
               <?php } ?>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name='password' class="form-input" placeholder="Mật khẩu"
                value="<?php echo (isset($password))?$password:'' ?>"
                >
                <?php if (isset($loi['password'])) {?>
                    <span ><?php echo $loi['password']; 
                    ?> </span>
               <?php } ?>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" name='btn_login' value="Đăng nhập" class="form-submit">
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="public/fronend/js/V_login.js"></script>
</html>