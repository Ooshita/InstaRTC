<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //アクセストークン
        $access_token = "***************************************************";
        //JSONデータを取得して出力
        echo @file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=$access_token&count=9");
        //終了
        exit;
    }
?>
