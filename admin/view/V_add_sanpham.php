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
  </head>
  <style>
    body{
      background-color: rgb(150, 179, 169);
    }
    #form{
      margin-left: 35%;
      margin-top: 10%;
      width: 400px;
      height: 500px;
    }
    th, td{
      border: 2px solid rgb(0, 0, 0);
      background-color: rgb(185, 163, 163);
    }
    input,textarea{
      width: 98%;
    }
    .add input{
      text-align: center;
      width: 100%;
    }
    
  </style>
  <body>
    <form id="form" action="#" method='post' enctype="multipart/form-data" >
      <table>
      <tr>
        <th colspan="2">thêm sản phẩm</th><br>
      </tr>
      <tr>
        <td>catalog_id:</td>
        <td><input type="text" name="catalog_id" placeholder="nhập catalog"></td>
      </tr>
      <tr>
        <td>tên sản phẩm:</td>
        <td><input type="text" name="name" placeholder="nhập tên"></td>
      </tr>
      <tr>
        <td>ảnh:</td>
        <td><input multiple type="file" name="img_link[]" ></td>
      </tr>
      <tr>
        <td>giá:</td>
        <td><input type="text" name="price" placeholder="giá sp"></td>
      </tr>
      <tr>
        <td>số lượng:</td>
        <td><input type="text" name="amount" placeholder="số lượng"></td>
      </tr>
      <tr>
        <td>content:</td>
        <td><textarea name="content" id="" cols="" rows=""></textarea></td>
      </tr>
      <tr>
      <?php if (isset($loi['trong'])) {?>
      <td colspan='2'  style="color:red; text-align:center; "> <?php echo $loi['trong']; ?> </td>
     <?php }
      ?>
      </tr>
      <tr>
        <td colspan="2" class="add"><input type="submit" name="btn_add"  value="thêm"></td>
      </tr>      
    </table>
    </form>
    
    <script src="" async defer></script>
  </body>
</html>