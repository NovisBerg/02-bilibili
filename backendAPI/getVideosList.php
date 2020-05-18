<?php
/**
 * 获取导航栏信息
 */
require 'database.php';

$videosList = [];
$sql = "select * from videoslist";

if ($result = mysqli_query($con, $sql)) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $videosList[$i]['id'] = $row['id'];
        $videosList[$i]['link'] = $row['link'];
        $videosList[$i]['imgSrc'] = $row['imgSrc'];
        $videosList[$i]['desc'] = $row['desc'];
        $videosList[$i]['playCount'] = $row['playCount'];
        $videosList[$i]['commentCount'] = $row['commentCount'];
        $videosList[$i]['videoSrc'] = $row['videoSrc'];
        $i++;
    }
    echo json_encode($videosList, JSON_UNESCAPED_UNICODE);
}

else
{
    http_response_code(404);
}