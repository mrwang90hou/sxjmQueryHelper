<!DOCTYPE HTML>
<?php



require('config.php');

$mysqli = new mysqli($db_host, $db_user, $db_pwd, $db_name);
if (mysqli_connect_error())
    echo mysqli_connect_error();
$mysqli->set_charset("utf8");




  //$con =mysql_connect("localhost","root","123456")or die ("mysql链接失败");
  $con = mysql_connect ( "localhost","root","123456");//连接数据库
  if(!$con){
    echo("服务器连接失败！请检查后重试！");
  }
  mysql_select_db("GUET_MathematicalModeling_Helper", $con);
  mysql_query("SET NAMES UTF8");
  $q = $_GET["name"];
  $grade = $_GET["grade"];
  $sql = mysql_query("SELECT * FROM $grade WHERE 'years'='$q' or teamMember1='$q' or teamMember2='$q'
   or teamMember3='$q' or teacher='$q' or campus='$q' or awardLevel='$q'or groups='$q' or nationPrize='$q'",$con);//数据查询
//  if(!mysql_num_rows($sql)){
//    mysql_query("INSERT INTO records(LoginName) VALUES ('$q')",$con);
//  };
	mysql_close($con);//关闭数据库连接
	if($row = mysql_fetch_array($sql)){
		echo "<p>查询到相关信息</p>";
	}
    if(!mysql_num_rows($sql)){
        echo "<p>"."无信息！！！"."<p/>";
    };
?>