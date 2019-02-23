<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 23.02.19
 * Time: 15:58
 */
$data=$_POST = json_decode(file_get_contents('php://input'), true);
$index = $data['index'];
$text = $data['text'];
$text="'".$text."'";
$db = new SQLite3('news.sqlite');
if($index==-1){
    $query = $db->exec('INSERT into news (text) values ('.$text.')');
}
else {
    $query = $db->exec('UPDATE news SET text=' . $text . ' WHERE id=' . $index);
}
if ($query) {
    echo 'Количество измененных строк: ', $db->changes();
}
$db->close();