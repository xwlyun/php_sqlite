<?php
/**
 * php操作SQLite数据库封装类
 * @xwl 2014-09-22
 * 注意SQLite中sql书写与mysql的不同，例如update时无法limit等等
 */
include_once('sqliteClass_pdo.php');

$file = 'test2.sqlite';
$ms = new sqlite_pdo($file);

//$sql = "create table `questions` (
//	'id' integer primary key autoincrement not null,
//	'title' varchar,
//	'content' varchar)";
//$ms->query($sql);

//$insert_data = array(
//	'title'		=>	'测试标题3',
//	'content'	=>	'测试内容3'
//);
//$result = $ms->insert('questions',$insert_data,true);
//var_dump($result);

//$condition = " `id`=2 ";
//$update_data = array(
//	'title'	=>	'title3'
//);
//$ms->update('questions',$condition,$update_data);
//$sql = $ms->update('questions',$condition,$update_data,1,true);
//var_dump($sql);

//$sql = 'select count(*) from `questions` limit 1';
//$data = $ms->getOne($sql);
//var_dump($data);

$sql = "select * from `questions` limit 50";
$data = $ms->getRows($sql);
var_dump($data);

//$sql = "select * from `questions` where `id`=2 limit 1";
//$data = $ms->getRow($sql);
//var_dump($data);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
sqlite
</title>
</head>
<body>

</body>
</html>