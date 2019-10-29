<?php
//连接数据库中的数据
$mysql = new mysqli('localhost', 'root', '', 'mysql0923', '3306');
if ($mysql->connect_error) {
    echo '数据库连接失败，失败原因' . $mysql->connect_error;
    exit();
}
$mysql->query('set names utf8');
$sql="select * from students order by sid desc";
$sqlname = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
$count=count($sqlname);
//var_dump($count);
if($count){
    echo json_encode([
        'code'=> 200,
        'msg' => '获取成功',
        'data'=> $sqlname
    ]);
}