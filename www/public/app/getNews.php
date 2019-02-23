<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 23.02.19
 * Time: 16:01
 */
$db = new SQLite3('news.sqlite');
$results = $db->query('SELECT * FROM "news"');
$mass=[];
while ($row = $results->fetchArray()) {
    $mass[]=json_encode($row);
}
echo json_encode($mass);
$db->close();