
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
  margin-left: 10px;
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
.files{
    width: 150px;
}

    </style>
  </head>
  <body>
  <?php if ($user[0]['lv']==1) { ?> 
              <form action="" method="post" id="form" enctype="multipart/form-data">
                <h2>Sửa thông tin của sản phẩm</h2>
               
                <table >
                    <thead>
                       

                        <tr>
                        <th>catalog_id</th>
                        <th>ảnh</th>
                        <th>name</th>
                        <th>price</th>
                        <th>amount</th>
                        <th>content</th>
                        <th colspan="3">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($user1 as $key => $value) {  ?>
                    
                        <tr style="text-align:center">
                        <td><input type="text" name='catalog_id' value="<?php echo $value['catalog_id'] ?>"></td>
                        <td><input class='files' type="file" multiple name='img_link[]'></td>
                        <td><input type="text" name='name' value="<?php echo $value['name'] ?>"></td>
                        <td><input type="text" name='price' value="<?php echo $value['price'] ?>"></td>
                        <td><input type="text" name='amount' value="<?php echo $value['amount'] ?>"></td>
                        <td><input type="text" name='content' value="<?php echo $value['content'] ?>"></td>
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