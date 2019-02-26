<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 26.02.19
 * Time: 9:00
 */
$data=$_POST = json_decode(file_get_contents('php://input'), true);
$index = $data['id'];
$db = new SQLite3('projects.sqlite');
$query = $db->exec('DELETE FROM projects WHERE id='.$index);
if ($query) {
    echo 'Количество измененных строк: ', $db->changes();
}
$db->close();