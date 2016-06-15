<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


        <!-- Ativo para o botão+ add as tabelas-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="craftpip-jquery-confirm-524c959/dist/jquery-confirm.min.js"></script>
        <!-- Ativo para o botão+ add as tabelas-->

        <link href="../../assets/css/configuracoes7.css" rel="stylesheet"/>
        <script src="../../assets/js/configuracoes7.js"></script> 

        <script src="../../assets/js/views/ajax/configsPremiosAjax.js"></script>

    <body>


        <!--container-->
        <div class="col-md-10  container-style">
            <div id="page-content" class="margembranca"> 


                <div id="elemento1" class="col-md-12 pull-left">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a> </li>
                            <li><a href="#">Products </a> </li>
                            <li><a href="#">Xyz </a> </li>
                            <li class="active">Features</li>
                        </ol>
                    </div>
                </div>

                <div  class="col-md-12">															
                    <div class="tabbable tabs-left"> 
                        <div class="col-md-3">      									<!--Aqui começa a tab do lado esquerdo com tabela-->
                            <ul class ="nav nav-tabs nav-stacked">	

                                <li><a href="#tab1" data-toggle="tab">Dados da Empresa</a></li>
                                <li><a href="#tab2" data-toggle="tab">Redes Socias</a></li>
                                <li><a href="#tab3" data-toggle="tab">Jogo</a></li>
                                <li><a href="#tab4" data-toggle="tab">Usuário Gestores</a></li>
                                <li><a href="#tab5" data-toggle="tab">Conteúdo</a></li>
                                <li><a href="#tab6" data-toggle="tab">Categorias de Objetos</a></li>
                                <li><a href="#tab7" data-toggle="tab">Tipo de Reconhecimento</a></li>
                                <li class="active"><a href="#tab8" data-toggle="tab">Tipo de Prêmios</a></li>
                                <li><a href="#tab9" data-toggle="tab">Usuário Facilitadores</a></li>
                            </ul>    														 <!--Aqui Termina o cabeçalho da tab-->
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane active" id="tab8">

                                <!maregem a esquerda>
                                <div class="col-md-9  container-style" >
                                    <div id="page-content" class="margembranca"> 

                                        <!--Aqui estou chamando o script da tabela que add linha-->
                                        <div class="AddTableRow"></div>
                                        <!--fim da chamada do script da tabela que add linha-->

                                        <div class="col-md-11 ">
                                            <div id="table-responsive"  class="col-md-12">
                                                <table id="imbatman" class="tablesorter">  
                                                    <thead>
                                                        <tr>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;">Tipos de Prêmios</th>
                                                            <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th>
                                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php foreach ($premios as $premio) {
                                                            ?> 
                                                            <tr>
                                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['descricao']; ?></td>
                                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $premio['id']; ?>" value="<?php echo $premio['status']; ?>" <?php if($premio['status'] == 1){echo "checked";} ?>/> </center></td>
                                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirTipoPremio" id="<?php echo $premio['id']; ?>"  ></span> </center></td>
                                                        </tr>
                                                    <?php } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Esse é o botão + que adiciona linha na tabela -->
                                        <div class="btnclicks btn-plus pull-right">
                                            <button onclick="AddTableRow()" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                        </div>
                                        <!-- Fim é o FIM do botão + que adiciona linha na tabela -->


                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"> <center>ATENÇÃO!</center></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Este tipo de Prêmio está sendo usado</br> em Ações e Programas!</br>
                                                            Confirme se deseja mesmo excluí-lo.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div> <!-- aqui fecha a tab-pane -->

                            <div class="tab-pane" id="tab2">	 <!--Teste 1 para ver se funciona a caixa de lado-->
                                <p>Hey, estou na seção 2</p>
                            </div>

                            <div class="tab-pane" id="tab1">
                                <p>Estou na seção 1</p>
                            </div>	

                            <div class="tab-pane" id="tab4">
                                <p>Estou na seção 4</p>
                            </div>


                            <div class="tab-pane" id="tab5">
                                <p>Estou na seção 5</p>
                            </div>

                            <div class="tab-pane" id="tab6">
                                <p>Estou na seção 6</p>
                            </div>
                            <div class="tab-pane" id="tab7">
                                <p>Estou na seção 7</p>
                            </div>
                            <div class="tab-pane" id="tab9">
                                <p>Estou na seção 9</p>
                            </div>

                            <div class="tab-pane" id="tab3">
                                <p>Estou na seção 3</p>
                            </div>							<!--Termina aqui o teste 1 para ver se funciona a caixa de lado-->

                        </div>							
                    </div>	 
                </div>	       

                <!-- rodape -->

                <!--colocando os botóes do final da página dentro da ta´-pane-->
                <div>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary pull-right btnazul" data-toggle="modal" data-target="#myModal">Salvar</button>
                    <button type="button" class="btn btn-deafult pull-right">Cancelar</button> 
                </div> 
                <!--Tremina aqui os botóes do final da página dentro da ta´-pane-->

            </div>
        </div>

    </body>


<!--FIM container-->