
<link href="../../assets/css/missoes.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/missoesAjax.js"></script>

<!--container-->
<div class="col-md-10  container-style container" id="container">
    <div id="page-content" class="margembranca"> 

        <ol class="breadcrumb">
            <li><a href="#">Home</a> </li>
            <li><a href="#">Products </a> </li>
            <li><a href="#">Xyz </a> </li>
            <li class="active">Features</li>
        </ol>


        <div id="Layer1" class="col-md-11">
            <div class="col-sm-6 col-lg-9" >
                <div class="table-responsive">
                    <table class="tablesorter col-md-12" id="Layer1">
                        <thead>
                            <tr>
                                <!-- datatableCount -->
                                <th style="border-width: thin; border-style: solid; border-color: black;">Missões</th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th> 
                        <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>

                        </tr>
                        </thead>
                        <tbody ng-repeat="membro in membroSede"> 
                            <!-- Data Show Row-->

                            <?php
                            foreach ($missoes as $missoestab) {
                                if ($missoestab['status'] != 2) {
                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach--> 

                                    <tr class="listas"> 
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $missoestab['missao']; ?></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $missoestab['id'] ?>" value="<?php echo $missoestab['status']; ?>" <?php
                                    if ($missoestab['status'] == 1) {
                                        echo "checked";
                                    }
                                    ?>/> </center></td>
                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><span class = "glyphicon glyphicon-ban-circle excluirMissao" id="<?php echo $missoestab['id'] ?>"></span></center> </td>
                                </tr>
                                <?php
                            }
                        }
                        ?> <!penultimo passo>

                        </tbody>
                    </table>
                </div>
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

        <div>
            <a href="../missoes/cadastrarMissoes"> <button type="button" class="btn btn-primary pull-right">Adicionar Missão</button> </a>
            <button class="btn btn-deafult pull-right btnazul">Clonar Missão</button>
        </div> 

    </div>
</div>

<!--FIM container-->