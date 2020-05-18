<?php
/**
 * 获取导航栏信息
 */
require 'database.php';
$videoId = $_GET['id'];


$videoInfo = new class{};

$sql = "select * from videoInfo where id='$videoId'";

if ($result = mysqli_query($con, $sql)) {
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $videosInfo['id'] = $row['id'];
        $videosInfo['author'] = $row['author'];
        $videosInfo['commentCount'] = $row['commentCount'];
        $videosInfo['date'] = $row['date'];
        $videosInfo['playCount'] = $row['playCount'];
        $videosInfo['videoSrc'] = $row['videoSrc'];
        $videosInfo['videoTitle'] = $row['videoTitle'];
        $i++;
    }
    echo json_encode($videosInfo, JSON_UNESCAPED_UNICODE);
}

else
{
    http_response_code(404);
}