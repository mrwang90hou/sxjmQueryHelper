<?php
$con = mysql_connect ( "localhost","root","123456");//连接数据库
if(!$con){
  die("服务器连接失败！请检查后重试！");
  }
mysql_query("SET NAMES UTF8");
$select = mysql_select_db(GUET_MathematicalModeling_Helper,$con);//选择数据库
/*if(!$select){
  if(mysql_query("CREATE DATABASE contacts",$con)){
    echo "数据库创建成功！";
    }
  else{
    echo "创建数据库失败：".mysql_error();
    }
}*/
  $cre = "CREATE TABLE IF NOT EXISTS stuno2013
  (
  studentID int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(studentID),
  name varchar(15),
  class varchar(40),
  number text,
  time timestamp
  ) character set =utf8";
  if(mysql_query($cre,$con)){
    echo "表格创建成功";
    } //创建表格
else {
    echo "表格创建失败";
}
mysql_close($con);
?>


<?php
//config.php 数据库配置文件
/*
$db_host = '192.168.1.103';
$db_name = 'test';
$db_user = 'root';
$db_pwd = 'a123456';
*/
$db_host = '127.0.0.1';
$db_name = 'qrCode_test';
$db_user = 'root';
$db_pwd = '123456';
