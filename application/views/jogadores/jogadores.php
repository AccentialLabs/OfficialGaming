<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
   
        <link href="../../assets/css/jogadores-u2.css" rel="stylesheet"/>
        <script src="../../assets/js/jogadores-u2.js"></script> 

        <script src="../../assets/js/views/ajax/jogadoresAjax.js"></script> 

        <!--container-->
        <div id="elemento1" class="col-md-10  container-style">
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


                <div id="Layer1" class="col-md-12">
                    <div class="table-responsive">
                        <table class="tablesorter">
                            <thead>
                                <tr style="border-width: thin; border-style: solid; border-color: black;">
                                    <!-- datatableCount -->
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Nome</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Cargo</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Departamento</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Unidade</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Cidade</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Estado</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;">País</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Ativo</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th> 

                            </tr>
                            </thead>
                            <tbody ng-repeat="membro in membroSede">
                                <!-- Data Show Row-->

                                <?php foreach ($usuariotb as $usuariotb) {
                                    if ($usuariotb['status'] != 2) {
                                        ?>
                                        <tr class="listas" style="border-width: thin; border-style: solid;">


                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['nome']; ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['cargo']; ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['departamento']; ?> </td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['unidade'] ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['cidade'] ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['estado'] ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $usuariotb['pais'] ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $usuariotb['id']; ?>" value="<?php echo $usuariotb['status']; ?>" <?php
                                                                                                                                     if ($usuariotb['status'] == 1) {
                                                                                                                                         echo "checked";
                                                                                                                                     }
                                                                                                                                     ?>/></center></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class="glyphicon glyphicon-ban-circle excluirUsuario" id="<?php echo $usuariotb['id']; ?>"></span></center> </td>
                                    </tr>
    <?php }
} ?>

                            </tbody>
                        </table>
                    </div>

                </div>

                <!--MODAL-->
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> <center>ATENÇÃO!</center></h4>
                            </div>
                            <div class="modal-body">
                                <p>Excluir o Funcionário também o</br>exclui das Equipes que ele participa.</br> Confirme se deseja excluí-lo.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIM MODAL-->            


                <!-- rodape -->
                <div>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal">Adicionar Funcionário</button>
                    <button class="btn btn-deafult pull-right btncinza1">Importar planilha</button>
                    <button class="btn btn-deafult pull-right btncinza2">Enviar e-mail/convite</button>

                </div> 

            </div>
        </div>


<!--FIM container-->