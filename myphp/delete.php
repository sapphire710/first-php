<?php
// echo "success";
//接收前台接收的数据
$arr = $_POST;
$did = $arr['idd'];

//提取数据库中的数据
$mysql = new mysqli('localhost', 'root', '', 'mysql0923', '3306');
if ($mysql->connect_error) {
    echo '数据库连接失败，失败原因' . $mysql->connect_error;
    exit();
}
$mysql->query('set names utf8');
$sql = "delete from students where sid=$did;";
$mysql->query($sql);

$sql="select * from students";
$sqlname = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);


    echo json_encode([
        'code'=> 200,
        'msg' => '获取成功',
        'data'=> $sqlname,
    ]);


