<html lang="pl-PL">



<head>

<meta charset='utf-8' />
<link rel='stylesheet' type='text/css' href='' />
<script type='text/javascript' src=''> </script>
<title>Zgłoszenie</title>

</head>



<body>



<?php

$ratownicy=$_POST['ratownicy'];
$dyspozytor=$_POST['dyspozytor'];
$adres=$_POST['adres'];

$db=new mysqli('localhost', 'root', '', 'ratownictwo');

$sql="INSERT INTO `zgloszenia` (`id`, `ratownicy_id`, `dyspozytorzy_id`, `adres`, `pilne`, `czas_zgloszenia`) VALUES (NULL, '$ratownicy', '$dyspozytor', '$adres', '0', CURTIME());";

$db->query($sql);
$db->close();

?>






</body>



</html>