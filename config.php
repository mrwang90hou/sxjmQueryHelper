<?php
/**
 * Created by PhpStorm.
 * User: wangning
 * Date: 2018/5/22
 * Time: 上午1:20
 */
/*
$con = mysql_connect ( "localhost","root","123456");//连接数据库
if(!$con){
  die("服务器连接失败！请检查后重试！");
  }
mysql_query("SET NAMES UTF8");
$select = mysql_select_db(GUET_MathematicalModeling_Helper,$con);//选择数据库
*/
/*if(!$select){
  if(mysql_query("CREATE DATABASE contacts",$con)){
    echo "数据库创建成功！";
    }
  else{
    echo "创建数据库失败：".mysql_error();
    }
}

//////////////////////////////
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
*/
//config.php 数据库配置文件
//（2）mysqli连接数据库方式
$db_host = '127.0.0.1';
$db_name = 'GUET_MathematicalModeling_Helper';
$db_user = 'root';
$db_pwd = 'wangning1995';



define("DB_HOST", '127.0.0.1');
define("DB_USER", 'root');
define('DB_PWD', 'wangning1995');
define('DB_NAME', 'GUET_MathematicalModeling_Helper');

define('DB_PORT', '3306');
define('DB_TYPE', 'mysql');
define('DB_CHARSET', 'utf8');



//$db_port = '80';

//
//$pdo = new PDO('mysql:host=localhost;dbname=database_name;port=3306','用户名','密码');
//$pdo->exec('set names utf8');
//
//$stmt = $pdo->prepare("select * from table where id =:id");
//$stmt->bindValue(':id',1,PDO::PARAM_INT);
//$stmt->execute();
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//$rows = $pdo->query("select * from table where id = 1")->fetchAll(PDO::FETCH_ASSOC);
?>
