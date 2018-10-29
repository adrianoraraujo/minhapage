<!DOCTYPE html>
<html>
<title>Adriano's page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<!-- Sidebar on click
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav> -->

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Currículo<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#contact" class="w3-bar-item w3-button">Contato</a>
	  <a href="#Experiências" class="w3-bar-item w3-button">Experiências</a>
      <a href="#Formação" class="w3-bar-item w3-button">Formação</a>
	  <a href="#Habilidades" class="w3-bar-item w3-button">Habilidades</a>
      <a href="#Idiomas" class="w3-bar-item w3-button">Idiomas</a>

				  
    </div>
  </div>
  <!--<a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Work</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Price</a>-->
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Meus Projetos <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="https://mcgyvertronics.github.io/web/" class="w3-bar-item w3-button">McGyvertronics</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
  <!--  <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>-->
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
</div>

<!-- Image Header 
<div class="w3-display-container w3-animate-opacity">
  <img src="/w3images/sailboat.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">LEARN W3.CSS</button>
  </div>
</div>
-->
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="adriano3.jpg" style="width:100%" alt="Avatar" >
          <div class="w3-display-bottomleft w3-container w3-text-black">
           
          </div>
        </div>
		<div class="w3-display-bottomcenter w3-container w3-text-black" > <h2>Adriano Araújo</h2></div><p></p>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Consultor  e Desenvolvedor</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Salvador, BA BR</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>adrianoraraujo@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+55 (71) 992074646</p>
          <hr>

          <p class="w3-large" id="Habilidades"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Habilidades</b></p>
          <p>Java</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
          </div>
          <p>Php</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Html</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>CSS</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:78%">78%</div>
          </div>
          <p>Banco de Dados</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Bootstrap</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%">60%</div>
          </div>
           <p>C++</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
          </div>
           <p>CAD/CAN/CAE</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%">60%</div>
          </div>
           <p>Automação e Robótica</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:98%">98%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme" id="Idiomas"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Idiomas</b></p>
          <p>Inglês</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:80%"></div>
          </div>
          <p>Espanhol</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:60%"></div>
          </div>
          <p>Japonês</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    <!-- Work Row -->
<div class="w3-container w3-card w3-white w3-margin-bottom" id="work">

<div class="w3-text-black w3-padding-16">
<h2 class="w3-text-grey w3-padding-16"></i>Sobre mim... </h2>
<p>Graduando em Engenharia de Software e com larga experiência nas áreas de automação e robótica, sou um entusiasta da área de IOT e da cultura
Maker. Tenho paixão por criar, e codificar soluções inteligentes para resolver
problemas diversos. Meu mantra de cada dia é: "Quem não vive para servir, não 
serve para viver." (Autor Desconhecido).
Nesse site você irá encontrar um pouco sobre mim e sobre meus projetos,
disponibilizando soluções e atualizando as informações no menor tempo possível.
Seja muito bem vindo.</p>
</div>


</div>

      <div class="w3-container w3-card w3-white w3-margin-bottom" id="Experiências">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Experiências Profissionais</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>PSA - Tráfego e Segurança / INFRAERO</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2012 - <span class="w3-tag w3-teal w3-round">Atual</span></h6>
          <p>Fiscalização e inspeção de pátios e pistas, controle de tráfego nos pátios docagem de aeronaves acoplagem e desacoplagem de pontes telescópicas.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Professor Técnico / SENAI</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Out 2011 - Mar 2018</h6>
          <p>Ministrar treinamentos e cursos técnicos nas áreas de mecânica e automação.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Coordenador Técnico e Comercial / Viamatic</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jul 2011 - Out 2011</h6>
          <p>Coordenar equipe técnica e comercial na área de vendas projetos e consultoria em automação
.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Professor Técnico / CEEP</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Abr 2011 - Jun 2011</h6>
          <p>Professor de Eletroeletrônica Técnicas de Soldagem Desenho Técnico e Projetos Eletrônicos
.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Coordenador de Oficina / AASDAP</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2010 - Abr 2011</h6>
          <p>Coordenação da Oficina de Ciência e Robótica num trabalho com crianças do ensino fundamental ao ensino médio.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Coordenador de Oficina / Colégio Estadual Vale dos Lagos</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2009 - Ago 2009</h6>
          <p>Professor de Matemática em Oficina Complementar ao horário escolar.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Estagiário / SECTI BA</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2008 - Dec 2008</h6>
          <p>Auxiliava na análise elaboração e start up de projetos para o governo do estado da Bahia na área de Ciência e Tecnologia.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Agente de Aeroporto / GOL Linhas Aéreas</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Set 2006 - Mar 2008</h6>
          <p>Atendimento de voos em solo check in e despacho operacional. </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white" id="Formação">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Formação</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>UCSAL - Universidade Católica do Salvador</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Atual</h6>
          <p>Formação Engenheiro de Software em andamento 5º semestre</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>FTC -  Faculdade de Tecnologia e Ciências</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2004 - 2008</h6>
          <p> Formação Engenheiro de Controle e Automação em andamento</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>UFBA - Universidade Federal da Bahia</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2016</h6>
          <p>Sistemas de Informação Universidade Federal da Bahia (UFBA) 2016 trancado 1º semestre</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Fale Comigo</span></div>
      <h3>Endereço</h3>
      <p>Dúvidas, críticas, sugestões, o que for!</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Salvador, BA,  BR</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +55 (71) 992074646</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  adrianoraraujo@gmail.com</p>
    </div>
    <div class="w3-col m7">
    <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSeV1WF4qHsbJ6QNHXWa-nbDeGKWQ9qLbmQ12wgwZRxfkXci5g/formResponse" method="post" ><!--target="_blank"-->
      <div class="w3-section">      
        <label>Nome</label>
        <input class="w3-input" type="text" name="entry.2005620554" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="email" name="entry.1166974658" required>
      </div>
      <div class="w3-section">      
        <label>Mensagem</label>
        <input class="w3-input" type="text" name="entry.839337160" required>
      </div>  
       <button type="submit" class="w3-button w3-right w3-theme">Enviar</button>
      </form>
    </div>
  </div>
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Minhas redes sociais</p>
  <a class="" href="https://www.facebook.com/adriano.araujo.7169" title="Facebook"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a class="" href="https://www.instagram.com/adrianoaraujo7665/?hl=pt-br" title="Instagram"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a class="" href="https://github.com/adrianoraraujo" title="Github"><i class="fa fa-briefcase w3-hover-opacity"></i></a>
 
  <p>Desenvolvido por Adriano Araújo </p>
</footer>
<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
