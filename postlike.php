<?php
mysql_connect('localhost', 'root', '');
	mysql_select_db('signup');
$pid = $_POST['postid'];
$id = $_POST['userid'];
$result=mysql_fetch_array(mysql_query("select * from userpost where pid=".$pid.";"));
$count=$result["upvote"];
$select = mysql_query("select * from userlike where pid=".$pid." and id=".$id.";");
if($row = mysql_fetch_array($select)){
    $count=$count-1;
    mysql_query("UPDATE userpost
                SET upvote=".$count."
                WHERE pid=".$pid.";");
    mysql_query("delete from userlike where pid='".$pid."' and id='".$id."';");
    echo $count;
}
else{
     $count=$count+1;
    mysql_query("UPDATE userpost
                SET upvote=".$count."
                WHERE pid=".$pid.";");
    mysql_query("INSERT INTO `userlike`(`id`, `pid`, `timee`) VALUES ('$id','$pid',NULL)");
    echo $count;
}

?>