
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Voting with jQuery, Ajax and PHP</title>
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(function() {

$(".vote").click(function() 
{

var id = $(this).attr("id");
var name = $(this).attr("name");
var dataString = 'id='+ id ;
var parent = $(this);


if(name=='up')
{

$(this).fadeIn(200).html('<img src="dot.gif" align="absmiddle">');
$.ajax({
   type: "POST",
   url: "up_vote.php",
   data: dataString,
   cache: false,

   success: function(html)
   {
    parent.html(html);
  
  }  });
  
}
else
{

$(this).fadeIn(200).html('<img src="dot.gif" align="absmiddle">');
$.ajax({
   type: "POST",
   url: "down_vote.php",
   data: dataString,
   cache: false,

   success: function(html)
   {
       parent.html(html);
  }
   
 });


}
  
  
   
 

return false;
	});

});
</script>

<style type="text/css">
body
{
font-family:'Georgia', Times New Roman, Times, serif;
}
#main
{
height:80px; border:1px dashed #29ABE2;margin-bottom:7px;
width:500px;
}
a
{
color:#DF3D82;
text-decoration:none;

}
a:hover
{
color:#DF3D82;
text-decoration:underline;

}
.up
{
height:40px; font-size:24px; text-align:center; background-color:#009900; margin-bottom:2px;
-moz-border-radius: 6px;-webkit-border-radius: 6px;
}
.up a
{
color:#FFFFFF;
text-decoration:none;

}
.up a:hover
{
color:#FFFFFF;
text-decoration:none;

}
.down
{
height:40px; font-size:24px; text-align:center; background-color:#cc0000; margin-top:2px;
-moz-border-radius: 6px;-webkit-border-radius: 6px;
}

.down a
{
color:#FFFFFF;
text-decoration:none;

}
.down a:hover
{
color:#FFFFFF;
text-decoration:none;

}
.box1
{
float:left; height:80px; width:50px;
}

.box2
{
float:left; width:440px; text-align:left;
margin-left:10px;height:60px;margin-top:10px;
font-weight:bold;

font-size:18px;
}
img
{
border:none;
padding-top:7px;

}
</style>
</head>

<body>
<div align="center">
<h3>Voting with jQuery, Ajax and PHP</h3>
<?php
include('config.php');
$sql=mysql_query("SELECT * FROM messages  LIMIT 9");
while($row=mysql_fetch_array($sql))
{
$msg=$row['msg'];
$mes_id=$row['mes_id'];
$up=$row['up'];
$down=$row['down'];
?>

<div id="main">


<div class="box1">
<div class='up'><a href="" class="vote" id="<?php echo $mes_id; ?>" name="up">

<?php echo $up; ?></a></div>
<div class='down'><a href="" class="vote" id="<?php echo $mes_id; ?>" name="down"><?php echo $down; ?></a></div>


</div>


<div class='box2' ><?php echo $msg; ?></div>




</div>



<?php
}

?>
</div>
</body>
</html>
