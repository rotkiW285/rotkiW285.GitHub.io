<?php
    $lowisko=$_POST["lowisko"];
    $data=$_POST["data"];
    $sedzia=$_POST["sedzia"];

    $db=new mysqli('localhost','root','','wedkarstwo');
    $sql="INSERT INTO `zawody_wedkarskie` (`id`,`karty_wedkarskie_id`,`lowisko_id`,`data_zawodow`,`sedzia`) 
        VALUES (NULL,'0','$lowisko','$data','$sedzia')";
    $db->query($sql);
    $db->close();
?>