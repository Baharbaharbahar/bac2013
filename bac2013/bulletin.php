<?php
$num=$_POST["num"];
$dc=$_POST["dc"];
$ds=$_POST["ds"];
require('connexion.php');
$conn=mysql_connect($server,$username,$password,$bd)or die("probleme de connxion au serveur ou ala base de donnees");
$sql="select*from eleve where dc='$dc' and ds='$ds';";
$res=mysql_query($conn,$sql);
if (mysql_num_rows($res)==0)
   echo "Vous n'etre pas inscrit";
else{
    $sql="select*from eleve where dc='$dc' and ds='$ds';";
    $res=mysql_query($sql)or die (mysql_error());
    if (mysql_num_rows()==1)
    echo "Saisi incomplete des notes  ";
}

mysql_close();
?>