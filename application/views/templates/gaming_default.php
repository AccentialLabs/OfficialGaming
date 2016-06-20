<title>Gaming APP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
<!--<link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand---> 
<script src="../../assets/js/jquery.min.js"></script> 
<script src="../../assets/js/bootstrap.min.js"></script> 
<!-- COMEÇA AQUI  A TABELA NO HEAD-->
<!-- Estilos necessários para o tema do tablesorter -->
<link rel="stylesheet" href="../../assets/css/blue/style.css">
<link rel="stylesheet" href="../../assets/css/GamingDefault.css">
<!-- jQuery e Tablesorter -->
<script src="../../assets/js/jquery-latest.js"></script>
<script src="../../assets/js/jquery.tablesorter.min.js"></script>
<!-- Meu script -->
<script src="../../assets/js/scripts.js"></script> 
<link href="../../assets/css/gaming_defaultdivider.css" rel="stylesheet"/>
<div class="col-md-12 header-style">
    <nav class="navbar navbar-default nab-branco">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=" col-md-3 pull-left">
                <a class="navbar-brand" href="#"><strong>Game APP |</strong>Company Console</a>
            </div>

            <div class= 'col-md-3 pull-right gaming-header'>
                <a class= "navbar-brand" href ="#"><small><?php if ($this->session->userdata('empresaLogada')) {
    echo $this->session->userdata('empresaLogada')['nome'];
} ?></small><br/>
                    <small><?php if ($this->session->userdata('empresaLogada')) {
    echo $this->session->userdata('empresaLogada')['responsavelemail'];
} ?></small></a>
            </div>

            <div class= 'col-md-6 pull-right text-center'>
                <a class= "navbar-brand" href ="#"><strong>Equipes</strong></a>
            </div>
        </div>
    </nav>
</div>
<!-- fim cabeçalho -->
<!--Menu-->
<div class="col-md-2 pull-left div-vermelha menu-style ">

    <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="../dashboard/principal">Inicial</a></li>
        <li role="presentation"><a href="../objetos/listaObjetos">Objetos</a></li>
        <li role="presentation"><a href="../Acoes/listaAcoes">Ações</a></li>
        <li role="presentation"><a href="../reconhecimento/reconhecimentoConquista">Reconhecimento</a></li>
        <li role="presentation"><a href="../missoes/listaMissoes">Missões</a></li>
        <li role="presentation"><a href="../programas/argProgramas">Programas</a></li>
        <li role="presentation"><a href="../programas/cadastrarDesafio">Desafios</a></li>
        <li class="divider-style"></li>
        <li role="presentation"><a href="#">MOD/Packs</a></li>
        <li class="divider-style"></li>
        <li role="presentation"><a href="#">Cadastro</a></li>
        <li role="presentation"><a href="../jogadores/index">Jogadores</a></li>
        <li role="presentation" ><a href="../equipes/listaEquipes">-Equipes</a></li>
        <li role="presentation"><a href="../premio/ganharpremio">-Prêmios</a></li>
         <li class="divider-style"></li>
        <li role="presentation"><a href="../configuracoes/dadosEmpresa">Configurações</a></li>
        <li role="presentation"><a href="#">Sair</a></li>
    </ul>
</div>
