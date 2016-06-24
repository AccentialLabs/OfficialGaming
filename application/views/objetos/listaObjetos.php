<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--Nessa tela  incluimos o codigo da tabela (cadastrar objetos)-->
<link href="../../assets/css/objetos.css" rel="stylesheet"/>

<script src="../../assets/js/views/ajax/objetosAjax.js"></script>

<form  method="post" action="../objetos/createObjetos">

    <!--container-->
    <div class="col-md-10  container-style">
        <div id="page-content" class="margembranca"> 

            <div id="elemento1" class="col-md-12 pull-left">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Xyz</a> </li>
                        <li class="active">Features</li>
                    </ol>
                </div>
            </div>

            <div class="col-md-12">

                <div class="col-md-8">
                </div>

                <div class="col-md-3 ">  <!--nesse codigo aqui colocamos ata tabela cadsatrar objetos,-->
                    <select id="categoria" name="categoria" >
                        <option value="1">Selecione a categoria para filtrar</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>

            <div id="Layer1" class="col-md-11">
                <div class="table-responsive">
                    <table class="tablesorter">
                        <thead>
                            <tr>
                                <!-- datatableCount -->
                                <th style="border-width: thin; border-style: solid; border-color: black;">Perguntas</th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;">Categoria</th>
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th> 
                        <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>
                        </tr>
                        </thead>

                        <tbody ng-repeat="membro in membroSede"> 
                            <!-- Data Show Row-->
                            
                            <?php
                            foreach ($obj as $objeto) {
                                if ($objeto['status'] != 2) {
                                    ?> 

                                    <tr class="listas">  
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objeto['objeto']; ?></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $objeto['categoria']; ?></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $objeto['id']; ?>" value="<?php echo $objeto['status']; ?>" <?php
                                    if ($objeto['status'] == 1) {
                                        echo "checked";
                                    }
                                    ?>/> </center></td>  
                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><span class = "glyphicon glyphicon-ban-circle excluirObjeto" id="<?php echo $objeto['id']; ?>"></span></center>
                                </tr>

                            <?php
                            }
                        }
                        ?>
                        </tbody> 
                    </table> 
                </div>
            </div>

            <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="myModalDeleteAcao" role="dialog">     <!--.fade = desvanecer o modal de dentro pra fora-->
                    <div class="modal-dialog modal-sm"><!--diálogo-.modal=define a largura adequada e margem do modal"tamanho".modal-lg-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><center>ATENÇÃO!</center></h4>
                            </div> 
                            <div class="modal-body">
                                <p>Este Ação está sendo usada em </br>Reconhecimento e Programas!</br>
                                    Confirme se deseja mesmo excluí-la.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="confirmExcluirAcao">Sim</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <button type="button" data-toggle="modal" data-target="#myModalDeleteAcao" id="openModalDelete">Open Modal</button>
            <!-- rodape -->

            <!-- Trigger the modal with a button -->  
            <div>
                <a href="../objetos/cadastrarObjetos">   <button type="button" class="btn btn-primary pull-right btnazul" data-toggle="modal" data-target="#myModal">Adicionar Objeto</button> </a>
                <button type="submit" class="btn btn-deafult pull-right">Importar Planilha de Objetos</button> 
            </div> 

        </div>
    </div>
</form>
</body>


<!--FIM container-->