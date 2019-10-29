<?php
// echo "success";
//接收前台接收的数据
$arr = $_POST;
$username = $arr['username'];
$password = $arr['password'];
//提取数据库中的数据
$mysql = new mysqli('localhost', 'root', '', 'mysql0923', '3306');
if ($mysql->connect_error) {
    echo '数据库连接失败，失败原因' . $mysql->connect_error;
    exit();
}
$mysql->query('set names utf8');
$sql = "select * from manager where names='$username'";
//$sql = "select * from manager";
$users = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
//$mysql=affected_rows;
//var_dump($result[0]);
$count = count($users);
if ($count) {
    //判断数组是否为空
    for ($i = 0; $i < $count; $i++) {
        if ($users[$i]['password'] === $password) {
            echo json_encode([
                'code' => 200,
                'msg' => '登录成功'
            ]);
            exit();
        }
    }
    echo json_encode([
        'code' => 404,
        'msg' => '用户名和密码不相同'
    ]);
} else {
    echo json_encode([
        'code' => 404,
        'msg' => '用户名不存在'
    ]);
}


