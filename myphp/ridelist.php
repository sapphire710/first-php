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
<?php
    $str='<table cellspacing=0 />';
    for($i=1;$i<=9;$i++) {
        $str.='<tr style="width:16px;">';
        for ($j = 1; $j <= $i; $j++) {
            $str.='<td style="border: 1px solid burlywood;">'.$i.'*'.$j.'='.$i*$j.'</td>';
        }
        $str.='</tr>';
    }
    $str.='</table>';
    echo $str;
?>

</body>
</html>