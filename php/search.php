<?php
/**
 * Created by PhpStorm.
 * User: wangning
 * Date: 2018/6/9
 * Time: 上午2:25
 */

require 'config.php';
$value=$_POST["content"];
echo $value;
$mysqli = new mysqli($db_host, $db_user, $db_pwd, $db_name);
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
}else{
    echo "连接MySQL成功！！！</br>";
    echo "传参为：".$value;
}
$mysqli->set_charset("utf8");
$sql = "SELECT * FROM NationalCompetitionGrade where years like '%{$value}%' or teamMember1 like '%{$value}%' or teamMember2 = '{$value}' order by serialNumber";
echo "</br>SQL语句为：".$sql;
$result = $mysqli->query($sql);
echo "<br>条数:".mysqli_num_rows( $result ); //条数
echo "<br>";
//mysqli_query($con,"SELECT * FROM websites");
echo "受影响的行数: " . mysqli_affected_rows($mysqli);


try {
    $connection = new PDO($dsn, $username, $password, $options);
    $connection -> query('set names utf8');

    $sql = "SELECT * FROM NationalCompetitionGrade";

    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    //echo $result;
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "templates/header.php"; ?>

<h2>Delete users</h2>

<?php if ($success) echo $success; ?>

<table>
    <thead>
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
        <!--            <th>删除数据</th>-->
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo escape($row["serialNumber"]); ?></td>
            <td><?php echo escape($row["years"]); ?></td>
            <td><?php echo escape($row["teamMember1"]); ?></td>
            <td><?php echo escape($row["teamMember2"]); ?></td>
            <td><?php echo escape($row["teamMember3"]); ?></td>
            <td><?php echo escape($row["teacher"]); ?></td>
            <td><?php echo escape($row["campus"]); ?> </td>
            <td><?php echo escape($row["awardLevel"]); ?> </td>
            <td><?php echo escape($row["groups"]); ?> </td>
            <td><?php echo escape($row["nationPrize"]);?></td>
            <!--                <td><a href="delete.php?id=--><?php //echo escape($row["id"]); ?><!--">Delete</a></td>-->
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
