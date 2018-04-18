<?php
mysql_connect ("localhost", "testuser","password")  or die (mysql_error());
mysql_select_db ("test");
 
$term = $_POST['term'];
 
$sql = mysql_query("select * from testtable where FName like '%$term%'");
 
while ($row = mysql_fetch_array($sql)){
    echo 'ID: '.$row['ID'];
    echo '<br/> First Name: '.$row['FName'];
    echo '<br/> Last Name: '.$row['LName'];
    echo '<br/> Phone: '.$row['Phone'];
    echo '<br/><br/>';
    }
 
?>