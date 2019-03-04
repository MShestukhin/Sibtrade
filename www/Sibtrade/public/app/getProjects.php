<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 26.02.19
 * Time: 9:02
 */
$index=0;
$db = new SQLite3('projects.sqlite');
$data=$_POST = json_decode(file_get_contents('php://input'), true);
$index = $data['id'];
if($index){
    $results = $db->query('SELECT * FROM "projects" where id='.$index);
}
else{
    $results = $db->query('SELECT * FROM "projects"');
}
$mass=[];
while ($row = $results->fetchArray()) {
    $imgFolder=$row['img'];
//    if($imgFolder){
        $dir= "./projects/".$row['img'];
        $files = array_diff(scandir($dir,1), array('..', '.'));
        $files = array('items' => $files);
        $row[]=$files;
//    }
    $mass[]=json_encode($row);
}
echo json_encode($mass);
$db->close();