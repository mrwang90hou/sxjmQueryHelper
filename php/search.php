<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>查询结果</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
</head>
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
    echo '传递参数为：'.$value.'<br>';
    $mysqli = new mysqli($db_host, $db_user, $db_pwd, $db_name);
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
    }else{
        echo "连接MySQL成功！！！</br>";
        echo "传参为：".$value;
    }
    $mysqli->set_charset("utf8");
    $sql = "SELECT * FROM NationalCompetitionGrade where years like '%{$value}%' or teamMember1 like '%{$value}%' or teamMember2 = '{$value}' or teamMember3 like '%{$value}%' or teacher like '%{$value}%' or campus like '%{$value}%' order by serialNumber";
    echo "</br>SQL语句为：".$sql;
    $result = $mysqli->query($sql);
    echo "<br>条数:".mysqli_num_rows( $result ); //条数
    echo "<br>";
    //mysqli_query($con,"SELECT * FROM websites");
    echo "受影响的行数: " . mysqli_affected_rows($mysqli);

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

<h2>Delete users</h2>

<?php //if ($success) echo $success;

echo '<table width="100%" border="1px" cellspacing="0" bordercolor="#CCCCCC" style="font-size:15px;color:#666666;text-align:center;">
	 <tr>
         
        <th>序号</th>
        <th>年份</th>
        <th>队长</th>
        <th>队员2</th>
        <th>队员3</th>
        <th>指导老师</th>
        <th>校区</th>
        <th>区级奖项</th>
        <th>参赛组别</th>
        <th>国家级奖项</th>
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
<!--        <td width="15%">--><?php //echo $row['DetailTypeNumber'];$_SESSION["p"]=$row['DetailTypeNumber'];  ?><!--</td>-->
<!--        <td width="40%" style="color:#0033FF"><a href="detail.php?$id=--><?php //echo $row['id']; ?><!--" target="_blank">--><?php //echo $row['DetailName'];?><!--</a></td>-->
<!--        <td width="40%">--><?php //echo $row['DetailName_EN']; ?><!--</td>-->
<!--        -->
        <td><?php echo ($row["serialNumber"]); ?></td>
        <td><?php echo ($row["years"]); ?></td>
        <td><?php echo ($row["teamMember1"]); ?></td>
        <td><?php echo ($row["teamMember2"]); ?></td>
        <td><?php echo ($row["teamMember3"]); ?></td>
        <td>
            <a href="teacher.php?$id=<?php echo $row["serialNumber"]; ?>">
                <?php echo $row['teacher'];?></a>
        </td>
        <td><?php echo ($row["campus"]); ?> </td>
        <td><?php echo ($row["awardLevel"]); ?> </td>
        <td><?php echo ($row["groups"]); ?> </td>
        <td><?php echo ($row["nationPrize"]);?></td>


    </tr>
    <?php
    $i++;
}
// 释放结果集
mysqli_free_result($result);

?>

<a href="../index.html">🔙返回</a>

<?php //require "templates/footer.php"; ?>

</html>