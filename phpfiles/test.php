<?php
$db= new DB('localhost','root','1234','phpoopclass');
//$sql="INSERT INTO users (username,email,name) VALUES ('meserie','meserie@gmail.com','Meserie');";
//$sql .= "INSERT INTO users (username,email,name) VALUES ('gogu','gogu@gmail.com','Gogu')";
//$insert=$db->insert($sql);
//print $insert;
$sql="SELECT * FROM users";
$select=$db->selrowsquery($sql);
//print_r($select);
print '<pre>';
print var_dump($select);
print '</pre>';
print '<br/>';
$sql="SELECT * FROM users WHERE username='gogu'";
$select=$db->selrowquery($sql);
//print_r($select);
print '<pre>';
print var_dump($select);
print '</pre>';
print '<br/>';
print 'TEST load!!<br/>';
?>