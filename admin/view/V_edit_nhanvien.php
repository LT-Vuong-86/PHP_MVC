
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
#form{
  background-color: rgb(113, 110, 110);
}
#form h2{
 text-align:center;
}
#form table{
  margin-left: 10%;
}
#tav{
    width: 300px;
    height: 100px;
    background-color:black;
    color: white;
margin: 20px 40% 40% 40%;
}
h3{
    padding-left: 20px;
    padding-top: 20px;
}
input{
margin-left: 40px;
}
    </style>
  </head>
  <body>
  <?php if ($user[0]['lv']==1) { ?> 
              <form action="" method="post" id="form">
                <h2>Sửa thông tin của nhân viên</h2>
               
                <table >
                    <thead>
                       

                        <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>password</th>
                        <th>Full_name</th>
                        <th>lever</th>
                        <th colspan="3">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($user1 as $key => $value) {  ?>
                    
                        <tr style="text-align:center">
                        <td><input type="text" name='id' value="<?php echo $value['id'] ?>"></td>
                        <td><input type="text" name='username' value="<?php echo $value['username'] ?>"></td>
                        <td><input type="text" name='password' value="<?php echo $value['password'] ?>"></td>
                        <td><input type="text" name='full_name' value="<?php echo $value['full_name'] ?>"></td>
                        <td><input type="text" name='lv' value="<?php echo $value['lv'] ?>"></td>
                        <td class="btn">
                            <input name='btn_sua' type="submit">
                        </td>
                        </tr>
                                                    
                        <?php } ?>
                    </tbody>
                        
                </table>
                
              </form>
              <?php  } 
         else{
            echo "<section id='tav' >
            <h3>Bạn ko có quyền!</h3>
        
            <a href='?controller=trangchu'><input type='submit'   value='ok'> </a>
        
        </section>";
          } ?>
              
</body>
</html>
</body>
</html>