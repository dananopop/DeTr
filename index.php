<?php

header('content-type: application/json;');
include_once 'phpmp3.php';
if (!is_dir('musics')) {
    mkdir('musics');
    mkdir('demos');
}
if (!in_array(null, [$_GET['link'], $_GET['s'], $_GET['p']])) {
    $music = pathinfo($_GET['link']);
    if ($music['extension'] == 'mp4') {
        copy($_GET['link'], 'musics/' . $music['basename']);
        $mp3 = new PHPMP3('musics/' . $music['basename']);
        $demo = $mp3->extract($_GET['s'], $_GET['p'])
        $demo->save('demos/' . $music['basename']);
        $show = ['ok' => true, 'channel' => '@Source_Home', 'results' => ['link' => $_SERVER['SCRIPT_URI'] . 'demos/' . $music['basename']]];
        unlink('musics/' . $music['basename']);
    } else {
        $show = ['ok' => false, 'channel' => '@Source_Home', 'message' => 'The extension must be mp3'];
    }
} else {
    $show = ['ok' => false, 'channel' => '@Source_Home', 'message' => 'Where is fucking params??'];
}
echo json_encode($show, 128 | 256);
