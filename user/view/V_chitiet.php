
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<style>
    body {  
font-family:Arial, Helvetica, sans-serif;   
overflow-x: hidden;
}
 
img {   
max-width: 100%;
}
 
.preview {  
display: -webkit-box;   
display: -webkit-flex;  
display: -ms-flexbox;   
display: flex;  
-webkit-box-orient: vertical;   
-webkit-box-direction: normal;  
-webkit-flex-direction: column; 
-ms-flex-direction: column; 
flex-direction: column;
} 
 
@media screen and (max-width: 996px) { 
.preview { 
margin-bottom: 20px;
}
}
 
.preview-pic {  
-webkit-box-flex: 1;    
-webkit-flex-grow: 1;   
-ms-flex-positive: 1;   
flex-grow: 1;
}
 
.preview-thumbnail.nav-tabs {   
border: none;   
margin-top: 15px;
}
 
.preview-thumbnail.nav-tabs li {    
width: 18%; 
margin-right: 2.5%;
}
 
.preview-thumbnail.nav-tabs li img {    
max-width: 100%;    
display: block;
}
 
.preview-thumbnail.nav-tabs li a {  
padding: 0; 
margin: 0;  
cursor:pointer;
}
 
.preview-thumbnail.nav-tabs li:last-of-type {   
margin-right: 0;
}
 
.tab-content {  
overflow: hidden;
}
 
.tab-content img {  
width: 100%;    
-webkit-animation-name: opacity;    
animation-name: opacity; 
-webkit-animation-duration: .3s; 
animation-duration: .3s;
}
 
.card { 
margin-top: 0px;    
background: #eee;   
padding: 3em;   
line-height: 1.5em;
} 
 
@media screen and (min-width: 997px) { 
.wrapper { 
display: -webkit-box; 
display: -webkit-flex; 
display: -ms-flexbox; 
display: flex;
}
}
 
.details {  
display: -webkit-box;
    display: -webkit-flex;  
display: -ms-flexbox;   
display: flex;  
-webkit-box-orient: vertical;   
-webkit-box-direction: normal;  
-webkit-flex-direction: column; 
-ms-flex-direction: column; 
flex-direction: column;
}
 
.colors {   
-webkit-box-flex: 1;    
-webkit-flex-grow: 1;   
-ms-flex-positive: 1;   
flex-grow: 1;
}
 
.product-title, .price, .sizes, .colors {   
text-transform: UPPERCASE;  
font-weight: bold;
}
 
.checked, .price span { 
color: #ff9f1a;
}
 
.product-title, .rating, .product-description, .price, .vote, .sizes {  
margin-bottom: 15px;
}
 
.product-title {    
margin-top: 0;
}
 
.size {
    margin-right: 10px;
}
 
.size:first-of-type {   
margin-left: 40px;
}
 
.color {    
display: inline-block;  
vertical-align: middle; 
margin-right: 10px; 
height: 2em;    
width: 2em; 
border-radius: 2px;
}
 
.color:first-of-type {  
margin-left: 20px;
}
 
.add-to-cart, .like {   
background: #ff9f1a;    
padding: 1.2em 1.5em;   
border: none;   
text-transform: UPPERCASE;  
font-weight: bold;  
color: #fff;    
text-decoration:none; 
-webkit-transition: background .3s ease; 
transition: background .3s ease;
}
 
.add-to-cart:hover, .like:hover {   
background: #b36800;    
color: #fff;    
text-decoration:none;
}
 
.not-available {    
text-align: center; 
line-height: 2em;
}
 
.not-available:before { 
font-family: fontawesome;   
content: "\f00d";   
color: #fff;
}
 
.orange {   
background: #ff9f1a;
}
 
.green {    
background: #85ad00;
}
 
.blue { 
background: #0076ad;
}
 
.tooltip-inner {    
padding: 1.3em;
} 
 
@-webkit-keyframes opacity { 
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);} 
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
} 
 
@keyframes opacity { 
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);} 
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
}
</style>
<body>


    <div class="container"> 
        <div class="card"> 
          
            <a href="?controller=trangchu"><h3>HOME</h3></a>
            
         <div class="container-fliud"> 
          <div class="wrapper row"> 
           <div class="preview col-md-6"> 
            <div class="preview-pic tab-content"> 
             <div class="tab-pane active" id="pic-1"><img src="<?php echo $product_2[0]['img_link'] ?>" alt="">
             </div> 
             <div class="tab-pane" id="pic-2"><img src="<?php echo $product_2[0]['img_link'] ?>">
             </div> 
             <div class="tab-pane" id="pic-3"><img src="<?php echo $product_2[0]['img_link'] ?>">
             </div> 
             <div class="tab-pane" id="pic-4"><img src="<?php echo $product_2[0]['img_link'] ?>">
             </div> 
             <div class="tab-pane" id="pic-5"><img src="<?php echo $product_2[0]['img_link'] ?>">
             </div> 
            </div> 
            <ul class="preview-thumbnail nav nav-tabs"><div class="logo_menuchinh" style="float:left; padding-top:5px; padding-left:10px; color:#fff; margin-left:auto; margin-right:auto; text-align=center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial"></div>
            <div class="menu-icon"><span></span></div> 
             <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?php echo $product_2[0]['img_link'] ?>"></a>
             </li> 
           
            </ul> 
           </div> 
           <div class="details col-md-6"> 
            <h3 class="product-title"><?php echo $product_2[0]['name'] ?></h3> 
            <div class="rating"> 
             <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
             </div> <span class="review-no">123 đánh giá</span> 
            </div> 
            <p class="product-description">Với trang phục này mẹ có thể cùng bé diện đi chơi, đi học đều rất phù hợp. Khi bé mặc vào, chắc chắn mẹ sẽ có cảm nhận hoàn toàn khác biệt vì màu sắc phong phú không chỉ khiến bộ trang phục trở nên bắt mắt mà còn tôn thêm vẻ nhí nhảnh, nghịch ngợm và năng động của các bé trai.            Khi diện những bộ thời trang cho bé trai ngộ nghĩnh này, mẹ đừng quên kèm theo cho bé một số phụ kiện phù hợp như mũ lưỡi trai cá tính, nón kết sành điệu, kính mát “cực ngầu” hay giày bata năng động nhé!            Chúc con yêu của bạn có thêm những bộ đồ thời trang cho bé trai theo phong cách đa màu sắc cực xinh xắn và đáng yêu!</p> 
            <h4 class="price">Giá bán:"<?php echo $product_2[0]['price'] ?>"</h4> 
            <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
            </p> 
            <h5 class="sizes">Kích cỡ: <span class="size" data-toggle="tooltip" title="small">s</span> <span class="size" data-toggle="tooltip" title="medium">m</span> <span class="size" data-toggle="tooltip" title="large">l</span> <span class="size" data-toggle="tooltip" title="xtra large">xl</span> 
            </h5> 
            <h5 class="colors">Màu: <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span> <span class="color green"></span> <span class="color blue"></span> 
            </h5> 
            <div class="action"> <a href="" target="_blank">  <button class="add-to-cart btn btn-default" type="button">MUA NGAY</button>  </a> <a href="addtocard.php?id=<?php echo $value['id']?>" target="_blank">            <button class="like btn btn-default" type="button"><span class="fa fa-heart">thêm giỏ hàng</span></button>            </a> 
            </div> 
           </div> 
          </div> 
         </div> 
        </div>
       </div> 
 
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>