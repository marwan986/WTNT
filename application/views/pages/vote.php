<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/vote.css" media="screen"/>
        <title></title>
    </head>
    <body>
        
    <div align="center">
    <h3>Voting with jQuery, Ajax and PHP</h3>
    
    
        
    <?php foreach($content as $row):?>
        <div id="main">
        <div class="box1">
        <div class='up'><a href="" class="vote" id="<?php echo $row->msg; ?>" name="up">
        <?php echo $row->up; ?></a></div>
        <div class='down'><a href="" class="vote" id="<?php echo $row->mes_id; ?>" name="down">
        <?php echo $row->down; ?></a></div>
        </div>
        <div class='box2' ><?php echo $row->msg; ?></div>
        </div>
    
    <?php endforeach; ?>
    
    
 
    </body>
</html>
