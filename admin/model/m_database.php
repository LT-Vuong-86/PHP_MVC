<?php
class database{
protected $conn =null;
protected $host ='localhost';
protected $user ='root';
protected $pass = '';
protected $dbname ='d0204';
public function __construct()
{
    $this->conn=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
    if (!$this->conn) {
        echo "kết nối thất bại";
        exit();
    }
}
public function get($table, $condition=array())
{
    $sql= "SELECT * FROM $table";
    if (!empty($condition)){
       $sql.=" WHERE";
       foreach ($condition as $key => $value) {
        $sql.=" $key ='$value'AND";
       }
       $sql=trim($sql, "AND");
    };
    $query= mysqli_query($this->conn, $sql);
    $ketqua= array();
    if ($query) {
        while($row=mysqli_fetch_assoc($query) ){
            $ketqua[]=$row;
        }
    }
    return $ketqua;
}
public function get_like($table, $column, $value){
    $sql = "SELECT * FROM $table WHERE $column LIKE '%$value%'"; 
    $query= mysqli_query($this->conn, $sql);
    $ketqua = array();
  if ($query) {
      while($row=mysqli_fetch_assoc($query)){
          $ketqua[]=$row;
      }
  }
  return $ketqua;
}

public function insert($table, $data=array())
{
    $keys = array_keys($data);
    $column = implode(",", $keys);
    $value_str ='';
    foreach ($data as $key => $value) {
       $value_str .= "'$value',";
    }
    $value_str = trim($value_str, ",");
    $sql = "INSERT INTO $table ($column) VALUES ($value_str)";
    $query = mysqli_query($this->conn, $sql);
    return $query;
}

public function delete($table, $condition=array()) {
    // $column1 = implode(";", $where);
    $sql = " DELETE FROM $table"; 
    if (!empty($condition)){
        $sql.=" WHERE";
        foreach ($condition as $key => $value) {
         $sql.=" $key ='$value'AND";
        }
        $sql=trim($sql, "AND");
     };
    $query = mysqli_query($this->conn, $sql);
    return $query;
}
public function update($table,$data=array(),$condition=array()) {
    $value_str ='';
    foreach ($data as $key => $value) {
       $value_str .= "$key='$value',";
    }
    $value_str = trim($value_str, ",");
    $sql="UPDATE $table SET $value_str";
    if (!empty($condition)){
        $sql.=" WHERE";
        foreach ($condition as $key => $value) {
         $sql.=" $key ='$value'AND";
        }
        $sql=trim($sql, "AND");
     };
     $query = mysqli_query($this->conn, $sql);
    return $query;
}
public function uploadfile($uploadedFile)  {   
    $files = array();   
    $errors = array();    
    foreach ($uploadedFile as $key => $values) { 
        foreach ($values as $index => $value) {
             $files[$index][$key] = $value;
        }
    }
    
    $uploadPath = "./image";
    // if (!is_dir($uploadPath)) {
    //  mkdir($uploadPath);
    // }
    
    foreach ($files as $file) {
     $file = self::validateUploadFile($file, $uploadPath);
    if ($files != false) {
         move_uploaded_file($file["tmp_name"], $uploadPath .'/'.$file["name"]);
    }else {
        $errors[]="the file".basename($file["name"]). "isn't valid";
    }
    }
    return $errors=($uploadPath .'/'.$file["name"]);
}


public function validateUploadFile($file, $uploadPath) {
     //Kiểm tra xem có vượt quá dung lượng cho phép không?

        if ($file['size'] > 20*1024*1024) {
    //max upload is 2 Mb = 2 *
            return false;
        }
$validTypes = array("jpg","jpeg","png","bmp","mp4");
$fileType = substr($file['name'], strrpos($file['name'], ".")+1);
        if (!in_array($fileType, $validTypes)) {
            return false;
        }
    $num=1;
    $filename= substr($file['name'],0,strrpos($file['name'], "."));
        while (file_exists($uploadPath . '/' .$filename . '.' . $fileType)) {
            $filename= $filename . "(" .$num .")";
            $num++;
        }
    $file['name']=$filename . '.' .$fileType;
    return $file;
}
}

?>