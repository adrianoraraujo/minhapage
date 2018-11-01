<?
$nome = $_POST['nome_user'];
$temgente="temgente";
$nickuser="nickuser";
$fp=fopen("bduser.txt","w+");
$novo="
<?
$$temgente = \"ocupado\";
$$nickuser = \"$nome\";
?>
";
fputs($fp,$novo);
fclose($fp);

$fp2=fopen("banco.txt","w+");
$novo2="<font color=grey> Olá $nome! Eu sou o Daredevil e vamos bater um papo, caso  fique  mais que 5 minutos  inativo  você sera desconectado! não demore muito para escrever as mensagens, pois o sistema a excluira atomaticamente. <Br></font>";
fputs($fp2,$novo2);
fclose($fp2);
echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"1;URL=funcao_user.php\">";
?>