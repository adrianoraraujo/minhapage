<html>
<head>
<title>
Chat Adriano Versão 1.0
</title>
</head>
<br>
<br>
<center>voce excluiu/desconectou esse usuário com sucesso!</center>
<?
$fp = fopen("banco.txt","w+");
$novo =" você foi desconectado da conversa";
fputs($fp,$novo);
fclose($fp);

$fp2=fopen("bduser.txt","w+");
$novo2=" ";
fputs($fp2,$novo2);
fclose($fp2);

 echo "<br><br><a href=\"chat.php\">voltar para sua area</a>";
