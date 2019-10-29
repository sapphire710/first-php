<?php
$arr = $_POST;
$sname = $arr['sname'];
$sex = $arr['sex'];
$age = $arr['age'];
//连接数据库中的数据
$mysql = new mysqli('localhost', 'root', '', 'mysql0923', '3306');
if ($mysql->connect_error) {
    echo '数据库连接失败，失败原因' . $mysql->connect_error;
    exit();
}
$mysql->query('set names utf8');

if ($sname != null) {
    if ($sex == '男' || $sex == '女') {
        if ($age >= 0 && $age < 100) {
            $sql = "insert into students (sname,sex,age) values('$sname','$sex','$age')";
            $mysql->query($sql);

            echo json_encode([
                'code' => 200,
                'msg' => '录入成功'
            ]);

            exit();

        } else {
            echo json_encode([
                'code' => 404,
                'msg' => '年龄输入错误'
            ]);
        }
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => '性别输入错误'
        ]);
    }
} else {
    echo json_encode([
        'code' => 404,
        'msg' => '姓名输入错误'
    ]);
}


/*if($mysql->affected_rows>0){
    echo json_encode([
        'code' => 200,
        'msg' => '录入成功'
    ]);
}else{
    echo json_encode([
        'code' => 404,
        'msg' => '录入失败'
    ]);
}*/
