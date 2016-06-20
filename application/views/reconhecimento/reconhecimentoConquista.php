
<!--PODEMOS UTILIZAR ESSA TELA COMO EXEMPLO POIS AQUI ESTA EXECUTANDO DUAS TABELAS-->


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


        <link href="../../assets/css/reconhecimentos-conquistas.css" rel="stylesheet"/>

        <script src="../../assets/js/views/ajax/reconhecimentoConquistaAjax.js"></script>

 
    <body>
        
            <!--estou criando essa linha de comandos agora para somente a parte da opção de filtragem-->
            <form  method="post" action="http://localhost:9090/gaming/index.php/reconhecimento/createFiltrareconhecimmento">
       

        <!--container-->
        <div class="col-md-10  container-style">
            <div id="page-content" class="margembranca"> 

                <ol class="breadcrumb">
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Products </a> </li>
                    <li><a href="#">Xyz </a> </li>
                    <li class="active">Features</li>
                </ol>

                <div class="col-md-7 ">
                </div>
                <div class="col-lg-4">
                    <select class="span1 pull-right" id="tipofiltra" name="tipofiltra">
                        <option value="1">Selecione o Tipo para filtrar</option>
                        <option value="2">Viagem</option>
                        <option value="3">Eletrodomésticos</option>
                        <option value="4">Eletroeletrónico</option>
                        <option value="5">Celular/Smartphone</option>
                        <option value="6">Computador/Tablet</option>
                        <option value="7">Show/Entretenimento</option>
                        <option value="8">Comida/Gastronomia</option>
                        <option value="9">Bebida/Enogastronomia</option>
                    </select>
                </div>

                <div id="Layer1" class="col-md-11">
                    <div class="table-responsive">
                        <table class="tablesorter">
                            <thead>
                                <tr>
                                    <!-- datatableCount -->
                                    <th style="border-width: thin; border-style: solid; border-color: black;">Reconhecimentos<br/>Conquistas</th> 
                                    <th style="border-width: thin; border-style: solid; border-color: black;"><center>Tipo </center></th>
                            <th style="border-width: thin; border-style: solid; border-color: black;"><center>Modo de aferição</center></th> 
                            <th style="border-width: thin; border-style: solid; border-color: black;"><center>Ativo</center></th> 
                            <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>

                            </tr>
                            </thead>
                            <tbody ng-repeat="membro in membroSede">
                                <!-- Data Show Row-->

                         <?php foreach ($reconhecimento as $reconhecimento) {
                             if($reconhecimento['status'] != 2){?> <!--penultimo passo, para exexutar tudo com o Foreach-->

                            <tr class="listas">

                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $reconhecimento['selecioneacoes'];?></td>
                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $reconhecimento['tipo'];?></td>
                            <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $reconhecimento['modoafericao'];?></td>
                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" class="statusCheckbox" name="opcoes" id="<?php echo $reconhecimento['id'];?>" value="<?php echo $reconhecimento['status'];?>" <?php
                                                                                                                                     if ($reconhecimento['status'] == 1) {
                                                                                                                                         echo "checked";
                                                                                                                                     }
                                                                                                                                     ?>/> </center></td>
                            <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirReconhecimento" id="<?php echo $reconhecimento['id'];?>" ></span></center> </td>
                            </tr>
                            
                             <?php }}?> <!penultimo passo>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- rodape -->
                <div>
                    <a href="../reconhecimento/cadastrarConquista">    <button type="button" class="btn btn-primary pull-right">Adicionar Reconhecimento</button> </a>
                </div> 

            </div>
        </div>
      </form>
    </body>

<!--FIM container-->