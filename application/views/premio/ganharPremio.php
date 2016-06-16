<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

     
        <link href="../../assets/css/Premios.css" rel="stylesheet"/>

         <script src="../../assets/js/views/ajax/premiosAjax.js"></script>
    
        <!--antepenultimo passo para mostrar na tela se funciona-->
        <form  method="post" action="http://localhost:9090/gaming/index.php/premio/createGanharpremio" >      
          
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



                    <div class="col-md-12" >

                        <div class="col-md-5">
                        </div>

                        <div class = "checbox col-md-3 ">
                            <label><input type="checkbox" id="catalogopremio" name="catalogopremio" VALUE="1" >Somente do catalogo de premios</label>                               
                        </div>
                        <div class="col-md-4 ">
                            <select class="col-md-9" id="tipofiltra" name="tipofiltra">
                                <option value="1">Selecione o tipo para filtrar</option>
                                <option value="2">Viagem</option>
                                <option value="3">Eletrodomésticos</option>
                                <option value="4">Comida</option>
                            </select>
                        </div>
                    </div>

                    <div id="Layer1" class="col-md-11">
                        <div class="table-responsive">
                            <table class="tablesorter">
                                <thead>
                                    <tr>
                                        <!-- datatableCount -->
                                        <th style="border-width: thin; border-style: solid; border-color: black;">Prêmios</th> 
                                        <th style="border-width: thin; border-style: solid; border-color: black;"><center>Tipo </center></th>
                                <th style="border-width: thin; border-style: solid; border-color: black;">Qtd.inicial</th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;">Qtd.Atual</th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;">Ativo</th> 
                                <th style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox" name="opcoes" value="html"/></center></th>

                                </tr>
                                </thead>
                                <tbody ng-repeat="membro in membroSede">
                                    <!-- Data Show Row-->

                                    <?php
                                    foreach ($premio as $premio) {
                                        if ($premio['status'] != 2) {
                                            ?> 
                                            <tr class="listas">
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['nome']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['tipopremio_id']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['quantidadepremios']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $premio['atualqtd']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;"><center><input type="checkbox"  name="opcoes" id="<?php echo $premio['id']; ?>" value="<?php echo $premio['status']; ?>" <?php
                                                                                                                                         if ($premio['status'] == 1) {
                                                                                                                                             echo "checked";
                                                                                                                                         }
                                                                                                                                         ?>   class="statusCheckbox" /> </center></td>
                                        <td style="border-width: thin; border-style: solid; border-color: black;"><center><span  class = "glyphicon glyphicon-ban-circle excluirPremios" id="<?php echo $premio['id']; ?>"></span></center> </td>
                                        </tr>
    <?php }
} ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- rodape -->
                    <div>
                        <!-- Trigger the modal with a button -->
                          <a href="../premio/cadastrarpremio"> <button type="button" class="btn btn-info pull-right btnazul" data-toggle="modal" data-target="#myModal">Adicionar Prêmio</button> </a>   
                    </div> 

                </div>
            </div>
        </form>
    </body>
</html>

<!--FIM container-->