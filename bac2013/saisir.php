<?php
$dc=$_POST["dc"];
$ds=$_POST["ds"];
$num=$_POST["num"];
require('connexion.php');
$conn=mysql_connect($server,$username,$password,$bd)or die("probleme de connxion au serveur ou ala base de donnees");
$sql="select*from eleve where dc='$dc' and ds='$ds';";
$res=mysql_query($conn,$sql);
if (mysql_num_rows($res)==0)
   echo "Eleve non inscrit";
else{
    $sql="select*from eleve where dc='$dc' and ds='$ds';";
    $res=mysql_query($sql)or die (mysql_error());
    if (mysql_num_rows()==1)
    echo "Notes deja saisies";
}
else{
    $sql="insert into eleve values ('$num', '$choix','$dc''$ds')";
    $res=mysql_query($sql)or die (mysql_error());
    if (mysqlaffected_rows()!=-1)
    echo "eleve avec success"

}
mysql_close();
?>