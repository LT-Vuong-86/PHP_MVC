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

}

?>