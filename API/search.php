<?php
/**
 * Created by PhpStorm.
 * User: wangning
 * Date: 2018/6/29
 * Time: 上午12:10
 */


error_reporting(0);
require_once '../config.php';
require_once 'Response.php';

class Search{
    private  $content = "content";
    protected static $_instance = null;
    protected function __construct(){
        //disallow new instance
    }
    protected function __clone(){
        //disallow clone
    }
    public function getInstance(){
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    function search(){
        self.$this->content = $_GET["content"];
//        $value=$_POST["content"];
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
        }else{
            //echo "连接MySQL成功！！！</br>";
            //echo "传参为：".$value;
        }
        $mysqli->set_charset("utf8");
        $sql = "SELECT * FROM NationalCompetitionGrade where years like '%{$this->content}%' or teamMember1 like '%{$this->content}%' or teamMember2 = '{$this->content}' or teamMember3 like '%{$this->content}%' or teacher like '%{$this->content}%' or campus like '%{$this->content}%' order by serialNumber";
        //echo "</br>SQL语句为：".$sql;
        $result = $mysqli->query($sql);

        //getAll;
        //$allrows = $mysqli->
        $allrows = mysqli_fetch_all($result);
        //$allrows = mysqli_fetch_array($result,MYSQLI_ASSOC);
        Response::show(200,'查询列表获取成功',$allrows,'json');
    }
}

$api = Search::getInstance();
$api -> search();

?>