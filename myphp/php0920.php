<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php
/*$hello = '你好';
$nihao = 'hello';
echo $nihao . '<br/>'; //hello
echo $$nihao . '<br/>'; //你好
function ww()
{
    static $a = 1;
    echo $a . '<br/>';
    $a++;
}
ww();
ww();
ww();
ww();*/

/*$arr = array("安妮","aa","贾争","bb","abc");
$arrlength=count($arr);
echo count($arr);
for($i=0;$i<$arrlength;$i++){
    echo $arr[$i];
    echo '<br>';
}*/

/*$a='5';
$b=5;
$c=true;
$d=null;
$e=5.222;

echo gettype($c);
var_dump($c);
print($e);*/

/*$arr=array(array("name"=>"安妮","age"=>12,"sex"=>"女"),array("name"=>"安妮","age"=>12,"sex"=>"女"),array("name"=>"安妮","age"=>12,"sex"=>"女"));
foreach ($arr as $i=>$v){
    echo $i.$v["name"].$v["age"].$v["sex"].'<br>';
}*/

/*function fn(){
    echo "fn函数";
}
$tom="fn";
$tom();*/

//$g=23;
//function fn(){
//
//}

/*class person{
    public $p="人";
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
}
$abc = new person('张三',18);
var_dump($abc) ;*/

//PHP作用域
/*function a(){
    echo "我是a";
    function b(){
        echo "我是b";
    }
}
//b();
a();
b();*/

//函数参数
/*function qyt($a,$b){
    echo $a+$b;
}
qyt(1,5);*/

//通过引用传递参数
/*function abc(&$str){
    $str.="这是添加的str";
}
$cstr="啦啦啦";
abc($cstr);
echo $cstr;*/

//默认参数的值
/*function abc($a="我是默认值"){
    echo $a;
}
abc();*/

//函数的返回值
/*function abc($a){
    return "我是abc".$a;
}
echo abc(2);*/

//可变函数

/*$mysqli = new mysqli("localhost", "root", "", "php0916");
$mysql->query("set name utf8");
if (!$mysql) {
    die ("" . $mysql->connect_error);
}
$res = $mysql->query("select * from boy");
while ($row=mysqli_fetch_assoc($res)){
$arr[]=$row;
}*/

$mysqli=new mysqli("localhost","root","","php0918");
if(!$mysqli){
    die("数据库连接失败".$mysqli->connect_error);
}else{
    echo "数据库连接成功！";
}
$mysqli->query("set names utf8");
$mysqli->query("character set utf8");
$mysqli->query("collate utf8_general_ci");
$res=$mysqli->query("select * from sun");
while($row=(mysqli_fetch_assoc($res))){
    $arr[]=$row;
}
json_encode($arr);//解码  json_decode();
var_dump($arr);



?>
