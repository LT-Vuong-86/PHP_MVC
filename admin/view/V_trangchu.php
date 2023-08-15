<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Y_item_css/grid.css">
        <link rel="stylesheet" href="Y_item_css/Admin.css">
    </head>
    <body>
       <section class="backgound">
        <div class="grid header">
          <h1>xin chào : <?php echo $_SESSION['ss_admin1']; ?></h1>
          <img src="1.jpg" alt="">
          
        </div>
        <div class="grid  body">
            <div class="grid c-2 menu">
                <h2>MENU</h2>
                <li class="tablinks" id="defaultOpen"  onclick="openCity(event,'trangchu')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                  </svg>
                  Trang Chủ 
                </li>
                <li class="tablinks" onclick="openCity(event,'product')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window" viewBox="0 0 16 16">
                        <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                        <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z"/>
                      </svg>
                    Sản Phẩm
                </li>
                <li class="tablinks" onclick="openCity(event,'oder_detail')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    Đơn Hàng
                </li>
                <li class="tablinks"  onclick="openCity(event,'person')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                      </svg>
                    Khách Hàng
                </li>
                <a href="?controller=out"><li class="logout">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                      </svg>
                    Đăng Xuất 
                </li></a>
            </div>
            <div class="importation c-10" id="trangchu">
              <h2>Trang Chủ</h2>
            </div>
            <div class="importation c-10" id="product">
              <table>
                <tr>
                    <th class="small">catalog_id</th>
                    <th class="small">ảnh</th>
                    <th>tên</th>
                    <th >giá</th>
                    <th class="small">số lượng</th>
                    <th>content</th>
                    <th class="small">start</th>
                </tr>
              <?php foreach ($data_product as $key => $value) { ?>
                <tr>
                  <td><?php echo $value['catalog_id'] ?></td>
                  <td class="img_link"><img  src="<?php echo $value['img_link'] ?>" alt=""></td>
                  <td><?php echo $value['name'] ?></td>
                  <td><?php echo $value['price'] ?></td>
                  <td><?php echo $value['amount'] ?></td>
                  <td><?php echo $value['content'] ?></td>
                  <td>
                    <a href="?controller=edit_sp&id=<?php echo $value['id'] ?>"><button>sửa</button></a>
                    <a href="?controller=delete_sp&id=<?php echo $value['id'] ?>"><button>xóa</button></a>
                  </td>
                </tr>              
              <?php } ?>
              </table>
              <div class="search_user">
                <select  >
                  <option value="volvo">tìm theo tên</option>
                  <option value="saab">tìm theo giá</option>
                  <option value="opel">tìm theo id</option>
                </select>
                <input type="text" class="search1" placeholder="tìm kiếm ...">
                <a href="?controller=add_sp"><input type="submit" class="search1" value="+ thêm sản phẩm"></a>
              </div>
            </div>
            <div class="importation c-10" id="oder_detail">
              <table>
                <tr>
                    <th class="small">stt</th>
                    <th>mã đơn</th>
                    <th>phone</th>
                    <th >sản phẩm</th>
                    <th class="small">tổng tiền</th>
                    <th>ngày giờ</th>
                    <th>trạng thái</th>
                    <th class="small">start</th>
                </tr>
                <?php 
                $stt=1;
                foreach ($data_order as $key => $value) { ?>
                <tr>
                  <td><?php echo $stt ?></td>
                  <td><?php echo $value['full_name'] ?></td>
                  <td><?php echo $value['phone'] ?></td>
                  <td><?php echo $value['address'] ?></td>
                  <td><?php echo $value['amount'] ?></td>
                  <td><?php echo $value['Date_oder']; ?></td>
                  <td><a href="?controller=chitiet_oder&&id=<?php echo $value['id']?>"> chitiet</a></td>
                  
                  <td>
                  <a class="status" href="?controller=xuli_oder&method=<?php echo $value['status']?>&id=<?php echo $value['id']?>">
                  <?php if($value['status']==1){
                      echo 'enable';
                      }else {
                        echo 'disable';
                      }
                      ?></a>
                  </td>
                  <td>
                    <a href="?controller=xuli_oder&method=sua&id=<?php echo $value['id']?>"><button>sửa</button></a>
                    <a href="?controller=xuli_oder&method=xoa&id=<?php echo $value['id']?> " onclick='return xoa_order()'><button>xóa</button></a>
                  </td>
                </tr>
                <?php $stt++; }
                 ?>
               
              </table>
              <div class="search_product">
               <span> từ ngày:<input type="date" ></span>
               <span> đến ngày: <input type="date"></span>
                <span><input type="submit" value="tìm"></span>
                <select  >
                  <option value="volvo">tìm theo mã đơn</option>
                  <option value="saab">tìm theo giá</option>
                  <option value="opel">tìm theo id</option>
                </select>
                <input type="text" class="search1"  placeholder="tìm kiếm ...">
                
              </div>
            </div>
            <div class="importation c-10"  id="person">
                <table>
                    <tr>
                        <th class="small">id</th>
                        <th>username</th>
                        <th >password</th>
                        <th >full_name</th>
                        <th class="small">lever</th>
                        <th class="small">start</th>
                    </tr>
                  <?php foreach ($data_nhanvien as $key => $value) {?>
                    <tr>
                      <td><?php echo $value['id'] ?></td>
                      <td><?php echo $value['username'] ?></td>
                      <td><?php echo md5($value['password'] )?></td>
                      <td><?php echo $value['full_name'] ?></td>
                      <td><?php echo $value['lv'] ?></td>
                      <td>
                        <a href="?controller=edit&id=<?php echo $value['id']; ?>"><button>sửa</button></a>
                        <a href="?controller=delete&id=<?php echo $value['id']; ?>"><button>xóa</button></a>
                      </td>
                    </tr>
                  <?php } ?> 
                  </table>
                  <div class="search_user">
                    <select  >
                      <option value="volvo">tìm theo họ</option>
                      <option value="saab">tìm theo email</option>
                      <option value="opel">tìm theo sdt</option>
                    </select>
                    <input type="text" class="search1"  placeholder="tìm kiếm ...">
                    <a href="?controller=add_nv"><input type="submit" class="search1" value="+ thêm người dùng"></a>
                  </div>
            </div>
        </div>
       </section>
       
        <script src="public/fronend/js/admin.js" async defer></script>
    </body>
</html>
