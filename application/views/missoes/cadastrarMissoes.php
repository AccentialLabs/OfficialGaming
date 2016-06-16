<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


     
        <link href="../../assets/css/cadastrar-missoes.css" rel="stylesheet"/>

        <script src="../../assets/js/views/cadastrarMissoes.js"></script> 

        <!--script para adicionar uma linha-->
        <script>
            (function($) {

                AddTableRow = function() {
                    var newRow = $("<div class='panel-footer'>");
                    var cols = "";
                    cols += '<div class="panel-footer">&nbsp </div>';

                    newRow.append(cols);
                    $("#playlistTable").append(newRow);
                    return false;
                };
            })(jQuery);
        </script>
        <!--FIM do script para adicionar uma linha-->

    </head>
    <body>
        <form method="post" action="http://localhost:9090/gaming/index.php/missoes/createMissoes">  
            <!--antepenultimo passo-->

            <!--antepenultimo passo para mostrar na tela se funciona-->

            <!--container-->
            <div class="col-md-10  container-style ">
                <div id="page-content" class="margembranca "> 

                    <div class="col-md-12" >

                        <div class="col-md-12">
                            <div class="col-sm-6 col-lg-5" >
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-2 control-label">Missão</label>
                                    <div class="col-md-8 pull-right">
                                        <input type="text" id="missao" name="missao" class="form-control"  placeholder="">
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1 pull-right celular">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>

                        <!--Linha da Agência -->
                        <div class="col-md-12">
                            <div class="col-md-12" >

                                <label for="inputEmail" class="col-md-2 control-label" >Vigência</label>
                                <div class="col-md-3" >
                                    <input type="date" id="datainicio" name="datainicio" class="form-control col-md-10 pull-left" />
                                    <label for="datainicio" class="col-md-1">a</label>
                                </div>

                                <div class="col-md-3 ">
                                    <input type="date"  id="datatermino"  name="datatermino" value=" " class="col-md-10 form-control"/>
                                    <label for="datainicio" class="col-md-1">das</label>
                                </div>

                                <div class="col-md-2" >
                                    <input type="text" id="horainicio" name="horainicio" class="form-controls col-md-8" placeholder="00:00">
                                    <label for="datainicio" class="col-md-1">às</label>
                                </div>

                                <div class="col-md-2">
                                    <input type="text" id="horatermino" name="horatermino" class="form-controls col-md-10" placeholder="00:00"> 
                                </div>


                            </div>
                        </div>

                        <!--FIM Linha da Agência -->
                        <br/><br/>
                        <div class="col-md-12" >
                            <div class="col-sm-6 col-lg-10" >
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-2 control1-labe">Etapas</label>
                                    <div class="col-md-9 ">

                                        <!--aqui começa o paineeeeeeeeeeeeeeeeeeeeeel -->
                                        <div id="playlistTable" class="panel panel-default">
                                            <div class="panel-heading">Rodada #1 (ou Rodada única/recorrente)</div>
                                            <div class="panel-body">
                                                <!--aqui termina a primeira parte do paineeeeel -->

                                                <!--Aqui começa a tabela dentro da Panel-->
                                                <div class="col-md-12">
                                                    <div class="col-sm-6 col-lg-12" >
                                                        <div class="table-responsive">
                                                            <table class="tablesorter">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Selecione os Objetos</th>
                                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Categorias</th>
                                                                        <th style="border-width: thin; border-style: solid; border-color: black;">Ordem</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <!--penultimo passo, para exexutar tudo com o Foreach-->

                                                                    <tr>
                                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><br/></td>
                                                                        <td style="border-width: thin; border-style: solid; border-color: black;"></td>
                                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center></center></td>
                                                                </tr>
                                                                <!penultimo passo>
                                                                </tbody>  
                                                            </table>
                                                        </div>
                                                    </div>				<!--Aqui termina a tabela dentro da Panel-->

                                                    <div class="col-md-12">

                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-md-5 control-label">Dica de tela</label>
                                                            <div class="col-md-7 pull-right">
                                                                <input type="email" class="form-control col-md-12" id="inputEmail" placeholder="">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-12">

                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-md-5 control-label">Imagem</label>
                                                            <div class="col-md-7 ">
                                                                <a href="#" class="ico-search"><small>clique aqui para importar outra imagem</small></a>
                                                            </div>
                                                        </div>

                                                    </div> 
                                                    <!--Linha da data limite-->

                                                    <div class="col-md-12" >

                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-md-4 control-label">Data limite</label>

                                                            <div class="col-md-2 ">
                                                                <input name="nascimento" type="date"  id="month" value=" " class= "form-control textbox70"/> 
                                                            </div>
                                                            <div class="col-md-1 datatext">

                                                            </div>
                                                            <div class="col-md-1 ">
                                                                <input type="email" class="form-control col-md-4" id="inputEmail" placeholder="00:00">
                                                            </div>


                                                        </div>
                                                    </div> 


                                                    <div class="col-md-12">
                                                     
                                                            <div class="form-group">
                                                                <label for="inputEmail" class="col-md-4 control-label">Mensagem Parabéns</label>
                                                                <div class="col-md-8 pull-right">
                                                                    <input type="email" class="form-control " id="inputEmail" placeholder="">
                                                                </div>
                                                            </div>
                                                        
                                                    </div>

                                                    <div class="col-md-12" >
                                                      
                                                            <div class="form-group">
                                                                <label for="inputEmail" class="col-md-4 control-label">Conteúdo destravado</label>
                                                                <div class="col-md-7 ">
                                                                    <a href="#" class="ico-search">Clique aquí para importar conteúdo</a>
                                                                </div>
                                                            </div>
                                                       
                                                    </div> 

                                                </div>
                                            </div>

                                            <!-- começa a parte final do painel-->
                                            <!--botão de adicoanar linhas (+)-->
                                            <table id="playlistTable" class="panel-footer" >
                                                <div class="panel-footer" >Etapa 2 
                                                    <div class="col-md-2 pull-right adiciona"><button onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true">
                                                            </span></button> </div></div>
                                            </table>
                                            <!-- Fim botão de adicoanar linhas(+)-->
                                        </div>
                                        <!--aqui termina o paineeeeeeeeeeeeeeeeeeeeeel -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"> 
                            <div class="col-sm-6 col-lg-10">
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-2 control-label">Para quem</label>
                                    <div class = "checbox checboxcontainer">
                                        <input type="radio" id="usuariojogadores" name="usuariojogadores"  value="1"> Todos os Usuários/Jogadores cadastrado
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-sm-6 col-lg-5">
                                <div class="col-md-8 pull-right ">
                                    <div class = "checbox checboxcontainer">
                                        <input type="radio" id="somenteequipe" name="somenteequipe"  value="0">  Somente a(s) Equipes(s)
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div id="Layer1" class="col-md-11"> 
                            <div class="col-sm-6 col-lg-10 pull-right">
                                <div class="table-responsive">
                                    <table class="tablesorter">
                                        <thead>
                                            <tr>
                                                <th style="border-width: thin; border-style: solid; border-color: black;">Selecione a Equipe</th>
                                                <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th> 
                                        </tr>
                                        </thead>
                                        <tbody>


                                            <!--penultimo passo, para exexutar tudo com o Foreach-->

                                            <tr>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><br/></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"checked /> </center></td>
                                        </tr>

                                        <!penultimo passo>


                                        </tbody>  
                                    </table>
                                </div>
                            </div>	
                        </div>

                        <div class="col-sm-6 col-lg-5">
                            <div class="col-md-8 pull-right ">
                                <div class = "checbox checboxcontainer">
                                    <input type="radio" id="manualmente" name="manualmente" value="0">  Definir manualmente
                                </div> 
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-sm-6 col-lg-6" >
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-2 control-label">Dica de tela</label>
                                    <div class="col-md-8 pull-right">
                                        <input type="text" id="dicatela" name="dicatela" class="form-control " placeholder="">
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-sm-6 col-lg-6" >
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-2 control-label">Mensagem Parabéns</label>
                                    <div class="col-md-8 pull-right">
                                        <input type="text" id="msgparabens" name="msgparabens" class="form-control" placeholder="">
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"> 
                            <div class="col-sm-6 col-lg-10">
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-2 control-label">Texto p/Log</label>
                                    <div class="col-md-3">
                                        <form action="demo_form.asp">O usuário/jogador"Fulano"
                                        </form>
                                    </div>
                                    <div class="col-md-4 verbocx">
                                        <input type="text" id="textlog" name="textlog" size="15" maxlength="8" placeholder="entre com um verbo"> a "Ação"
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!--FIM margem branca-->
                <input type="hidden" name="status" id="status"/>

                <!-- rodape -->
                <div>
                    <button type="submit" class="btn btn-primary pull-right btnazul">Salvar e criar Reconhecimento</button>
                    <button class="btn btn-primary pull-right btnazul">Salvar</button>
                    <button class="btn btn-deafult pull-right">Cancelar</button>
                </div> 

            </div>
        </form>
    </body>
</html>

<div class="col-md-12">
    <div class="col-md-12">
        <div class="col-md-2">
            Dica de Tela
        </div>
        <div class="col-md-3">
            <input type="text" class="col-md-12 form-controls" />
        </div>
    </div>
  <br/><br/>
      <div class="col-md-12">
        <div class="col-md-2">
            Imagem
        </div>
        <div class="col-md-10">
           clique aqui para importar outra imagem
        </div>
    </div>
    
</div>

<!--FIM container-->