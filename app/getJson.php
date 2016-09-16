<?php
// getenv('instagram')で環境変数内にあるaccess_tokenを取得する
$userApiUrl = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.getenv('instagram');
// JSON($json)を連想配列に変換(デコード)する
$array = json_decode(@file_get_contents($userApiUrl),true);
//echo var_dump($array);
// 主な画像だけ取得するstandard_resolutionと言うのが基本的な拡張子の画像
// $array["data"]が自分の画像の個数でcountで取得
for($i = 0;$i < count($array["data"]); $i++) {
    $standardResolution = $array["data"][$i]["images"]["standard_resolution"]["url"];
    // 正規表現で画像のURLを取得する。
    if(preg_match_all('(https?://[-_.!~*\'()a-zA-Z0-9;/?:@&=+$,%#]+(jpg))',$standardResolution, $result) !== false) {
        foreach($result[0] as $value) {
            echo $value . "\n";
         }
    }
}

