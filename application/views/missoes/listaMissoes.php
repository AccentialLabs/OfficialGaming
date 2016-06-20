
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
                            foreach ($missoes as $missao) {
                                if ($missao['status'] != 2) {
                                    ?> <!--penultimo passo, para exexutar tudo com o Foreach--> 

                                    <tr class="listas">
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $missao['missao']; ?></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $missao['id'] ?>" value="<?php echo $missao['status']; ?>" <?php if ($missao['status'] == 1) {
                                echo "checked";
                            } ?>/> </center></td>
                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirMissao" id="<?php echo $missao['id'] ?>"></span></center> </td>
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
        <!-- rodape -->
        <div>
            <a href="../missoes/cadastrarMissoes"> <button type="button" class="btn btn-primary pull-right">Adicionar Missão</button> </a>
            <button class="btn btn-deafult pull-right btnazul">Clonar Missão</button>
        </div> 

    </div>
</div>

<!--FIM container-->