<?php
/**
 * Created by PhpStorm.
 * User: wangning
 * Date: 2018/6/28
 * Time: 下午12:00
 */

?>
<!DOCTYPE html>
<html>
<?php

    session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>教师信息查询</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
</head>
<!--<script type="text/javascript">
    function test(){
        var parm1= document.getElementById("tx").innerHTML;
		   var myurl="select_index.html"+"?"+"parm1="+parm1;
           window.location.assign(myurl);
	}
</script>-->

<?php
/**
 * Created by PhpStorm.
 * User: wangning
 * Date: 2018/6/9
 * Time: 上午2:25
 */
    //require ('config.php');
    require '../config.php';
    //include 'config.php';
    $value=$_POST["content"];
    //echo '传递参数为：'.$value.'<br>';
    $mysqli = new mysqli($db_host, $db_user, $db_pwd, $db_name);
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
    }else{
        //echo "连接MySQL成功！！！</br>";
        //echo "传参为：".$value;
    }
    $mysqli->set_charset("utf8");
    $sql = "SELECT * FROM TeacherGroupNames";
    //echo "</br>SQL语句为：".$sql;
    $result = $mysqli->query($sql);
    //echo "<br>条数:".mysqli_num_rows( $result ); //条数
    //echo "<br>";
    //mysqli_query($con,"SELECT * FROM websites");
    //echo "受影响的行数: " . mysqli_affected_rows($mysqli);

    /*  PDO数据库连接
    //try {
    //    $connection = new PDO($dsn, $username, $password, $options);
    //    $connection -> query('set names utf8');
    //
    //    $sql = "SELECT * FROM NationalCompetitionGrade";
    //
    //    $statement = $connection->prepare($sql);
    //    $statement->execute();
    //    $result = $statement->fetchAll();
    //    //echo $result;
    //} catch(PDOException $error) {
    //    echo $sql . "<br>" . $error->getMessage();
    //}
        */
?>
<h2>数模组教师列表</h2>
<a href="search.php">🔙返回</a>
<?php //if ($success) echo $success;

echo '<table width="100%" border="1px" cellspacing="0" bordercolor="#CCCCCC" style="font-size:15px;color:#666666;text-align:center;">
	 <tr>
        <th>序号</th>
        <th>姓名</th>
         </tr>
         ';
    $i==1;
//      mysqli_fetch_array()     从结果集中取得一行作为数字数组或关联数组：       mysql_fetch_array()获得数据，并输出
// 关联数组
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    ?>
    <!--         奇偶行数背景色不同-->
    <tr style='background:<?php if($i%2){ echo "#FFFFFF"; }else{ echo "#E8E8E8"; } ?>'>
        <td><?php echo ($row["number"]); ?></td>
        <td><?php echo ($row["name"]); ?></td>
    </tr>
    <?php
    $i++;
}
//释放结果集
mysqli_free_result($result);
?>

</html>

