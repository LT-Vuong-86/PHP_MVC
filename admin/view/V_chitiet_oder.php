
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
img{
  width: 150px;
}
.importation table{
    border: 2px solid wheat;
    border-collapse: collapse;
    width:100%
}
td, th {
    text-align: center;
    border: 2px solid #dddddd;
}
.img_link{
  width: 100px;
}
.img_link img{
    width: 100px;
    height: 80px;
    transition-duration: 1s;
    transition-delay: 0s;
}
.img_link img:hover{
    width: 250px;
    height: 150px;

}
    </style>
  </head>
  <body>
  <?php if ($user[0]['lv']==1) { ?> 
              <form action="" method="post" id="form" enctype="multipart/form-data" class='importation'>
                <h2> thông tin của đơn hàng</h2>
               
                <table >
                    <thead>
                       

                        <tr>
                        <th>catalog_id</th>
                        <th>ảnh</th>
                        <th>name</th>
                        <th>price</th>
                        <th>qty</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data_oder_detail as $key => $value) { 
                      $data_product= $db->get('product', array('id'=>$value['product_id'])) ?>
                    
                        <td><?php echo $value['id'] ?></td>
                        <td class="img_link"><img  src="<?php echo $data_product[0]['img_link'] ?>" alt=""></td>
                        <td> <?php echo $data_product[0]['name'] ?></td>
                        <td><?php echo $value['price'] ?></td>
                        <td><?php echo $value['qty'] ?></td>
                       
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