<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

        <link href="../../assets/css/Equipes.css" rel="stylesheet"/>
        <script src="../../assets/js/views/ajax/equipesAjax.js"></script>
    </head>
    <body>

        <!--container-->
        <div id="elemento1" class="col-md-10  container-style">
            <div id="elemento1" class="margembranca"> 

                <div id="elemento1" class="col-md-12 pull-left">
                    <div id="elemento1" class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a> </li>
                            <li><a href="#">Products </a> </li>
                            <li><a href="#">Xyz </a> </li>
                            <li class="active">Features</li>
                        </ol>
                    </div>
                </div>

                <div id="elemento1" class="col-md-10">
                    <div class="table-responsive">
                        <table class="tablesorter">
                            <thead>
                                <tr>
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Equipes</th>
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th>
                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/> </center></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($equipestab as $equipestab) {
                                      if ($equipestab['status'] != 2) {
                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach-->
                                    
                                    <tr class="listas">
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipestab['equipes']; ?></td> <!--ultimo passo , já conferindo no BD-->
                                         <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="cep" class="statusCheckbox" id="<?php echo $equipestab['id']; ?>" value="<?php echo $equipestab['status']; ?>" <?php
                                         if ($equipestab['status'] == 1) {
                                    echo "checked";
                                }
                                ?> /> </center></td>
                               <td style="border-width: thin; border-style: solid; border-color: black;"><center><span class = "glyphicon glyphicon-ban-circle excluirEquipes" id="<?php echo $equipestab['id']; ?>"></span></center> </td>
                                </tr>

                            <?php } }?> <!penultimo passo>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--MODAL-->
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
                    </div>    <!--FIM MODAL--> 
                </div>
                <button type="button" data-toggle="modal" data-target="#myModalDeleteAcao" id="openModalDelete">Open Modal</button>
        <!-- rodape -->        
        
        <!-- Trigger the modal with a button -->
                <div>
                    <!-- Trigger the modal with a button -->
                    <a href="../equipes/cadastrarEquipes">   <button type="button" class="btn btn-info pull-right btnazul" data-toggle="modal" data-target="#myModal">Criar/Adicionar Equipes</button>   </a>   
                </div> 

            </div>
        </div>

    </body>
</html>

<!--FIM container-->