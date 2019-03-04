<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 26.02.19
 * Time: 9:02
 */
$data=$_POST = json_decode(file_get_contents('php://input'), true);
$index = $data['id'];
$title ="'". $data['title']."'";
$dsc = "'".$data['dsc']."'";
$img = "'".$data['img']."'";
$db = new SQLite3('projects.sqlite');
if($index==-1){
    $query = $db->exec('INSERT into projects (title,dsc,img) values ('.$title.','.$dsc.','.$img.')');
}
else {
    $query = $db->exec('UPDATE projects SET title='.$title.', dsc='.$dsc.', img='.$img . ' WHERE id=' . $index);
}
if ($query) {
    echo 'Количество измененных строк: ', $db->changes();
}
$db->close();