<?php
include("config.php");

$ip=$_SERVER['REMOTE_ADDR']; 

if($_POST['id'])
{
$id=$_POST['id'];
$id = mysql_escape_String($id);

$ip_sql=mysql_query("select ip_add from Voting_IP where mes_id_fk='$id' and ip_add='$ip'");
$count=mysql_num_rows($ip_sql);

if($count==0)
{
$sql = "update Messages set up=up+1  where mes_id='$id'";
mysql_query( $sql);

$sql_in = "insert into Messages (mes_id_fk,ip_add) values ('$id','$ip')";
mysql_query( $sql_in);



}
else
{
}

$result=mysql_query("select up from Messages where mes_id='$id'");
$row=mysql_fetch_array($result);
$up_value=$row['up'];
echo $up_value;
}
?>