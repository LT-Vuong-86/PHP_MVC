<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
<body>
    <?php if ($user[0]['lv']==1) { ?>
    <section id="tav" >
        <h3>bạn có chắc muốn xóa!</h3>
<form action="" method="POST">
        <input type="submit" name='ok'  value='ok'>
        <input type="submit" name='huy' value='hủy'>
        </form>
       
    </section>
 <?php }
else{
    echo "<section id='tav' >
    <h3>Bạn ko có quyền!</h3>

    <a href='?controller=trangchu'><input type='submit'   value='ok'> </a>

</section>";
} 
 ?>
</body>
</html>