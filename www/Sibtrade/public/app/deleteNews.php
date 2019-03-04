<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 23.02.19
 * Time: 17:39
 */

$data=$_POST = json_decode(file_get_contents('php://input'), true);
$index = $data['index'];
$db = new SQLite3('news.sqlite');
$query = $db->exec('DELETE FROM news WHERE id='.$index);
if ($query) {
    echo 'Количество измененных строк: ', $db->changes();
}
$db->close();