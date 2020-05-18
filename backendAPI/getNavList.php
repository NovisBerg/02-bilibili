<?php
/**
 * 获取导航栏信息
 */
require 'database.php';

$navList = [];
$sql = "select id, text from navList";

if ($result = mysqli_query($con, $sql)) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $navList[$i]['text'] = $row['text'];
        $navList[$i]['id'] = $row['id'];
        $i++;
    }
    echo json_encode($navList, JSON_UNESCAPED_UNICODE);
}

else
{
    http_response_code(404);
}