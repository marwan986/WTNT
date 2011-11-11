<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1> About Us </h1>
        <?php
        foreach($content as $row){
            echo 'ID: '.($row->mes_id).'</br>';
            echo 'Message: '.($row->msg).'</br>';
            echo 'Up: '.($row->up).'</br>';
            echo 'Down: '.($row->down).'</br></br>';
        }
        //print_r( $content[0]->msg);
        ?>
    </body>
</html>
