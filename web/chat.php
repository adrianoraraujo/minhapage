<? 
//inicia a sessão
session_start();
//verifica e seta as variáveis de sessão e de 
$verififca=$_SESSION['admin'];
$entrar=$_POST['entrar'];
$user=$_POST['user'];
$pass=$_POST['pass'];
//se estiver logado segue para a página de chat
if($verififca == "logado"){
	echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"1;URL=funcao_user.php\"> ";
}
//caso não esteja abre tela de logi, apenas para o servidor da conversa
else{
	echo "voce não esta logado como admin do site<br>";
	echo " favor logar-se<br>";
	echo "<form action=\"chat.php\" method=\"post\">
		  <input type=\"text\" name=\"user\"><br>
		  <input type=\"password\" name=\"pass\"><br>
		  <input type=\"submit\" value=\"logar\" name=\"entrar\">";
}
//autentica o usuário
if($entrar == "logar"){
		if($user=="daredevil" && $pass =="mattmurdock123*"){
				  $_SESSION['admin']="logado";
				  echo"<script>location.href='javascript:abrir('chat.php');'</script>";
				  echo"<script>alert(\" logado com sucessp\")</script>";
		}else{
				  echo "<script>alert(\"erro ao logar-se  verifique senha e usuário\")</script>";
	
		  }
}
?>

<script language="JavaScript">
function abrir(URL) {

  var width = 420;
  var height = 600;

  var left = 99;
  var top = 0;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars="no", status="no", toolbar="no", location="no", directories="no", menubar="no", resizable="no", fullscreen=no');

}
</script>
