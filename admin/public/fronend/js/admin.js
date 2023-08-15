function openCity(evt, tab) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("importation");
    //lấy các class (hiển thị) theo thứ tự key   
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      //class key có vị trí i thuộc tính css=none
    }

    tablinks = document.getElementsByClassName("tablinks");
    //lấy các class (bấm) theo thứ tự key
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
      //nó rả về cái này 
//0:li.tablinks
//1:li.tablinks
//2:li.tablinks 
//3:li.tablinks.active 
      //lên là phải xóa active bằng relace
    }
    document.getElementById(tab).style.display = "block";
    //hiện cái tab mà id chuyển ở hàm vào
    evt.currentTarget.className += ".active";
   //lấy tên phần tử bấm vào nối thêm đuôi active
  }
   document.getElementById("defaultOpen").click();

function xoa_order() {
  return confirm('ban co chac muon xoa');
}