<?php
/**
 * 获取导航栏信息
 */
require 'database.php';

$swiperList = [];
$sql = "select link, imgSrc from swiperList";

if ($result = mysqli_query($con, $sql)) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $swiperList[$i]['link'] = $row['link'];
        $swiperList[$i]['imgSrc'] = $row['imgSrc'];
        $i++;
    }
    echo json_encode($swiperList, JSON_UNESCAPED_UNICODE);
}

else
{
    http_response_code(404);
}