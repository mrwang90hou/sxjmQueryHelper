<?php
/**
 * Created by PhpStorm.
 * User: wangning
 * Date: 2018/5/22
 * Time: 上午1:29
 */
require('config.php');

$mysqli = new mysqli($db_host,$db_user,$db_pwd,$db_name,$db_port);
if ($mysqli_connect_error())
    echo $mysqli_connect_error();
$mysqli->set_charset("utf8");

$content = $_GET['content'];
$grade = $_GET["grade"];
//`years`, `teamMember1`, `teamMember2`, `teamMember3`, `teacher`, `campus`
$sql = "select * from NationalCompetitionGrade where 1 ";//years ='" . $content . "'
//$sql = "select * from $grade where years like '%$content%' or teamMember1 like '%$content%' or teamMember2
//like '%$content%' or teamMember3 like '%$content%' or teacher like '%$content%' or campus like '%$content%'";
$result = $mysqli->query($sql)->fetch_array();
if ($result === false) {
    echo $mysqli->error;
    echo $mysqli->errno;
}
//echo "the query return a result!". "<br/>";
$mysqli->close();

if (!is_null($result['serialNumber']))
    //$arr = ['code' => 1, 'msg' => '有结果！', 'result' => $result];
    echo "<p>"."查询到相关信息"."</p>";
else
    //$arr = ['code' => -1, 'msg' => '查询无果！','result'=>$result];
    echo "<p>"."无信息！！！"."<p/>";
//echo json_encode($arr);
exit();
?>