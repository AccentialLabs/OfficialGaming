<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->    <link href="http://localhost:9090/game/css/bootstrap.min.css" rel="stylesheet"/> 
        <link href="../../assets/css/programas-arg.css" rel="stylesheet"/>
        <script src="../../assets/js/views/ajax/programasAjax.js"></script>

    <body>

        <!--antepenultimo passo para mostrar na tela se funciona-->

        <!--container-->
        <div class="col-md-10  container-style">
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
                            <table class="tablesorter" id="Layer1">
                                <thead>
                                    <tr>

                                        <!-- datatableCount -->
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Programas</th> 

                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center>Dt.Início</center></th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center>Dt.Final</center></th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>

                                </tr>
                                </thead>
                                <tbody ng-repeat="membro in membroSede">
                                    <!-- Data Show Row-->

                                    <?php
                                    foreach ($programas as $programa) {
                                        $dtInicio = explode(' ', $programa['datainicio']);
                                        $dtTermino = explode(' ', $programa['datatermino']);
                                        ?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                                        <tr class="listas">
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $programa['nome']; ?></td>

                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo date('d/m/Y', strtotime($dtInicio[0])); ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo date('d/m/Y', strtotime($dtTermino[0])); ?></td>
                                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes"  class="statusCheckbox" id="<?php echo $programa['id']; ?>" value="<?php echo $programa['status']; ?>" <?php
                                        if ($programa['status'] == 1) {
                                            echo "checked";
                                        }
                                        ?>  /> </center></td>
                                    <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirPrograma" id="<?php echo $programa['id']; ?>" ></span></center> </td>
                                    </tr>

                                        <?php } ?> <!penultimo passo>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- rodape -->
                <div>
                    <a href="../missoes/cadastrarMissoes"> <button type="button" class="btn btn-primary pull-right">Adicionar programa</button> </a>
                    <button class="btn btn-deafult pull-right btnazul">Clonar Programa</button> 
                    <a href="../funcionario/enviarEmailConvite"> <button class="btn btn-deafult pull-right btnazul">Enviar e-mail/convite</button> </a>
                </div> 

            </div>
        </div>

    </body>
</html>

<!--FIM container-->