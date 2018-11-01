<? include("bduser.txt"); ?>
<META HTTP-EQUIV="REFRESH" CONTENT="30;URL=entrar.php">
<br />
<br />
Chat Adriano Versão 1.0, aproveite sem moderação<br />
<br />
<br />
<? if($temgente == "ocupado"){
	echo" descupe o canal está ocupado, em breve disponibilizarei mais espaços no chat ";
}else{
	echo"
<center><form action=\"verificauser.php\" method=\"post\">
informe seu  nome <br><input type=\"text\" name=\"nome_user\" maxlength=\"20\">
<input type=\"submit\" value=\"entrar\">
</form><h6> maximo 20 letras</center>
";
}
?>