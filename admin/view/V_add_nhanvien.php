<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Shop Phone ĐìnhBa</title>
    <link rel="icon" href="img/logo/Logo-name.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link  rel="stylesheet" href="css/Tieude.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/left-content.css">
    <link rel="stylesheet" href="css/Sua.css">
</head>
<body>
    <div class="Sum">
        <!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="Trangchu.html" class="a-light logo-home">HOME</a></li>
				<li><a href="#">Giới thiệu</a></li>
				<li><a href="#">Liên hệ</a></li>
			</ul>
			<ul class="list-right">
				<li class="dang-ky"><a href="Dang_ky.html">Đăng ký</a></li>
                <span>|</span>
				<li><a href="#" class="left a-light">GIỎ HÀNG <span>0</span></a></li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->
		<div class="clearfix"></div>

        <!-- Phần header -->
		<div class="header">
			<a href="index.html"><img src="img/logo/Logo-name.jpg" alt="" width="120" height="90" class="logo" />
			</a>
			<span class="ten-cua-hang">ADMIN</span>
			<div class="search">
				<input type="search" class="search-box" placeholder="Bạn cần tìm gì ?">
				<a href="#" class="search-button">Search</a>
			</div>
		</div>
		<!-- end Phần header -->
        <div class="container">
            <!-- Banner-top -->
			<div class="banner">
        </div>
			<!-- end banner-top -->
            <!-- Thanh menu bên trái -->
			<div class="menu-ben-trai">
				<ul>
					<li class="title">Danh Mục Sản Phẩm</li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/logo-dt.jpg" width="40px" height="40px">Điện thoại</a></li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/Logo-mt.jfif" width="40px" height="40px">Máy tính bàn</a></li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/phu-kien.jpg" width="40px" height="40px">Phụ Kiện</a></li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/Lt.jfif" width="40px" height="40px">Laptop</a></li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/may-anh.jfif "width="40px" height="40px">Máy ảnh</a></li>
				</ul>
			</div>
			<!--End Thanh menu bên trái -->
        </div>
        <div class="khung-chua-san-pham">
            <div class="section">
              <!--Thanh tiêu đề-->
              <p class="section-head">Danh Sách Nhân Viên</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              
              <form action="" method="post">
                <p>thêm thông tin của nhân viên</p>
                <?php if ($user[0]['lv']==1) { ?> 
                <table >
                    <thead>
                        <tr>
                        <th>Username</th>
                        <th>password</th>
                        <th>Full_name</th>
                       
                        <th colspan="3">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><input type="text" name="username" placeholder="Username"></td>                      
                        <td><input type="password" name="password" placeholder="Password"></td>                   
                        <td><input type="text" name="full_name" placeholder="Full_name"></td> 
                        <td class="btn">
                            <a href=""><input type="submit" name="btn_add" value="lưu"></a>
                        </td>
                        </tr>
                     <tr> 
                     <?php if (isset($loi['username'])) {?>
                        <td><?php echo $loi['username']; ?> </td>
               <?php } ?>
                    <?php if (isset($loi['password'])) {?>
                        <td><?php echo $loi['password']; ?> </td>
               <?php } ?>
                    <?php if (isset($loi['full_name'])) {?>
                        <td><?php echo $loi['full_name']; ?> </td>
               <?php } ?>

                     </tr>   
                    </tbody>
                </table>
                <?php  } 
                    else {
                        echo " <h3> bạn ko có quyền</h3>";
                    } ?>
              </form>
              
                  <!--End Form-->
              <!--End liên hệ-->
              </div>
        </div>
          <!--end section 2-->
          </div>
      <!--end container-->
    </div>
    
</body>
</html>
</body>
</html>