<?php
header('Content-Type: application/json');
$url = 'https://secim.aa.com.tr/data/result-web-short.json';
$json = file_get_contents($url);
$data = json_decode($json, true);
$yurtici = $data['CB']['YurtIci'];

$totalSecmen = 64113941;
$JsonAday = $yurtici['y'];
$toplamOy = $yurtici['s']['o'];
$gecerliOy = $yurtici['s']['g'];
$JsonOy = $yurtici['b'];

$adaylar = [];
foreach ($JsonAday as $value) {
    $adaylar[$value['k']] =  $value['a'];
}

foreach ($JsonOy as $value) {

    $il = $value['a'];
    $plaka = $value['k'];
    $ilSnc = $value['c'];
    $ilSonuc = [];
    $adaySonuc = [];
    foreach ($ilSnc as $key => $value) {
        $adaySonuc[] = [
            'aday' => $adaylar[$value['k']],
            'kod' => $value['k'],
            'toplam' => $value['t'],
            'yüzde' => $value['r']
        ];
    }
    $snc[$plaka] = [
        'il' => $il,
        'snc' => $adaySonuc
    ];
}
$genel = [
    41 => 0,
    42 => 0,
    43 => 0,
    44 => 0
];
foreach ($snc as $value) {
    foreach ($value['snc'] as $key => $value) {
        $kode = $value['kod'];
        $genel[$kode] += $value['toplam'];
    }
}
$turkiye = [];
foreach ($genel as $key => $value) {
    $turkiye[$adaylar[$key]] = $value;
}
$percentages = array();
foreach ($genel as $key => $g) {
    $percentages[] =
        [
            'aday' => $adaylar[$key],
            'oy' => $g,
            'yüzde' => ($g / $gecerliOy) * 100
        ];
}

$response = [
    'success' => $data ? true : false,
    'turkiyeGenel' => $percentages,
    'ilTaban' => $snc
];
echo json_encode($response, JSON_UNESCAPED_UNICODE);
