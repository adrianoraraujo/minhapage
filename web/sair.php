<br />
<br />
<br />
<center>você foi desconectado</center>
<?
$fp=fopen("banco.txt","w+");
$novo="usuário se desconectou";
fputs($fp,$novo);
fclose($fp);

$fp2=fopen("bduser.txt","w+");
$novo2=" ";
fputs($fp2,$novo2);
fclose($fp2);

header("Location: entrar.php"); 

?>