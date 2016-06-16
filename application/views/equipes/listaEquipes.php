<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

  
        <link href="../../assets/css/Equipes.css" rel="stylesheet"/>

        <script src="../../assets/js/views/ajax/equipesAjax.js"></script>

        <!--container-->
        <div id="elemento1"  class="col-md-10  container-style">
            <div  id="elemento1" class="margembranca"> 

                <div id="elemento1" class="col-md-12 pull-left">
                    <div class="col-md-12" id="elemento1" >
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a> </li>
                            <li><a href="#">Products </a> </li>
                            <li><a href="#">Xyz </a> </li>
                            <li class="active">Features</li>
                        </ol>
                    </div>
                </div>

                <div id="elemento1" class="col-md-11">
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
                                        <tr>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $equipestab['equipes']; ?></td> <!--ultimo passo , já conferindo no BD-->
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox"  name="opcoes" id="<?php echo $equipestab['id']; ?>" value="<?php echo $equipestab['status']; ?>" <?php if ($equipestab['status'] == 1) {
                                            echo "checked";
                                        } ?>   class="statusCheckbox" /> </center></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirEquipes" id="<?php echo $equipestab['id']; ?>"></span></center></td>
                                    </tr>

                                       <?php }
                                       } ?> <!penultimo passo>
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
                                <h4 class="modal-title"><center> ATENÇÃO!</center></h4>
                            </div>
                            <div class="modal-body">
                                <p>Esta Equipe está sendo usada em </br>Ações e Programas!</br>
                                    Confirme se deseja mesmo excluí-la.</p>
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
                    <a href="../equipes/cadastrarEquipes"> <button type="button" class="btn btn-info pull-right btnazul" data-toggle="modal" data-target="#myModal">Criar/Adicionar Equipes</button> </a>  
                </div> 

            </div>
        </div>

<!--FIM container-->