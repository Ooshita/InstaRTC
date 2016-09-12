<?php
//getenv('instagram')で環境変数内にあるaccess_tokenを取得する
$userApiUrl = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.getenv('instagram');
// JSON($json)を連想配列に変換(デコード)する
$array = json_decode(@file_get_contents($userApiUrl),true);
echo var_dump($array);
